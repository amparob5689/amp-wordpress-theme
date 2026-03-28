<?php
/**
 * Template Name: Services
 * Description: Services page with jump-linked service sections, sticky sub-nav, FAQ, and CTA.
 *
 * @package AMP_Theme
 */

get_header();

$img_dir       = get_template_directory_uri() . '/assets/images/logos';
$contact_url   = home_url( '/contact/' );
?>

  <!-- Services Hero -->
  <section class="services-hero">
    <div class="amp-squiggle" style="top:-12%;right:-4%;width:420px;height:500px;opacity:0.07;transform:scaleX(-1);">
      <img src="<?php echo esc_url( $img_dir . '/amp_squiggle.png' ); ?>" alt="">
    </div>
    <div class="container">
      <h1 class="fade-in">Affiliate Services for<br><em>Financial Brands</em></h1>
      <p class="services-hero-sub fade-in fade-in-delay-1">Specialized capabilities for fintech companies, banks, lenders, and financial institutions that need their affiliate channel managed with expertise, precision, and regulatory awareness.</p>
    </div>
  </section>

  <!-- Sticky Sub-Nav -->
  <div class="sub-nav" id="subNav">
    <div class="sub-nav-inner">
      <a href="#affiliate-program-management" class="sub-nav-link active" data-section="affiliate-program-management">Program Management</a>
      <a href="#app-monetization" class="sub-nav-link" data-section="app-monetization">App Monetization</a>
      <a href="#amp-partner-network" class="sub-nav-link" data-section="amp-partner-network">Partner Network</a>
      <a href="#reporting-analytics" class="sub-nav-link" data-section="reporting-analytics">Reporting & Analytics</a>
    </div>
  </div>

  <!-- SERVICE 01: Affiliate Program Management -->
  <section class="service-section" id="affiliate-program-management">
    <div class="container">
      <h2 class="service-h2 fade-in">Affiliate Program Management for Fintech & Financial Services</h2>
      <p class="service-intro fade-in fade-in-delay-1">Affiliate Marketing Partners provides full-service affiliate program management for fintech companies and financial institutions. We handle strategy, publisher recruitment, compliance oversight, optimization, and reporting so your team can focus on product and growth while we build the affiliate channel into a predictable, high-quality acquisition engine.</p>

      <div class="service-layout">
        <div>
          <div class="fit-box fade-in">
            <h3>This is for you if:</h3>
            <ul>
              <li>You have an affiliate program that's underperforming or unmanaged</li>
              <li>You want to launch an affiliate channel but lack internal expertise</li>
              <li>You need an agency partner that understands financial compliance and publisher quality</li>
              <li>You're tired of generalist agencies that treat finance like any other vertical</li>
            </ul>
          </div>
          <div class="results-callout fade-in fade-in-delay-1">
            <h3>Results You Can Expect</h3>
            <ul>
              <li>FloatMe: +241% YoY affiliate revenue, +540% partner growth</li>
            </ul>
          </div>
          <a href="<?php echo esc_url( $contact_url ); ?>" class="service-cta fade-in fade-in-delay-2">Get a Free Program Audit <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg></a>
        </div>
        <div class="wwd-grid">
          <div class="wwd-card fade-in"><h4>Program Strategy & Architecture</h4><p>Commission structures, publisher tiers, and tracking setup designed for fintech KPIs like funded accounts, approval rates, and LTV.</p></div>
          <div class="wwd-card fade-in fade-in-delay-1"><h4>Publisher Recruitment & Vetting</h4><p>We source and qualify finance-focused affiliates, content publishers, and influencers from our established network.</p></div>
          <div class="wwd-card fade-in fade-in-delay-2"><h4>Compliance Governance</h4><p>Every publisher and creative asset is reviewed against financial advertising standards before going live.</p></div>
          <div class="wwd-card fade-in fade-in-delay-3"><h4>Ongoing Optimization</h4><p>Weekly performance reviews, A/B testing of offers and creatives, publisher pruning, and commission adjustments based on quality metrics.</p></div>
          <div class="wwd-card fade-in fade-in-delay-4"><h4>Platform Management</h4><p>Full administration of your affiliate platform (Impact, Everflow, Partnerize, TUNE, CJ, and others), including tracking, attribution, and payment workflows.</p></div>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICE 02: App Monetization -->
  <section class="service-section dark" id="app-monetization">
    <div class="amp-squiggle" style="bottom:-25%;right:-8%;width:500px;height:600px;opacity:0.055;transform:rotate(180deg);">
      <img src="<?php echo esc_url( $img_dir . '/amp_squiggle.png' ); ?>" alt="">
    </div>
    <div class="container">
      <h2 class="service-h2 fade-in">Fintech App Monetization Through Embedded Partner Offers</h2>
      <p class="service-intro fade-in fade-in-delay-1">AMP designs and manages embedded partner offer experiences inside fintech apps. We curate advertisers that align with your users, your brand standards, and your compliance requirements, turning your engaged user base into incremental revenue without compromising the product experience your customers rely on.</p>

      <div class="service-layout reversed">
        <div>
          <div class="fit-box fade-in">
            <h3>This is for you if:</h3>
            <ul>
              <li>You have an engaged user base and want to generate revenue beyond your core product</li>
              <li>You're concerned about maintaining UX quality and brand trust with third-party offers</li>
              <li>You need help sourcing, vetting, and managing advertiser partnerships at scale</li>
              <li>You want to understand the LTV and retention impact of embedded offers with rigorous analytics</li>
            </ul>
          </div>
          <div class="results-callout fade-in fade-in-delay-1">
            <h3>Results You Can Expect</h3>
            <ul>
              <li>FloatMe: grew marketplace from a handful of advertisers to 30+ curated partners, generating $1M+ in marketplace revenue</li>
              <li>Measurable LTV improvement with maintained or improved user satisfaction scores</li>
            </ul>
          </div>
          <a href="<?php echo esc_url( $contact_url ); ?>" class="service-cta fade-in fade-in-delay-2">Explore App Monetization <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg></a>
        </div>
        <div class="wwd-grid">
          <div class="wwd-card fade-in"><h4>Marketplace Strategy</h4><p>We assess your user demographics, app experience, and monetization goals to design an offer marketplace that fits naturally into your product.</p></div>
          <div class="wwd-card fade-in fade-in-delay-1"><h4>Partner Sourcing & Curation</h4><p>We recruit and vet advertisers that are relevant to your users, brand-safe, and compliant with financial regulations.</p></div>
          <div class="wwd-card fade-in fade-in-delay-2"><h4>Placement Optimization</h4><p>A/B testing of offer placements, creative formats, and targeting rules to maximize conversion without disrupting engagement or retention.</p></div>
          <div class="wwd-card fade-in fade-in-delay-3"><h4>Revenue Analytics</h4><p>We work closely with your team to understand retention and quality metrics in the context of your other channels, giving you the full picture needed to make informed decisions about the program.</p></div>
          <div class="wwd-card fade-in fade-in-delay-4"><h4>Compliance Monitoring</h4><p>Every advertiser and offer is screened for regulatory compliance and brand alignment on an ongoing basis.</p></div>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICE 03: AMP Partner Network -->
  <section class="service-section" id="amp-partner-network">
    <div class="container">
      <h2 class="service-h2 fade-in">AMP Partner Network: Affiliate Partnerships Without Full Management</h2>
      <p class="service-intro fade-in fade-in-delay-1">Not every brand needs a fully managed affiliate program. The AMP Partner Network gives fintech apps and finance publishers direct access to our curated marketplace of vetted, high-converting financial brand partnerships, without the overhead of a managed engagement. Whether you're a fintech app looking to monetize through partner offers or a finance publisher seeking quality advertisers, the AMP Partner Network connects you to the right partners faster.</p>

      <div class="service-layout">
        <div>
          <div class="fit-box fade-in">
            <h3>This is for you if:</h3>
            <ul>
              <li>You're a fintech app with an engaged user base looking for monetization partnerships</li>
              <li>You're a finance publisher seeking vetted, high-quality financial brand advertisers</li>
              <li>You want access to pre-negotiated partnership terms without running a full affiliate program</li>
              <li>You have internal resources to manage partnerships but need help sourcing the right ones</li>
              <li>You're exploring affiliate as a channel and want to start lean before committing to full management</li>
            </ul>
          </div>
          <div class="results-callout fade-in fade-in-delay-1">
            <h3>Results You Can Expect</h3>
            <ul>
              <li>Access to 50+ pre-vetted financial brand partnerships</li>
              <li>Faster time-to-revenue: most partners go live within 2–4 weeks of joining</li>
              <li>Lower cost of entry, ideal for early-stage fintech companies testing the affiliate channel</li>
            </ul>
          </div>
          <a href="<?php echo esc_url( $contact_url ); ?>" class="service-cta fade-in fade-in-delay-2">Join the Network <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg></a>
        </div>
        <div class="wwd-grid">
          <div class="wwd-card fade-in"><h4>Curated Partner Matching</h4><p>We connect you with partners from our established network of financial brands, fintech apps, and finance-focused publishers, all pre-vetted for quality and compliance.</p></div>
          <div class="wwd-card fade-in fade-in-delay-1"><h4>Pre-Negotiated Terms</h4><p>Access partnership structures and commission frameworks already optimized for financial products, saving months of negotiation.</p></div>
          <div class="wwd-card fade-in fade-in-delay-2"><h4>Compliance-Ready Partners</h4><p>Every partner in the network has been screened against financial advertising standards, reducing your regulatory risk from day one.</p></div>
          <div class="wwd-card fade-in fade-in-delay-3"><h4>Managed Partnerships</h4><p>All partnerships run through the AMP network with full oversight. We manage the relationships, enforce quality standards, and ensure compliance so you get the results without the operational burden.</p></div>
          <div class="wwd-card fade-in fade-in-delay-4"><h4>Upgrade Path</h4><p>When you're ready to scale, transition seamlessly into our full Affiliate Program Management service with all your partnership data and history intact.</p></div>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICE 04: Reporting & Analytics -->
  <section class="service-section dark" id="reporting-analytics">
    <div class="container">
      <h2 class="service-h2 fade-in">Affiliate Reporting & Analytics for Financial Brands</h2>
      <p class="service-intro fade-in fade-in-delay-1">Most affiliate reporting stops at clicks, impressions, and conversions. For fintech and financial services companies, that's not enough. AMP provides centralized reporting with fintech-specific metrics like funded accounts, approval rates, LTV, default risk, and compliance flags, giving your leadership team the confidence to invest in the affiliate channel.</p>

      <div class="service-layout reversed">
        <div>
          <div class="fit-box fade-in">
            <h3>This is for you if:</h3>
            <ul>
              <li>You have affiliate data fragmented across multiple networks and platforms</li>
              <li>You need to tie affiliate performance to downstream financial KPIs (funded loans, card activations, portfolio quality)</li>
              <li>You want proactive insights and recommendations, not just dashboards</li>
              <li>You need to communicate affiliate channel performance to executive leadership, boards, or regulators</li>
            </ul>
          </div>
          <div class="results-callout fade-in fade-in-delay-1">
            <h3>Results You Can Expect</h3>
            <ul>
              <li>Full visibility into which publishers drive real financial outcomes vs. vanity metrics</li>
              <li>A fully customized dashboard with advanced analytics to flag trends and patterns</li>
            </ul>
          </div>
          <a href="<?php echo esc_url( $contact_url ); ?>" class="service-cta fade-in fade-in-delay-2">Request a Reporting Demo <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg></a>
        </div>
        <div class="wwd-grid">
          <div class="wwd-card fade-in"><h4>Centralized Dashboards</h4><p>We aggregate data from all your affiliate sources into a single reporting layer with real-time visibility.</p></div>
          <div class="wwd-card fade-in fade-in-delay-1"><h4>Fintech-Specific KPIs</h4><p>We track what matters: funded accounts, approval rates, charge-off rates, LTV by publisher, customer acquisition cost by partner tier.</p></div>
          <div class="wwd-card fade-in fade-in-delay-2"><h4>Quality & Compliance Monitoring</h4><p>We closely monitor partners for poor quality, fraudulent or bot traffic, and non-compliant creatives to protect your brand and maintain the integrity of your program.</p></div>
          <div class="wwd-card fade-in fade-in-delay-3"><h4>Weekly Insights & Recommendations</h4><p>Not just data. We deliver analysis with clear actions: which publishers to scale, which to prune, where to adjust commissions.</p></div>
          <div class="wwd-card fade-in fade-in-delay-4"><h4>Executive-Ready Reporting</h4><p>Formatted for leadership reviews, board decks, and regulatory inquiries.</p></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services FAQ -->
  <section class="faq-section" id="services-faq">
    <div class="container">
      <h2 class="faq-heading fade-in">Frequently Asked Questions</h2>
      <div class="faq-list" itemscope itemtype="https://schema.org/FAQPage">
        <div class="faq-item fade-in" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <button class="faq-question" onclick="toggleFaq(this)" itemprop="name">
            How do you find and vet fintech affiliate partners?
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" /></svg>
          </button>
          <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <div class="faq-answer-inner" itemprop="text">We maintain an established network of finance-focused publishers, content sites, and influencers built over 15+ years in the industry. Every potential partner is vetted for content quality, audience relevance, compliance with financial advertising standards, and traffic legitimacy before they're approved for your program.</div>
          </div>
        </div>
        <div class="faq-item fade-in fade-in-delay-1" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <button class="faq-question" onclick="toggleFaq(this)" itemprop="name">
            What KPIs do you optimize for in fintech affiliate programs?
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" /></svg>
          </button>
          <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <div class="faq-answer-inner" itemprop="text">We optimize for the metrics that drive your business (funded accounts, approval rates, customer LTV, and revenue per partner), not vanity metrics like raw clicks or impressions. Every program has a custom KPI framework aligned to your specific financial product and growth targets.</div>
          </div>
        </div>
        <div class="faq-item fade-in fade-in-delay-2" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <button class="faq-question" onclick="toggleFaq(this)" itemprop="name">
            Can you work with our existing networks and tracking platforms?
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" /></svg>
          </button>
          <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <div class="faq-answer-inner" itemprop="text">Yes. We have deep operational experience across Impact, Everflow, Partnerize, TUNE, CJ, and others. We'll work within your current infrastructure or recommend the right platform if you're starting from scratch.</div>
          </div>
        </div>
        <div class="faq-item fade-in fade-in-delay-3" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <button class="faq-question" onclick="toggleFaq(this)" itemprop="name">
            How do you ensure embedded offers don't harm our app's user experience?
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" /></svg>
          </button>
          <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <div class="faq-answer-inner" itemprop="text">We work closely with your product and growth teams to understand your users, their priorities, and what a good experience looks like. Every advertiser and offer is evaluated for alignment with your audience before going live. If something isn't adding value for users, we adjust or remove it. The goal is always to make embedded offers feel like a natural, helpful part of the app experience.</div>
          </div>
        </div>
        <div class="faq-item fade-in fade-in-delay-4" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <button class="faq-question" onclick="toggleFaq(this)" itemprop="name">
            What does your compliance governance process look like?
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" /></svg>
          </button>
          <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <div class="faq-answer-inner" itemprop="text">We review every publisher, creative asset, and landing page against financial advertising regulations and your brand guidelines before activation. Ongoing monitoring catches issues in real time. We maintain documentation for every compliance decision, which is essential for financial brands that face regulatory scrutiny.</div>
          </div>
        </div>
        <div class="faq-item fade-in" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <button class="faq-question" onclick="toggleFaq(this)" itemprop="name">
            How long does a typical engagement last?
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" /></svg>
          </button>
          <div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <div class="faq-answer-inner" itemprop="text">Most clients engage on a 6–12 month basis with ongoing monthly retainers. Affiliate programs are long-term assets that compound over time as publisher relationships mature and optimization data accumulates. We structure engagements to reflect that.</div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
