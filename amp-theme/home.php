<?php
/**
 * Blog listing page (home.php).
 * WordPress uses this template when Settings > Reading > Posts page is set.
 *
 * @package AMP_Theme
 */

get_header();
$img_dir = get_template_directory_uri() . '/assets/images/logos';
?>

<section class="blog-hero">
	<div class="amp-squiggle" style="top:-10%;right:-4%;width:380px;height:460px;opacity:0.07;transform:scaleX(-1);">
		<img src="<?php echo esc_url( $img_dir . '/amp_squiggle.png' ); ?>" alt="">
	</div>
	<div class="container">
		<h1 class="fade-in">Insights & Strategy</h1>
		<p class="blog-hero-sub fade-in fade-in-delay-1">Practical guidance on fintech affiliate marketing, app monetization, compliance, and scaling performance partnerships for financial brands.</p>
	</div>
</section>

<section class="blog-grid-section">
	<div class="container">
		<?php if ( have_posts() ) : ?>
		<div class="blog-grid">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content-blog-card' ); ?>
			<?php endwhile; ?>
		</div>

		<?php
		the_posts_pagination( array(
			'mid_size'  => 2,
			'prev_text' => '&larr; Newer',
			'next_text' => 'Older &rarr;',
		) );
		?>

		<?php else : ?>
		<div class="blog-empty">
			<h2>Articles coming soon.</h2>
			<p>We're building a library of fintech affiliate marketing strategy, case breakdowns, and industry insights. Check back soon.</p>
		</div>
		<?php endif; ?>
	</div>
</section>

<?php
get_footer();
