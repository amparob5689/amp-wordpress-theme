  <?php
  $contact_email = amp_get_contact_email();
  $cta_text      = amp_get_cta_text();
  ?>

  <!-- CTA Section -->
  <section class="cta-section" id="contact">
    <div class="amp-squiggle cta-squiggle">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logos/amp_squiggle.png' ); ?>" alt="">
    </div>
    <div class="container">
      <h2 class="cta-heading fade-in">Ready to see what a focused affiliate<br>program can do for your business?</h2>
      <p class="cta-sub fade-in fade-in-delay-1">Get a free program audit from the team that lives and breathes affiliate marketing for financial brands.</p>
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary fade-in fade-in-delay-2">
        <?php echo esc_html( $cta_text ); ?>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" style="width:16px;height:16px"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg>
      </a>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="footer-container">
        <div class="footer-brand">
          <div class="footer-logo">
            <?php if ( has_custom_logo() ) : ?>
              <?php
              $logo_id  = get_theme_mod( 'custom_logo' );
              $logo_url = wp_get_attachment_image_url( $logo_id, 'full' );
              ?>
              <img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php bloginfo( 'name' ); ?>">
            <?php else : ?>
              <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logos/AMP White logo - no background.svg' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
            <?php endif; ?>
          </div>
          <p class="footer-tagline">We build and scale performance affiliate programs for fintech brands and financial institutions that demand measurable, compliant growth.</p>
        </div>
        <div class="footer-nav-group">
          <h4>Company</h4>
          <?php
          wp_nav_menu( array(
            'theme_location' => 'footer-company',
            'container'      => false,
            'fallback_cb'    => 'amp_fallback_footer_company',
            'depth'          => 1,
          ) );
          ?>
        </div>
        <div class="footer-nav-group">
          <h4>Services</h4>
          <?php
          wp_nav_menu( array(
            'theme_location' => 'footer-services',
            'container'      => false,
            'fallback_cb'    => 'amp_fallback_footer_services',
            'depth'          => 1,
          ) );
          ?>
        </div>
        <div class="footer-nav-group">
          <h4>Connect</h4>
          <a href="mailto:<?php echo esc_attr( $contact_email ); ?>"><?php echo esc_html( $contact_email ); ?></a>
          <a href="https://www.linkedin.com/company/affiliate-marketing-partners/" target="_blank" rel="noopener noreferrer">LinkedIn</a>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="footer-copy">&copy; <?php echo esc_html( date( 'Y' ) ); ?> Affiliate Marketing Partners LLC. All rights reserved.</div>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>
<?php
function amp_fallback_footer_company() {
	?>
	<a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services</a>
	<a href="<?php echo esc_url( home_url( '/case-studies/' ) ); ?>">Case Studies</a>
	<a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About</a>
	<a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Blog</a>
	<?php
}

function amp_fallback_footer_services() {
	?>
	<a href="<?php echo esc_url( home_url( '/services/#affiliate-program-management' ) ); ?>">Affiliate Program Management</a>
	<a href="<?php echo esc_url( home_url( '/services/#app-monetization' ) ); ?>">App Monetization</a>
	<a href="<?php echo esc_url( home_url( '/services/#amp-partner-network' ) ); ?>">AMP Partner Network</a>
	<a href="<?php echo esc_url( home_url( '/services/#reporting-analytics' ) ); ?>">Reporting & Analytics</a>
	<?php
}
?>
