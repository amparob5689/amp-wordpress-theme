<?php
/**
 * Homepage — Services bento grid.
 *
 * @package AMP_Theme
 */

$services_url = home_url( '/services/' );
?>

<section class="section services" id="services">
  <div class="container">
    <div class="section-header centered fade-in">
      <div class="section-overline on-light">WHAT WE DO</div>
      <h2 class="section-heading">Affiliate Services Built for Financial Brands</h2>
      <p class="section-sub">Specialized capabilities for fintech companies, banks, lenders, and financial institutions that need affiliate programs managed with the rigor their industry demands.</p>
    </div>
    <div class="services-grid">
      <div class="service-card featured fade-in">
        <div class="service-icon">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6" /></svg>
        </div>
        <h3 class="service-title">Affiliate Program Management</h3>
        <p class="service-desc">We take full ownership of your affiliate program, from partner strategy and recruitment to optimization and compliance governance. Whether you're launching a new program or scaling an underperforming one, we build it into a high-quality acquisition channel with vetted finance publishers and transparent performance metrics.</p>
        <a href="<?php echo esc_url( $services_url . '#affiliate-program-management' ); ?>" class="service-link">Learn More <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg></a>
      </div>

      <div class="service-card fade-in fade-in-delay-1">
        <div class="service-icon">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" /></svg>
        </div>
        <h3 class="service-title">App Monetization</h3>
        <p class="service-desc">We design and manage embedded partner offer experiences inside your fintech app, curating advertisers that align with your users, your brand, and your compliance requirements. The result: incremental revenue and higher LTV without compromising the product experience your customers trust.</p>
        <a href="<?php echo esc_url( $services_url . '#app-monetization' ); ?>" class="service-link">Learn More <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg></a>
      </div>

      <div class="service-card featured fade-in fade-in-delay-2">
        <div class="service-icon">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" /></svg>
        </div>
        <h3 class="service-title">AMP Partner Network</h3>
        <p class="service-desc">Don't need full program management? Access our curated network of financial brand partnerships directly. We connect fintech apps and finance publishers with vetted, high-converting offers, giving you the partnerships without the overhead of a managed engagement.</p>
        <a href="<?php echo esc_url( $services_url . '#amp-partner-network' ); ?>" class="service-link">Join the Network <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg></a>
      </div>

      <div class="service-card fade-in fade-in-delay-3">
        <div class="service-icon">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" /></svg>
        </div>
        <h3 class="service-title">Reporting &amp; Analytics</h3>
        <p class="service-desc">Centralized dashboards that go beyond clicks and impressions. We track the metrics that matter to fintech, including funded accounts, approval rates, LTV, and compliance flags. We deliver weekly insights that give your leadership team confidence in the channel.</p>
        <a href="<?php echo esc_url( $services_url . '#reporting-analytics' ); ?>" class="service-link">Learn More <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg></a>
      </div>
    </div>
  </div>
</section>
