<?php
/**
 * Single Case Study template.
 *
 * @package AMP_Theme
 */

get_header();

while ( have_posts() ) :
	the_post();

	$client_name = amp_get_case_study_meta( get_the_ID(), 'client_name' );
	$industry    = amp_get_case_study_meta( get_the_ID(), 'client_industry' );
	$accent      = amp_get_case_study_meta( get_the_ID(), 'accent_color' ) ?: '#FFB000';
	$quote_text  = amp_get_case_study_meta( get_the_ID(), 'quote_text' );
	$quote_author = amp_get_case_study_meta( get_the_ID(), 'quote_author' );
	$quote_title = amp_get_case_study_meta( get_the_ID(), 'quote_title' );

	$metrics = array();
	for ( $i = 1; $i <= 3; $i++ ) {
		$val   = amp_get_case_study_meta( get_the_ID(), "metric_{$i}_value" );
		$label = amp_get_case_study_meta( get_the_ID(), "metric_{$i}_label" );
		if ( $val ) {
			$metrics[] = array( 'value' => $val, 'label' => $label );
		}
	}
?>

<article class="case-study-single">
	<section class="case-study-hero">
		<div class="container">
			<a href="<?php echo esc_url( get_post_type_archive_link( 'case_study' ) ); ?>" class="cs-back-link">&larr; All Case Studies</a>
			<?php if ( $industry ) : ?>
				<span class="cs-industry"><?php echo esc_html( $industry ); ?></span>
			<?php endif; ?>
			<h1 class="fade-in"><?php the_title(); ?></h1>
			<?php if ( has_excerpt() ) : ?>
				<p class="cs-excerpt fade-in fade-in-delay-1"><?php echo esc_html( get_the_excerpt() ); ?></p>
			<?php endif; ?>
		</div>
	</section>

	<?php if ( $metrics ) : ?>
	<section class="case-study-metrics">
		<div class="container">
			<div class="cs-metrics-grid fade-in">
				<?php foreach ( $metrics as $m ) : ?>
				<div class="cs-metric" style="border-top-color:<?php echo esc_attr( $accent ); ?>">
					<span class="cs-metric-value"><?php echo esc_html( $m['value'] ); ?></span>
					<span class="cs-metric-label"><?php echo esc_html( $m['label'] ); ?></span>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
	<?php endif; ?>

	<section class="case-study-content">
		<div class="container">
			<div class="cs-body fade-in">
				<?php the_content(); ?>
			</div>
		</div>
	</section>

	<?php if ( $quote_text ) : ?>
	<section class="case-study-quote">
		<div class="container">
			<blockquote class="cs-pullquote fade-in" style="border-left-color:<?php echo esc_attr( $accent ); ?>">
				<p>&ldquo;<?php echo esc_html( $quote_text ); ?>&rdquo;</p>
				<?php if ( $quote_author ) : ?>
				<cite>
					<strong><?php echo esc_html( $quote_author ); ?></strong>
					<?php if ( $quote_title ) : ?>
						<span><?php echo esc_html( $quote_title ); ?></span>
					<?php endif; ?>
				</cite>
				<?php endif; ?>
			</blockquote>
		</div>
	</section>
	<?php endif; ?>

	<?php if ( has_post_thumbnail() ) : ?>
	<section class="case-study-image">
		<div class="container">
			<?php the_post_thumbnail( 'large', array( 'class' => 'cs-featured-img fade-in' ) ); ?>
		</div>
	</section>
	<?php endif; ?>
</article>

<?php
endwhile;
get_footer();
