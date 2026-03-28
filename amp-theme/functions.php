<?php
/**
 * AMP Theme — functions and definitions
 *
 * @package AMP_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'AMP_THEME_VERSION', '1.0.0' );

require_once get_template_directory() . '/inc/post-types.php';
require_once get_template_directory() . '/inc/schema.php';
require_once get_template_directory() . '/inc/seed-blog.php';

/**
 * Theme setup: menus, theme supports, image sizes.
 */
function amp_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo', array(
		'height'      => 80,
		'width'       => 300,
		'flex-height' => true,
		'flex-width'  => true,
	) );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	) );

	register_nav_menus( array(
		'primary'        => __( 'Primary Navigation', 'amp-theme' ),
		'mobile'         => __( 'Mobile Navigation', 'amp-theme' ),
		'footer-company' => __( 'Footer — Company', 'amp-theme' ),
		'footer-services' => __( 'Footer — Services', 'amp-theme' ),
	) );
}
add_action( 'after_setup_theme', 'amp_theme_setup' );

function amp_theme_favicon() {
	echo '<link rel="icon" href="' . esc_url( get_template_directory_uri() . '/assets/images/favicon.svg' ) . '" type="image/svg+xml">';
}
add_action( 'wp_head', 'amp_theme_favicon' );

function amp_theme_dealfront_tracker() {
	?>
	<script>(function(ss,ex){window.ldfdr=window.ldfdr||function(){(ldfdr._q=ldfdr._q||[]).push([].slice.call(arguments));};(function(d,s){fs=d.getElementsByTagName(s)[0];function ce(src){var cs=d.createElement(s);cs.src=src;cs.async=1;fs.parentNode.insertBefore(cs,fs);};ce('https://sc.lfeeder.com/lftracker_v1_'+ss+(ex?'_'+ex:'')+'.js');})(document,'script');})('JMvZ8gv1rb9a2pOd');</script>
	<?php
}
add_action( 'wp_head', 'amp_theme_dealfront_tracker' );

/**
 * Enqueue styles and scripts.
 */
function amp_theme_enqueue_assets() {
	// Google Fonts
	wp_enqueue_style(
		'amp-google-fonts',
		'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap',
		array(),
		null
	);

	// Main stylesheet
	wp_enqueue_style(
		'amp-main-css',
		get_template_directory_uri() . '/assets/css/main.css',
		array( 'amp-google-fonts' ),
		AMP_THEME_VERSION
	);

	// Main JS (in footer)
	wp_enqueue_script(
		'amp-main-js',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		AMP_THEME_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'amp_theme_enqueue_assets' );

/**
 * Customizer settings for editable content.
 */
function amp_theme_customizer( $wp_customize ) {
	// Contact email
	$wp_customize->add_setting( 'amp_contact_email', array(
		'default'           => 'info@ampconsulting.co',
		'sanitize_callback' => 'sanitize_email',
	) );
	$wp_customize->add_control( 'amp_contact_email', array(
		'label'   => __( 'Contact Email', 'amp-theme' ),
		'section' => 'title_tagline',
		'type'    => 'email',
	) );

	// Hero metrics section
	$wp_customize->add_section( 'amp_hero_metrics', array(
		'title'    => __( 'Hero Metrics', 'amp-theme' ),
		'priority' => 30,
	) );

	$metrics = array(
		array( 'id' => 'metric_1_value',  'label' => 'Metric 1 — Value',  'default' => '122' ),
		array( 'id' => 'metric_1_prefix', 'label' => 'Metric 1 — Prefix', 'default' => '' ),
		array( 'id' => 'metric_1_suffix', 'label' => 'Metric 1 — Suffix', 'default' => '%' ),
		array( 'id' => 'metric_1_label',  'label' => 'Metric 1 — Label',  'default' => 'Average Revenue Growth' ),
		array( 'id' => 'metric_2_value',  'label' => 'Metric 2 — Value',  'default' => '500' ),
		array( 'id' => 'metric_2_prefix', 'label' => 'Metric 2 — Prefix', 'default' => '' ),
		array( 'id' => 'metric_2_suffix', 'label' => 'Metric 2 — Suffix', 'default' => '+' ),
		array( 'id' => 'metric_2_label',  'label' => 'Metric 2 — Label',  'default' => 'Publisher Contacts' ),
		array( 'id' => 'metric_3_value',  'label' => 'Metric 3 — Value',  'default' => '75' ),
		array( 'id' => 'metric_3_prefix', 'label' => 'Metric 3 — Prefix', 'default' => '' ),
		array( 'id' => 'metric_3_suffix', 'label' => 'Metric 3 — Suffix', 'default' => 'k+' ),
		array( 'id' => 'metric_3_label',  'label' => 'Metric 3 — Label',  'default' => 'New Monthly Users' ),
		array( 'id' => 'metric_4_value',  'label' => 'Metric 4 — Value',  'default' => '15' ),
		array( 'id' => 'metric_4_prefix', 'label' => 'Metric 4 — Prefix', 'default' => '' ),
		array( 'id' => 'metric_4_suffix', 'label' => 'Metric 4 — Suffix', 'default' => '+ yrs' ),
		array( 'id' => 'metric_4_label',  'label' => 'Metric 4 — Label',  'default' => 'Industry Experience' ),
	);

	foreach ( $metrics as $m ) {
		$wp_customize->add_setting( 'amp_' . $m['id'], array(
			'default'           => $m['default'],
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_control( 'amp_' . $m['id'], array(
			'label'   => $m['label'],
			'section' => 'amp_hero_metrics',
			'type'    => 'text',
		) );
	}

	// CTA text
	$wp_customize->add_setting( 'amp_cta_text', array(
		'default'           => 'Get in Touch',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'amp_cta_text', array(
		'label'   => __( 'CTA Button Text', 'amp-theme' ),
		'section' => 'title_tagline',
		'type'    => 'text',
	) );

	// Calendly URL
	$wp_customize->add_setting( 'amp_calendly_url', array(
		'default'           => 'https://calendly.com/jessica-nqq/30min',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'amp_calendly_url', array(
		'label'   => __( 'Calendly Scheduling URL', 'amp-theme' ),
		'section' => 'title_tagline',
		'type'    => 'url',
	) );
}
add_action( 'customize_register', 'amp_theme_customizer' );

/**
 * Auto-create required pages and configure static front page on theme activation.
 *
 * Runs on after_switch_theme (theme activation) and on admin_init as a safety net.
 * Uses an option flag so it only runs the creation logic once.
 */
function amp_theme_auto_setup_pages() {
	$pages_version = 5;
	if ( (int) get_option( 'amp_theme_pages_version', 0 ) >= $pages_version ) {
		return;
	}

	$pages = array(
		'home' => array(
			'title'    => 'Home',
			'slug'     => 'home',
			'template' => '',
		),
		'services' => array(
			'title'    => 'Services',
			'slug'     => 'services',
			'template' => 'page-services.php',
		),
		'about' => array(
			'title'    => 'About',
			'slug'     => 'about',
			'template' => 'page-about.php',
		),
		'contact' => array(
			'title'    => 'Contact',
			'slug'     => 'contact',
			'template' => 'page-contact.php',
		),
		'schedule' => array(
			'title'    => 'Schedule a Meeting',
			'slug'     => 'schedule',
			'template' => 'page-schedule.php',
		),
		'blog' => array(
			'title'    => 'Blog',
			'slug'     => 'blog',
			'template' => '',
		),
	);

	foreach ( $pages as $key => $page_data ) {
		$existing = get_page_by_path( $page_data['slug'] );
		if ( $existing ) {
			$page_id = $existing->ID;
			if ( $existing->post_status !== 'publish' ) {
				wp_update_post( array(
					'ID'          => $page_id,
					'post_status' => 'publish',
				) );
			}
		} else {
			$page_id = wp_insert_post( array(
				'post_title'  => $page_data['title'],
				'post_name'   => $page_data['slug'],
				'post_type'   => 'page',
				'post_status' => 'publish',
			) );
		}

		if ( ! empty( $page_data['template'] ) && $page_id && ! is_wp_error( $page_id ) ) {
			update_post_meta( $page_id, '_wp_page_template', $page_data['template'] );
		}

		$pages[ $key ]['id'] = $page_id;
	}

	if ( ! empty( $pages['home']['id'] ) && ! is_wp_error( $pages['home']['id'] ) ) {
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $pages['home']['id'] );
	}

	if ( ! empty( $pages['blog']['id'] ) && ! is_wp_error( $pages['blog']['id'] ) ) {
		update_option( 'page_for_posts', $pages['blog']['id'] );
	}

	// Delete default "Hello World" post.
	$hello = get_page_by_path( 'hello-world', OBJECT, 'post' );
	if ( $hello ) {
		wp_delete_post( $hello->ID, true );
	}

	update_option( 'amp_theme_pages_version', $pages_version );
	flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'amp_theme_auto_setup_pages' );
add_action( 'init', 'amp_theme_auto_setup_pages' );

/**
 * Auto-create seed case studies so the site isn't empty out of the box.
 */
function amp_theme_seed_case_studies() {
	$seed_version = 3;
	if ( (int) get_option( 'amp_theme_case_studies_version', 0 ) >= $seed_version ) {
		return;
	}

	$case_studies = array(
		array(
			'title'    => 'FloatMe Partnership Drives +241% Revenue YoY',
			'slug'     => 'floatme',
			'excerpt'  => 'FloatMe is a growing financial app that provides budgeting tools and cash advances to its members. AMP grew their marketplace revenue stream from a handful of advertisers to over 30 curated partners.',
			'content'  => '<h2>Objective</h2>
<p>FloatMe is a growing financial app that provides budgeting tools and cash advances to its members. FloatMe approached Affiliate Marketing Partners (AMP) because they saw an opportunity to provide more value to their members by strategically partnering with advertisers that could improve their members\' financial outlook. At that time, FloatMe was working with only a handful of advertisers with consistent, but low monthly revenue. Today, AMP and FloatMe have grown this revenue stream to over 30 curated advertisers with meaningful offers.</p>

<h2>Solution</h2>
<p>AMP was quickly onboarded and expanded FloatMe\'s partner set by aligning with advertisers that were a fit with the FloatMe members\' need to earn money, save money or better manage their money. AMP also worked closely with FloatMe\'s Marketing and Product teams to redesign the offer presentation within the app, add in new placement opportunities and create new avenues of promoting these advertisers to the FloatMe user base.</p>',
			'meta'     => array(
				'client_name'     => 'FloatMe',
				'client_industry' => 'Financial App / Fintech',
				'metric_1_value'  => '+241%',
				'metric_1_label'  => 'YoY Revenue',
				'metric_2_value'  => '+88%',
				'metric_2_label'  => 'YoY EPC',
				'metric_3_value'  => '+540%',
				'metric_3_label'  => 'Partner Growth',
				'quote_text'      => 'AMP helped revamp our affiliate strategy for the long-term in the most effective way - by understanding our customers, our product, and our mission. Every week AMP continues to bring ideas toward growing our business while keeping it simple for FloatMe. AMP manages it all, and provides new partnerships, dashboards and analysis that keep us well-informed and growing.',
				'quote_author'    => 'Kelly Furman',
				'quote_title'     => 'Head of Marketing, FloatMe',
				'accent_color'    => '#FFB000',
			),
		),
	);

	foreach ( $case_studies as $cs ) {
		$existing = get_page_by_path( $cs['slug'], OBJECT, 'case_study' );
		if ( $existing ) {
			$post_id = $existing->ID;
			wp_update_post( array(
				'ID'           => $post_id,
				'post_title'   => $cs['title'],
				'post_excerpt' => $cs['excerpt'],
				'post_content' => $cs['content'],
				'post_status'  => 'publish',
			) );
		} else {
			$post_id = wp_insert_post( array(
				'post_title'   => $cs['title'],
				'post_name'    => $cs['slug'],
				'post_type'    => 'case_study',
				'post_status'  => 'publish',
				'post_excerpt' => $cs['excerpt'],
				'post_content' => $cs['content'],
			) );
		}

		if ( $post_id && ! is_wp_error( $post_id ) ) {
			foreach ( $cs['meta'] as $key => $value ) {
				update_post_meta( $post_id, '_amp_' . $key, $value );
			}
		}
	}

	update_option( 'amp_theme_case_studies_version', $seed_version );
}
add_action( 'init', 'amp_theme_seed_case_studies', 20 );

/**
 * Helper: get the contact email from Customizer.
 */
function amp_get_contact_email() {
	return get_theme_mod( 'amp_contact_email', 'info@ampconsulting.co' );
}

/**
 * Helper: get CTA text from Customizer.
 */
function amp_get_cta_text() {
	return get_theme_mod( 'amp_cta_text', 'Schedule a Free Program Audit' );
}

/**
 * Serve llms.txt from site root for AI crawlers.
 */
function amp_llms_txt_rewrite() {
	add_rewrite_rule( '^llms\.txt$', 'index.php?amp_llms_txt=1', 'top' );
}
add_action( 'init', 'amp_llms_txt_rewrite' );

function amp_llms_txt_query_var( $vars ) {
	$vars[] = 'amp_llms_txt';
	return $vars;
}
add_filter( 'query_vars', 'amp_llms_txt_query_var' );

function amp_llms_txt_template_redirect() {
	if ( get_query_var( 'amp_llms_txt' ) ) {
		header( 'Content-Type: text/plain; charset=utf-8' );
		readfile( get_template_directory() . '/llms.txt' );
		exit;
	}
}
add_action( 'template_redirect', 'amp_llms_txt_template_redirect' );

/**
 * Helper: get a hero metric from Customizer.
 */
function amp_get_metric( $num, $field ) {
	$key = 'amp_metric_' . $num . '_' . $field;
	$defaults = array(
		'1_value' => '122', '1_prefix' => '', '1_suffix' => '%', '1_label' => 'Average Revenue Growth',
		'2_value' => '500', '2_prefix' => '',  '2_suffix' => '+', '2_label' => 'Publisher Contacts',
		'3_value' => '75',  '3_prefix' => '', '3_suffix' => 'k+', '3_label' => 'New Monthly Users',
		'4_value' => '15',  '4_prefix' => '',  '4_suffix' => '+ yrs', '4_label' => 'Industry Experience',
	);
	$default_key = $num . '_' . $field;
	return get_theme_mod( $key, isset( $defaults[ $default_key ] ) ? $defaults[ $default_key ] : '' );
}

