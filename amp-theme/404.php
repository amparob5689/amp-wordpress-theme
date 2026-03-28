<?php
/**
 * 404 page template.
 *
 * @package AMP_Theme
 */

get_header();
?>

<section class="error-404">
	<div class="container">
		<div class="error-content fade-in">
			<span class="error-code">404</span>
			<h1>Page Not Found</h1>
			<p>The page you're looking for doesn't exist or has been moved. If you came from an old link, it may have changed during our recent site update.</p>
			<div class="error-actions">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">Back to Homepage</a>
				<a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn btn-secondary">View Services</a>
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-secondary">Contact Us</a>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
