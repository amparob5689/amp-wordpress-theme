<?php
/**
 * Blog post card — used on blog listing and related posts.
 *
 * @package AMP_Theme
 */
?>

<a href="<?php the_permalink(); ?>" class="blog-card fade-in">
	<?php if ( has_post_thumbnail() ) : ?>
	<div class="blog-card-img">
		<?php the_post_thumbnail( 'medium_large' ); ?>
	</div>
	<?php endif; ?>
	<div class="blog-card-body">
		<h3 class="blog-card-title"><?php the_title(); ?></h3>
		<?php if ( has_excerpt() ) : ?>
			<p class="blog-card-excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 24 ) ); ?></p>
		<?php endif; ?>
		<span class="blog-card-link">Read Article <span>&rarr;</span></span>
	</div>
</a>
