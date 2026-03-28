<?php
/**
 * Structured Data / Schema Markup
 * Outputs JSON-LD in <head> for SEO, GEO, and AIO.
 *
 * @package AMP_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function amp_schema_output() {
	$schemas = array();

	if ( is_front_page() ) {
		$schemas[] = amp_schema_organization();
		$schemas[] = amp_schema_person_jessica();
	}

	if ( is_singular( 'post' ) ) {
		$schemas[] = amp_schema_article();
		$schemas[] = amp_schema_breadcrumbs();
	}

	if ( is_singular( 'case_study' ) ) {
		$schemas[] = amp_schema_breadcrumbs();
	}

	if ( is_page() && ! is_front_page() ) {
		$schemas[] = amp_schema_breadcrumbs();
	}

	$schemas = array_filter( $schemas );
	foreach ( $schemas as $schema ) {
		echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT ) . '</script>' . "\n";
	}
}
add_action( 'wp_head', 'amp_schema_output', 5 );

function amp_schema_organization() {
	return array(
		'@context'    => 'https://schema.org',
		'@type'       => 'Organization',
		'name'        => 'Affiliate Marketing Partners (AMP)',
		'alternateName' => 'AMP',
		'url'         => home_url( '/' ),
		'logo'        => get_template_directory_uri() . '/assets/images/logos/amp-logo.svg',
		'description' => 'Affiliate Marketing Partners is a specialized affiliate marketing agency for financial brands, providing affiliate program management, app monetization, partner network access, and reporting & analytics for fintech companies, banks, lenders, and financial institutions.',
		'email'       => amp_get_contact_email(),
		'address'     => array(
			'@type'           => 'PostalAddress',
			'addressLocality' => 'Philadelphia',
			'addressRegion'   => 'PA',
			'addressCountry'  => 'US',
		),
		'sameAs'      => array(
			'https://www.linkedin.com/company/affiliate-marketing-partners/',
		),
		'founder'     => array(
			'@type' => 'Person',
			'name'  => 'Jessica Robinson',
		),
		'knowsAbout'  => array(
			'Affiliate marketing',
			'Fintech affiliate programs',
			'Financial services marketing',
			'App monetization',
			'Performance marketing',
			'Affiliate compliance',
		),
	);
}

function amp_schema_person_jessica() {
	return array(
		'@context'    => 'https://schema.org',
		'@type'       => 'Person',
		'name'        => 'Jessica Robinson',
		'jobTitle'    => 'Founder & CEO',
		'worksFor'    => array(
			'@type' => 'Organization',
			'name'  => 'Affiliate Marketing Partners (AMP)',
			'url'   => home_url( '/' ),
		),
		'description' => 'Jessica Robinson is the founder of Affiliate Marketing Partners (AMP) and former Global Head of Affiliates at PayPal, with over 14 years of experience in performance and affiliate marketing for fintech and financial services brands.',
		'knowsAbout'  => array(
			'Affiliate marketing strategy',
			'Fintech growth',
			'PayPal affiliate programs',
			'Financial services compliance',
			'Publisher recruitment and management',
		),
		'sameAs'      => array(
			'https://www.linkedin.com/in/jessicarobinson/',
		),
	);
}

function amp_schema_article() {
	global $post;
	if ( ! $post ) {
		return null;
	}

	$schema = array(
		'@context'      => 'https://schema.org',
		'@type'         => 'Article',
		'headline'      => get_the_title(),
		'datePublished' => get_the_date( 'c' ),
		'dateModified'  => get_the_modified_date( 'c' ),
		'url'           => get_permalink(),
		'author'        => array(
			'@type' => 'Person',
			'name'  => get_post_meta( get_the_ID(), '_amp_author_name', true ) ?: get_the_author(),
		),
		'publisher'     => array(
			'@type' => 'Organization',
			'name'  => 'Affiliate Marketing Partners (AMP)',
			'logo'  => array(
				'@type' => 'ImageObject',
				'url'   => get_template_directory_uri() . '/assets/images/logos/amp-logo.svg',
			),
		),
		'mainEntityOfPage' => array(
			'@type' => 'WebPage',
			'@id'   => get_permalink(),
		),
	);

	if ( has_post_thumbnail() ) {
		$schema['image'] = get_the_post_thumbnail_url( null, 'large' );
	}

	if ( has_excerpt() ) {
		$schema['description'] = get_the_excerpt();
	}

	return $schema;
}

function amp_schema_breadcrumbs() {
	$items = array();
	$pos   = 1;

	$items[] = array(
		'@type'    => 'ListItem',
		'position' => $pos++,
		'name'     => 'Home',
		'item'     => home_url( '/' ),
	);

	if ( is_singular( 'case_study' ) ) {
		$items[] = array(
			'@type'    => 'ListItem',
			'position' => $pos++,
			'name'     => 'Case Studies',
			'item'     => get_post_type_archive_link( 'case_study' ),
		);
		$items[] = array(
			'@type'    => 'ListItem',
			'position' => $pos++,
			'name'     => get_the_title(),
		);
	} elseif ( is_singular( 'post' ) ) {
		$items[] = array(
			'@type'    => 'ListItem',
			'position' => $pos++,
			'name'     => 'Blog',
			'item'     => get_permalink( get_option( 'page_for_posts' ) ),
		);
		$items[] = array(
			'@type'    => 'ListItem',
			'position' => $pos++,
			'name'     => get_the_title(),
		);
	} elseif ( is_page() && ! is_front_page() ) {
		$items[] = array(
			'@type'    => 'ListItem',
			'position' => $pos++,
			'name'     => get_the_title(),
		);
	}

	return array(
		'@context'        => 'https://schema.org',
		'@type'           => 'BreadcrumbList',
		'itemListElement' => $items,
	);
}
