<?php
/**
 * Template Name: Schedule
 * Description: Calendly scheduling page — embeds Jessica's Calendly widget.
 *
 * @package AMP_Theme
 */

get_header();
$calendly_url = get_theme_mod( 'amp_calendly_url', 'https://calendly.com/jessica-nqq/30min' );
?>

<section class="schedule-hero">
	<div class="container">
		<h1 class="fade-in">Schedule a Meeting</h1>
		<p class="schedule-hero-sub fade-in fade-in-delay-1">Book a free 30-minute discovery call with our strategy team to discuss your affiliate program goals, challenges, and how AMP can help.</p>
	</div>
</section>

<section class="schedule-embed">
	<div class="container">
		<div class="calendly-wrapper fade-in">
			<?php
			$page_content = get_the_content();
			if ( ! empty( trim( $page_content ) ) ) {
				the_content();
			} else {
			?>
			<div class="calendly-inline-widget" data-url="<?php echo esc_url( $calendly_url ); ?>" style="min-width:320px;height:700px;"></div>
			<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
			<?php } ?>
		</div>
	</div>
</section>

<?php
get_footer();
