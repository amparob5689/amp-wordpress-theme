<?php
/**
 * Homepage — Why AMP section.
 *
 * @package AMP_Theme
 */

$img_dir = get_template_directory_uri() . '/assets/images/logos';
?>

<section class="section why-amp" id="about">
  <div class="amp-squiggle why-squiggle">
    <img src="<?php echo esc_url( $img_dir . '/amp_squiggle.png' ); ?>" alt="">
  </div>
  <div class="container">
    <div class="why-container">
      <div class="fade-in">
        <div class="section-overline">WHY AMP</div>
        <h2 class="why-quote">We're not a generalist agency. We're the affiliate agency for <em>financial brands</em>.</h2>
        <p class="why-body">Founded by Jessica Robinson, former Global Head of Affiliates at PayPal with 15+ years in performance marketing, AMP exists because affiliate programs for financial brands require a fundamentally different approach. Compliance-first partnerships. Quality-over-quantity publisher networks. Deep understanding of financial customer journeys and the regulatory frameworks that govern them. We chose to specialize so our clients don't have to explain their industry to their agency.</p>
        <div class="why-founder">
          <div class="why-founder-avatar"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/headshots/jessica headshot.webp' ); ?>" alt="Jessica Robinson"></div>
          <div>
            <div class="why-founder-name">Jessica Robinson</div>
            <div class="why-founder-title">Founder &amp; CEO | Former Global Head of Affiliates, PayPal</div>
          </div>
        </div>
      </div>
      <div class="why-items">
        <div class="why-item fade-in">
          <div class="why-item-header">
            <div class="why-item-icon"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg></div>
            <div class="why-item-title">Financial Services Focus</div>
          </div>
          <div class="why-item-desc">We work exclusively with financial brands: fintech apps, banks, lenders, and financial institutions. No generalist guesswork, just deep category expertise and a network built for regulated industries.</div>
        </div>
        <div class="why-item fade-in fade-in-delay-1">
          <div class="why-item-header">
            <div class="why-item-icon"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" /></svg></div>
            <div class="why-item-title">Senior-Led Accounts</div>
          </div>
          <div class="why-item-desc">Your program is managed by experienced strategists, not junior account managers. Direct access to the people making decisions about your channel.</div>
        </div>
        <div class="why-item fade-in fade-in-delay-2">
          <div class="why-item-header">
            <div class="why-item-icon"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" /></svg></div>
            <div class="why-item-title">Network Partnerships</div>
          </div>
          <div class="why-item-desc">Established relationships across Impact, Everflow, Partnerize, TUNE, CJ, and every major affiliate platform. We know which publishers drive funded accounts, not just clicks.</div>
        </div>
        <div class="why-item fade-in fade-in-delay-3">
          <div class="why-item-header">
            <div class="why-item-icon"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605" /></svg></div>
            <div class="why-item-title">Transparent Reporting</div>
          </div>
          <div class="why-item-desc">Weekly dashboards with fintech-specific KPIs like funded accounts, approval rates, LTV, and compliance flags. No black boxes, no vanity metrics.</div>
        </div>
      </div>
    </div>
  </div>
</section>
