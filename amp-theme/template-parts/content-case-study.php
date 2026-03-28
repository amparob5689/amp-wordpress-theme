<?php
/**
 * Case study card — used on archive page and homepage.
 *
 * @package AMP_Theme
 */

$client  = amp_get_case_study_meta( get_the_ID(), 'client_name' );
$industry = amp_get_case_study_meta( get_the_ID(), 'client_industry' );
$accent  = amp_get_case_study_meta( get_the_ID(), 'accent_color' ) ?: '#FFB000';

$metrics = array();
for ( $i = 1; $i <= 3; $i++ ) {
	$val   = amp_get_case_study_meta( get_the_ID(), "metric_{$i}_value" );
	$label = amp_get_case_study_meta( get_the_ID(), "metric_{$i}_label" );
	if ( $val ) {
		$metrics[] = array( 'value' => $val, 'label' => $label );
	}
}
?>

<a href="<?php the_permalink(); ?>" class="cs-card fade-in">
	<div class="cs-card-accent" style="background:<?php echo esc_attr( $accent ); ?>"></div>
	<div class="cs-card-body">
		<?php if ( $industry ) : ?>
			<span class="cs-card-industry"><?php echo esc_html( $industry ); ?></span>
		<?php endif; ?>
		<h3 class="cs-card-title"><?php echo esc_html( $client ?: get_the_title() ); ?></h3>
		<?php if ( has_excerpt() ) : ?>
			<p class="cs-card-excerpt"><?php echo esc_html( get_the_excerpt() ); ?></p>
		<?php endif; ?>
		<?php if ( $metrics ) : ?>
		<div class="cs-card-metrics">
			<?php foreach ( $metrics as $m ) : ?>
			<div class="cs-card-metric">
				<span class="cs-card-metric-value" style="color:<?php echo esc_attr( $accent ); ?>"><?php echo esc_html( $m['value'] ); ?></span>
				<span class="cs-card-metric-label"><?php echo esc_html( $m['label'] ); ?></span>
			</div>
			<?php endforeach; ?>
		</div>
		<?php endif; ?>
		<span class="cs-card-link">Read Case Study <span>&rarr;</span></span>
	</div>
</a>
