(function() {
  'use strict';

  // Scroll progress bar
  var progressBar = document.getElementById('scrollProgress');
  function updateProgress() {
    var scrollTop = window.scrollY;
    var docHeight = document.documentElement.scrollHeight - window.innerHeight;
    if (progressBar) {
      progressBar.style.width = (docHeight > 0 ? (scrollTop / docHeight) * 100 : 0) + '%';
    }
  }

  // Sticky nav scroll state
  var nav = document.getElementById('nav');
  function updateNav() {
    if (nav) {
      nav.classList.toggle('scrolled', window.scrollY > 60);
    }
  }

  // Mobile drawer
  var navToggle = document.getElementById('navToggle');
  var mobileDrawer = document.getElementById('mobileDrawer');
  var mobileOverlay = document.getElementById('mobileOverlay');
  var mobileDrawerClose = document.getElementById('mobileDrawerClose');

  function openDrawer() {
    if (mobileDrawer) mobileDrawer.classList.add('active');
    if (mobileOverlay) mobileOverlay.classList.add('active');
    document.body.style.overflow = 'hidden';
  }

  function closeMobile() {
    if (mobileDrawer) {
      mobileDrawer.style.transform = '';
      mobileDrawer.classList.remove('active');
    }
    if (mobileOverlay) {
      mobileOverlay.style.opacity = '';
      mobileOverlay.classList.remove('active');
    }
    document.body.style.overflow = '';
  }

  if (navToggle) navToggle.addEventListener('click', openDrawer);
  if (mobileDrawerClose) mobileDrawerClose.addEventListener('click', closeMobile);
  if (mobileOverlay) mobileOverlay.addEventListener('click', closeMobile);

  if (mobileDrawer) {
    mobileDrawer.querySelectorAll('a').forEach(function(link) {
      link.addEventListener('click', closeMobile);
    });

    var touchStartX = 0;
    var touchCurrentX = 0;
    var drawerWidth = 0;
    var isSwiping = false;

    mobileDrawer.addEventListener('touchstart', function(e) {
      touchStartX = e.touches[0].clientX;
      touchCurrentX = touchStartX;
      drawerWidth = mobileDrawer.offsetWidth;
      isSwiping = true;
      mobileDrawer.style.transition = 'none';
    }, { passive: true });

    mobileDrawer.addEventListener('touchmove', function(e) {
      if (!isSwiping) return;
      touchCurrentX = e.touches[0].clientX;
      var diff = touchStartX - touchCurrentX;
      if (diff > 0) {
        mobileDrawer.style.transform = 'translateX(' + (-diff) + 'px)';
        if (mobileOverlay) mobileOverlay.style.opacity = Math.max(0, 1 - diff / drawerWidth);
      }
    }, { passive: true });

    mobileDrawer.addEventListener('touchend', function() {
      if (!isSwiping) return;
      isSwiping = false;
      mobileDrawer.style.transition = '';
      if (mobileOverlay) mobileOverlay.style.opacity = '';
      var diff = touchStartX - touchCurrentX;
      if (diff > drawerWidth * 0.3) {
        closeMobile();
      } else {
        mobileDrawer.style.transform = '';
      }
    });
  }

  window.closeMobile = closeMobile;

  // Fade-in on scroll (IntersectionObserver)
  var fadeObserver = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        fadeObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

  document.querySelectorAll('.fade-in').forEach(function(el) {
    fadeObserver.observe(el);
  });

  // Animated number counters
  function animateCounter(el) {
    var target = parseInt(el.dataset.target);
    var prefix = el.dataset.prefix || '';
    var suffix = el.dataset.suffix || '';
    var duration = 2000;
    var startTime = performance.now();

    function easeOutCubic(t) { return 1 - Math.pow(1 - t, 3); }

    function update(currentTime) {
      var elapsed = currentTime - startTime;
      var progress = Math.min(elapsed / duration, 1);
      el.textContent = prefix + Math.round(easeOutCubic(progress) * target) + suffix;
      if (progress < 1) requestAnimationFrame(update);
    }

    requestAnimationFrame(update);
  }

  var counterObserver = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        entry.target.querySelectorAll('.metric-number[data-target]').forEach(animateCounter);
        counterObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.3 });

  var heroMetrics = document.querySelector('.hero-metrics');
  if (heroMetrics) counterObserver.observe(heroMetrics);

  // FAQ accordion
  window.toggleFaq = function(btn) {
    var item = btn.parentElement;
    var answer = item.querySelector('.faq-answer');
    var isActive = item.classList.contains('active');

    document.querySelectorAll('.faq-item.active').forEach(function(openItem) {
      openItem.classList.remove('active');
      openItem.querySelector('.faq-answer').style.maxHeight = '0';
    });

    if (!isActive) {
      item.classList.add('active');
      answer.style.maxHeight = answer.scrollHeight + 'px';
    }
  };

  // Services page: sticky sub-nav active state
  var subNavLinks = document.querySelectorAll('.sub-nav-link');
  var serviceSections = document.querySelectorAll('.service-section');

  if (subNavLinks.length && serviceSections.length) {
    function setActiveNav(sectionId) {
      subNavLinks.forEach(function(link) { link.classList.remove('active'); });
      var activeLink = document.querySelector('.sub-nav-link[data-section="' + sectionId + '"]');
      if (activeLink) {
        activeLink.classList.add('active');
        activeLink.scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' });
      }
    }

    var sectionObserver = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          setActiveNav(entry.target.id);
        }
      });
    }, { threshold: 0.05, rootMargin: '-80px 0px -40% 0px' });

    serviceSections.forEach(function(section) {
      sectionObserver.observe(section);
    });

    subNavLinks.forEach(function(link) {
      link.addEventListener('click', function() {
        setActiveNav(link.dataset.section);
      });
    });
  }

  // Services page: sub-nav shadow on scroll
  var subNav = document.getElementById('subNav');
  function updateSubNav() {
    if (subNav) {
      subNav.classList.toggle('shadowed', window.scrollY > 400);
    }
  }

  // Throttled scroll handler
  var ticking = false;
  window.addEventListener('scroll', function() {
    if (!ticking) {
      requestAnimationFrame(function() {
        updateProgress();
        updateNav();
        updateSubNav();
        ticking = false;
      });
      ticking = true;
    }
  });

  // Hero squiggle draw animation
  var squigglePath = document.getElementById('heroSquigglePath');
  if (squigglePath) {
    var pathLength = squigglePath.getTotalLength();
    squigglePath.style.setProperty('--path-length', pathLength);
  }

  // Initial state
  updateProgress();
  updateNav();
  updateSubNav();

})();
