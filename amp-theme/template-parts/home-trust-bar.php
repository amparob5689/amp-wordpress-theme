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
      <span class="trust-logo-hover">
        <img src="<?php echo esc_url( $img_dir . '/client-floatme-black.png' ); ?>" alt="FloatMe" class="trust-logo trust-logo-default">
        <img src="<?php echo esc_url( $img_dir . '/client-floatme-pink.png' ); ?>" alt="FloatMe" class="trust-logo trust-logo-color">
      </span>
      <span class="trust-logo-hover">
        <img src="<?php echo esc_url( $img_dir . '/client-creditgenie-black.svg' ); ?>" alt="Credit Genie" class="trust-logo trust-logo-default">
        <img src="<?php echo esc_url( $img_dir . '/client-creditgenie-primary.svg' ); ?>" alt="Credit Genie" class="trust-logo trust-logo-color">
      </span>
      <img src="<?php echo esc_url( $img_dir . '/client-atm-color.svg' ); ?>" alt="ATM" class="trust-logo">
      <img src="<?php echo esc_url( $img_dir . '/client-kapitus.png' ); ?>" alt="Kapitus" class="trust-logo" style="height:54px;max-width:200px">
      <img src="<?php echo esc_url( $img_dir . '/client-menthorq.png' ); ?>" alt="MenthorQ" class="trust-logo" style="height:38px;max-width:170px">
      <img src="<?php echo esc_url( $img_dir . '/client-cashably.webp' ); ?>" alt="Cashably" class="trust-logo" style="height:30px;max-width:150px">
      <img src="<?php echo esc_url( $img_dir . '/client-willowwealth.svg' ); ?>" alt="Willow Wealth" class="trust-logo" style="height:26px;max-width:200px">
      <img src="<?php echo esc_url( $img_dir . '/client-altindex.webp' ); ?>" alt="AltIndex" class="trust-logo" style="height:32px;max-width:150px">
      <img src="<?php echo esc_url( $img_dir . '/client-invested-black.webp' ); ?>" alt="Invested Inc." class="trust-logo" style="height:28px;max-width:190px">
    </div>
  </div>
</section>
