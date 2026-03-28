<?php
/**
 * Homepage template.
 *
 * @package AMP_Theme
 */

get_header();

get_template_part( 'template-parts/home', 'hero' );
get_template_part( 'template-parts/home', 'trust-bar' );
get_template_part( 'template-parts/home', 'services' );
get_template_part( 'template-parts/home', 'case-studies' );
get_template_part( 'template-parts/home', 'why-amp' );
get_template_part( 'template-parts/home', 'process' );
get_template_part( 'template-parts/home', 'testimonials' );
get_template_part( 'template-parts/home', 'credentials' );
get_template_part( 'template-parts/home', 'faq' );

get_footer();
