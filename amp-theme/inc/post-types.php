<?php
/**
 * Custom Post Types and Meta Boxes
 *
 * @package AMP_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register the Case Study custom post type.
 */
function amp_register_case_study_cpt() {
	$labels = array(
		'name'               => 'Case Studies',
		'singular_name'      => 'Case Study',
		'menu_name'          => 'Case Studies',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New Case Study',
		'edit_item'          => 'Edit Case Study',
		'new_item'           => 'New Case Study',
		'view_item'          => 'View Case Study',
		'search_items'       => 'Search Case Studies',
		'not_found'          => 'No case studies found',
		'not_found_in_trash' => 'No case studies found in Trash',
	);

	register_post_type( 'case_study', array(
		'labels'       => $labels,
		'public'       => true,
		'has_archive'  => true,
		'rewrite'      => array( 'slug' => 'case-studies', 'with_front' => false ),
		'menu_icon'    => 'dashicons-chart-bar',
		'supports'     => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'show_in_rest' => true,
	) );
}
add_action( 'init', 'amp_register_case_study_cpt' );

/**
 * Flush rewrite rules on theme activation so case study URLs work immediately.
 */
function amp_flush_rewrites() {
	amp_register_case_study_cpt();
	flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'amp_flush_rewrites' );

/**
 * Add meta box for case study details.
 */
function amp_case_study_meta_boxes() {
	add_meta_box(
		'amp_case_study_details',
		'Case Study Details',
		'amp_case_study_details_callback',
		'case_study',
		'normal',
		'high'
	);
}
add_action( 'add_meta_boxes', 'amp_case_study_meta_boxes' );

function amp_case_study_details_callback( $post ) {
	wp_nonce_field( 'amp_case_study_save', 'amp_case_study_nonce' );

	$fields = array(
		'client_name'     => get_post_meta( $post->ID, '_amp_client_name', true ),
		'client_industry' => get_post_meta( $post->ID, '_amp_client_industry', true ),
		'metric_1_value'  => get_post_meta( $post->ID, '_amp_metric_1_value', true ),
		'metric_1_label'  => get_post_meta( $post->ID, '_amp_metric_1_label', true ),
		'metric_2_value'  => get_post_meta( $post->ID, '_amp_metric_2_value', true ),
		'metric_2_label'  => get_post_meta( $post->ID, '_amp_metric_2_label', true ),
		'metric_3_value'  => get_post_meta( $post->ID, '_amp_metric_3_value', true ),
		'metric_3_label'  => get_post_meta( $post->ID, '_amp_metric_3_label', true ),
		'quote_text'      => get_post_meta( $post->ID, '_amp_quote_text', true ),
		'quote_author'    => get_post_meta( $post->ID, '_amp_quote_author', true ),
		'quote_title'     => get_post_meta( $post->ID, '_amp_quote_title', true ),
		'accent_color'    => get_post_meta( $post->ID, '_amp_accent_color', true ),
	);
	if ( empty( $fields['accent_color'] ) ) {
		$fields['accent_color'] = '#FFB000';
	}
	?>
	<style>
		.amp-meta-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 20px; }
		.amp-meta-grid label { display: block; font-weight: 600; margin-bottom: 4px; }
		.amp-meta-grid input, .amp-meta-grid textarea { width: 100%; }
		.amp-meta-full { grid-column: 1 / -1; }
		.amp-metric-row { display: grid; grid-template-columns: 1fr 2fr; gap: 12px; align-items: end; }
	</style>

	<div class="amp-meta-grid">
		<div>
			<label for="amp_client_name">Client Name</label>
			<input type="text" id="amp_client_name" name="amp_client_name" value="<?php echo esc_attr( $fields['client_name'] ); ?>" placeholder="e.g., FloatMe">
		</div>
		<div>
			<label for="amp_client_industry">Industry</label>
			<input type="text" id="amp_client_industry" name="amp_client_industry" value="<?php echo esc_attr( $fields['client_industry'] ); ?>" placeholder="e.g., Earned Wage Access / Fintech">
		</div>
	</div>

	<h4 style="margin-top:24px;">Metrics (up to 3)</h4>
	<?php for ( $i = 1; $i <= 3; $i++ ) : ?>
	<div class="amp-metric-row" style="margin-bottom:12px;">
		<div>
			<label for="amp_metric_<?php echo $i; ?>_value">Metric <?php echo $i; ?> — Value</label>
			<input type="text" id="amp_metric_<?php echo $i; ?>_value" name="amp_metric_<?php echo $i; ?>_value" value="<?php echo esc_attr( $fields["metric_{$i}_value"] ); ?>" placeholder="e.g., +241% YoY">
		</div>
		<div>
			<label for="amp_metric_<?php echo $i; ?>_label">Metric <?php echo $i; ?> — Label</label>
			<input type="text" id="amp_metric_<?php echo $i; ?>_label" name="amp_metric_<?php echo $i; ?>_label" value="<?php echo esc_attr( $fields["metric_{$i}_label"] ); ?>" placeholder="e.g., Affiliate Revenue Growth">
		</div>
	</div>
	<?php endfor; ?>

	<h4 style="margin-top:24px;">Client Testimonial (optional)</h4>
	<div class="amp-meta-grid">
		<div class="amp-meta-full">
			<label for="amp_quote_text">Quote</label>
			<textarea id="amp_quote_text" name="amp_quote_text" rows="3" placeholder="Client quote about working with AMP..."><?php echo esc_textarea( $fields['quote_text'] ); ?></textarea>
		</div>
		<div>
			<label for="amp_quote_author">Author Name</label>
			<input type="text" id="amp_quote_author" name="amp_quote_author" value="<?php echo esc_attr( $fields['quote_author'] ); ?>" placeholder="e.g., Sarah Johnson">
		</div>
		<div>
			<label for="amp_quote_title">Author Title</label>
			<input type="text" id="amp_quote_title" name="amp_quote_title" value="<?php echo esc_attr( $fields['quote_title'] ); ?>" placeholder="e.g., VP of Growth, FloatMe">
		</div>
	</div>

	<h4 style="margin-top:24px;">Display</h4>
	<div class="amp-meta-grid">
		<div>
			<label for="amp_accent_color">Accent Color</label>
			<input type="color" id="amp_accent_color" name="amp_accent_color" value="<?php echo esc_attr( $fields['accent_color'] ); ?>">
		</div>
	</div>
	<?php
}

/**
 * Save case study meta data.
 */
function amp_case_study_save_meta( $post_id ) {
	if ( ! isset( $_POST['amp_case_study_nonce'] ) || ! wp_verify_nonce( $_POST['amp_case_study_nonce'], 'amp_case_study_save' ) ) {
		return;
	}
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}

	$text_fields = array(
		'amp_client_name'     => '_amp_client_name',
		'amp_client_industry' => '_amp_client_industry',
		'amp_metric_1_value'  => '_amp_metric_1_value',
		'amp_metric_1_label'  => '_amp_metric_1_label',
		'amp_metric_2_value'  => '_amp_metric_2_value',
		'amp_metric_2_label'  => '_amp_metric_2_label',
		'amp_metric_3_value'  => '_amp_metric_3_value',
		'amp_metric_3_label'  => '_amp_metric_3_label',
		'amp_quote_author'    => '_amp_quote_author',
		'amp_quote_title'     => '_amp_quote_title',
		'amp_accent_color'    => '_amp_accent_color',
	);

	foreach ( $text_fields as $field => $meta_key ) {
		if ( isset( $_POST[ $field ] ) ) {
			update_post_meta( $post_id, $meta_key, sanitize_text_field( $_POST[ $field ] ) );
		}
	}

	if ( isset( $_POST['amp_quote_text'] ) ) {
		update_post_meta( $post_id, '_amp_quote_text', sanitize_textarea_field( $_POST['amp_quote_text'] ) );
	}
}
add_action( 'save_post_case_study', 'amp_case_study_save_meta' );

/**
 * Helper: get a case study meta field.
 */
function amp_get_case_study_meta( $post_id, $key ) {
	return get_post_meta( $post_id, '_amp_' . $key, true );
}
