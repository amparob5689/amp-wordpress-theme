<?php
/**
 * Homepage — Industry Credentials / Awards section.
 *
 * @package AMP_Theme
 */

$img_dir = get_template_directory_uri() . '/assets/images/logos';
?>

<section class="section credentials-section">
  <div class="container">
    <div class="section-header centered fade-in">
      <div class="section-overline on-light">INDUSTRY RECOGNITION</div>
    </div>
    <div class="credentials-grid">

      <div class="credential-badge fade-in">
        <div class="credential-img">
          <img src="<?php echo esc_url( $img_dir . '/badge-pma-gold.jpg' ); ?>" alt="PMA Gold Member">
        </div>
        <h4 class="credential-name">PMA Gold Member</h4>
        <p class="credential-desc">Performance Marketing Association</p>
      </div>

      <div class="credential-badge fade-in fade-in-delay-1">
        <div class="credential-img">
          <img src="<?php echo esc_url( $img_dir . '/badge-impact-certified.webp' ); ?>" alt="impact.com Agency Certified">
        </div>
        <h4 class="credential-name">impact.com Certified</h4>
        <p class="credential-desc">Agency Certified Partner</p>
      </div>

      <div class="credential-badge fade-in fade-in-delay-2">
        <div class="credential-img">
          <img src="<?php echo esc_url( $img_dir . '/badge-everflow-certified.png' ); ?>" alt="Everflow Certified">
        </div>
        <h4 class="credential-name">Everflow Certified</h4>
        <p class="credential-desc">Certified Agency Partner</p>
      </div>

      <div class="credential-badge fade-in fade-in-delay-3">
        <div class="credential-img">
          <img src="<?php echo esc_url( $img_dir . '/badge-top30.webp' ); ?>" alt="Top 30 Affiliate Agencies">
        </div>
        <h4 class="credential-name">Top 30 Affiliate Agencies</h4>
        <p class="credential-desc">Hello Partner</p>
      </div>

    </div>
  </div>
</section>
