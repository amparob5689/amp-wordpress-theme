<?php
/**
 * Homepage — Hero section.
 *
 * @package AMP_Theme
 */

$contact_email = amp_get_contact_email();
$cta_text      = amp_get_cta_text();
$img_dir       = get_template_directory_uri() . '/assets/images/logos';
?>

<section class="hero" id="hero">
  <svg class="hero-squiggle-svg" viewBox="-1 4 97 92" preserveAspectRatio="xMinYMid meet" aria-hidden="true">
    <path id="heroSquigglePath"
      fill="none"
      stroke="#F5A623"
      stroke-width="3"
      stroke-linecap="round"
      stroke-linejoin="round"
      d="M 8.5 49
         C 10.5 49 13.5 48 13.5 42
         A 2 2 0 0 1 17.5 42
         L 17.5 58
         A 2.4 2.4 0 0 0 22.3 58
         L 22.3 33
         A 3.2 3.2 0 0 1 28.7 33
         L 28.7 66
         A 4.4 4.4 0 0 0 37.5 66
         L 37.5 25
         A 5.2 5.2 0 0 1 47.9 25
         L 47.9 75
         A 5.5 5.5 0 0 0 58.9 75
         L 58.9 18
         A 7.5 7.5 0 0 1 73.9 18
         L 73.9 82
         A 8.2 8.2 0 0 0 90.3 82
         L 90.3 48"/>
  </svg>
  <div class="hero-container">
    <div class="hero-content">
      <h1 class="hero-h1 fade-in">The Affiliate Agency for<br><em>Financial Brands</em></h1>
      <p class="hero-sub fade-in fade-in-delay-1">We build and manage performance affiliate programs for fintech brands and financial institutions that require measurable, compliant growth.</p>
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary fade-in fade-in-delay-2">
        <?php echo esc_html( $cta_text ); ?>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg>
      </a>
    </div>
    <div class="hero-right"></div>
  </div>
</section>
