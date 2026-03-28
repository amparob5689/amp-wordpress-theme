<?php
/**
 * Case Studies archive template.
 *
 * @package AMP_Theme
 */

get_header();
$img_dir = get_template_directory_uri() . '/assets/images/logos';
?>

<section class="cs-archive-hero">
	<div class="amp-squiggle" style="top:-10%;right:-4%;width:380px;height:460px;opacity:0.07;transform:scaleX(-1);">
		<img src="<?php echo esc_url( $img_dir . '/amp_squiggle.png' ); ?>" alt="">
	</div>
	<div class="container">
		<h1 class="fade-in">Case Studies</h1>
		<p class="cs-archive-sub fade-in fade-in-delay-1">Real results for financial brands. See how AMP builds and scales high-performing affiliate programs with measurable outcomes — funded accounts, revenue growth, and partner quality.</p>
	</div>
</section>

<section class="cs-archive-grid-section">
	<div class="container">
		<?php if ( have_posts() ) : ?>
		<div class="cs-archive-grid">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content-case-study' ); ?>
			<?php endwhile; ?>
		</div>

		<?php
		the_posts_pagination( array(
			'mid_size'  => 2,
			'prev_text' => '&larr; Previous',
			'next_text' => 'Next &rarr;',
		) );
		?>

		<?php else : ?>
		<div class="cs-empty">
			<h2>Case studies coming soon.</h2>
			<p>We're documenting results from our financial brand partnerships. Check back soon or <a href="<?php echo esc_url( 'mailto:' . amp_get_contact_email() ); ?>">get in touch</a> to discuss your program.</p>
		</div>
		<?php endif; ?>
	</div>
</section>

<?php
get_footer();
