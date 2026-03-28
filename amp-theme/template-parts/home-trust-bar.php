<?php
/**
 * Homepage — Trust bar (client logos).
 *
 * @package AMP_Theme
 */

$img_dir = get_template_directory_uri() . '/assets/images/logos';
?>

<section class="trust-bar">
  <div class="container">
    <div class="trust-bar-label fade-in">Trusted by Leading Financial Brands</div>
    <div class="trust-logos fade-in fade-in-delay-1">
      <img src="<?php echo esc_url( $img_dir . '/client-westernunion.svg' ); ?>" alt="Western Union" class="trust-logo">
      <img src="<?php echo esc_url( $img_dir . '/client-public.png' ); ?>" alt="Public" class="trust-logo">
      <span class="trust-logo-hover">
        <img src="<?php echo esc_url( $img_dir . '/client-floatme-black.png' ); ?>" alt="FloatMe" class="trust-logo trust-logo-default">
        <img src="<?php echo esc_url( $img_dir . '/client-floatme-pink.png' ); ?>" alt="FloatMe" class="trust-logo trust-logo-color">
      </span>
      <span class="trust-logo-hover">
        <img src="<?php echo esc_url( $img_dir . '/client-creditgenie-black.svg' ); ?>" alt="Credit Genie" class="trust-logo trust-logo-default">
        <img src="<?php echo esc_url( $img_dir . '/client-creditgenie-primary.svg' ); ?>" alt="Credit Genie" class="trust-logo trust-logo-color">
      </span>
      <img src="<?php echo esc_url( $img_dir . '/client-atm-color.svg' ); ?>" alt="ATM" class="trust-logo">
      <img src="<?php echo esc_url( $img_dir . '/client-piere.svg' ); ?>" alt="Piere" class="trust-logo">
      <img src="<?php echo esc_url( $img_dir . '/client-afn.svg' ); ?>" alt="Advance Funds Network" class="trust-logo" style="height:38px">
    </div>
  </div>
</section>
