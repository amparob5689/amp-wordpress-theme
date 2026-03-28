<?php
/**
 * Single blog post template.
 *
 * @package AMP_Theme
 */

get_header();

while ( have_posts() ) :
	the_post();
?>

<article class="blog-single">
	<header class="blog-single-header">
		<div class="container">
			<a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" class="bs-back-link">&larr; All Articles</a>
			<h1 class="fade-in"><?php the_title(); ?></h1>
			<?php if ( has_excerpt() ) : ?>
				<p class="bs-excerpt fade-in fade-in-delay-1"><?php echo esc_html( get_the_excerpt() ); ?></p>
			<?php endif; ?>
			<div class="bs-meta fade-in fade-in-delay-1">
				<?php
				$custom_author = get_post_meta( get_the_ID(), '_amp_author_name', true );
				$author_display = $custom_author ? $custom_author : get_the_author();
			?>
				<span class="bs-author">By <?php echo esc_html( $author_display ); ?></span>
				<?php
				$cats = get_the_category();
				if ( $cats ) : ?>
					<span class="bs-sep">&middot;</span>
					<span class="bs-category"><?php echo esc_html( $cats[0]->name ); ?></span>
				<?php endif; ?>
			</div>
		</div>
	</header>

	<?php if ( has_post_thumbnail() ) : ?>
	<div class="blog-single-hero-img">
		<div class="container">
			<?php the_post_thumbnail( 'large', array( 'class' => 'bs-featured-img fade-in' ) ); ?>
		</div>
	</div>
	<?php endif; ?>

	<div class="blog-single-content">
		<div class="container">
			<div class="bs-body">
				<?php the_content(); ?>
			</div>

			<?php
			$tags = get_the_tags();
			if ( $tags ) : ?>
			<div class="bs-tags">
				<?php foreach ( $tags as $tag ) : ?>
					<a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" class="bs-tag"><?php echo esc_html( $tag->name ); ?></a>
				<?php endforeach; ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
</article>

<?php
// Related posts
$related = new WP_Query( array(
	'posts_per_page' => 3,
	'post__not_in'   => array( get_the_ID() ),
	'orderby'        => 'rand',
) );

if ( $related->have_posts() ) : ?>
<section class="blog-related">
	<div class="container">
		<h2 class="blog-related-heading">More from AMP</h2>
		<div class="blog-grid">
			<?php while ( $related->have_posts() ) : $related->the_post(); ?>
				<?php get_template_part( 'template-parts/content-blog-card' ); ?>
			<?php endwhile; ?>
		</div>
	</div>
</section>
<?php
wp_reset_postdata();
endif;

endwhile;
get_footer();
