<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <div class="scroll-progress" id="scrollProgress"></div>

  <nav class="nav" id="nav">
    <div class="nav-container">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-logo">
        <?php if ( has_custom_logo() ) : ?>
          <?php
          $logo_id  = get_theme_mod( 'custom_logo' );
          $logo_url = wp_get_attachment_image_url( $logo_id, 'full' );
          ?>
          <img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php bloginfo( 'name' ); ?>">
        <?php else : ?>
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logos/AMP White logo - no background.svg' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
        <?php endif; ?>
      </a>
      <div class="nav-links">
        <?php
        wp_nav_menu( array(
          'theme_location' => 'primary',
          'container'      => false,
          'fallback_cb'    => 'amp_fallback_nav',
          'depth'          => 1,
        ) );
        ?>
      </div>
      <button class="nav-toggle" id="navToggle" aria-label="<?php esc_attr_e( 'Toggle menu', 'amp-theme' ); ?>">
        <span></span><span></span><span></span>
      </button>
    </div>
  </nav>

  <div class="mobile-overlay" id="mobileOverlay"></div>
  <aside class="mobile-drawer" id="mobileDrawer">
    <div class="mobile-drawer-header">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="mobile-drawer-logo">
        <?php if ( has_custom_logo() ) : ?>
          <?php
          $logo_id  = get_theme_mod( 'custom_logo' );
          $logo_url = wp_get_attachment_image_url( $logo_id, 'full' );
          ?>
          <img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php bloginfo( 'name' ); ?>">
        <?php else : ?>
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logos/AMP White logo - no background.svg' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
        <?php endif; ?>
      </a>
      <button class="mobile-drawer-close" id="mobileDrawerClose" aria-label="Close menu">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
      </button>
    </div>
    <nav class="mobile-drawer-nav">
      <?php
      wp_nav_menu( array(
        'theme_location' => 'mobile',
        'container'      => false,
        'fallback_cb'    => 'amp_fallback_mobile_nav',
        'depth'          => 1,
      ) );
      ?>
    </nav>
    <div class="mobile-drawer-footer">
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary mobile-drawer-cta">Get in Touch</a>
    </div>
  </aside>

<?php
/**
 * Fallback nav if no menu is assigned yet.
 */
function amp_fallback_nav() {
	?>
	<a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services</a>
	<a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Insights</a>
	<a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About</a>
	<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a>
	<?php
}

function amp_fallback_mobile_nav() {
	?>
	<a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services</a>
	<a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Insights</a>
	<a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About</a>
	<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a>
	<?php
}
?>
