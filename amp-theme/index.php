<?php
/**
 * Default template fallback.
 *
 * @package AMP_Theme
 */

get_header();
?>

<section class="section" style="padding-top: 160px;">
  <div class="container">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h1 class="section-heading"><?php the_title(); ?></h1>
          <div style="margin-top: 24px; font-size: 17px; line-height: 1.8; color: var(--text-secondary);">
            <?php the_content(); ?>
          </div>
        </article>
      <?php endwhile; ?>
    <?php else : ?>
      <h1 class="section-heading">Nothing found</h1>
      <p style="margin-top: 16px; color: var(--slate);">No content matches your request.</p>
    <?php endif; ?>
  </div>
</section>

<?php
get_footer();
