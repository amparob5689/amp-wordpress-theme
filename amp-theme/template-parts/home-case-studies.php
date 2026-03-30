<?php
/**
 * Homepage — Case studies / results section.
 * Dynamically queries the case_study CPT. Falls back to hardcoded FloatMe Marketplace if no posts exist yet.
 *
 * @package AMP_Theme
 */

$case_studies = new WP_Query( array(
	'post_type'      => 'case_study',
	'posts_per_page' => 3,
	'orderby'        => 'date',
	'order'          => 'DESC',
) );
?>

<section class="section case-studies" id="results">
  <div class="container">
    <div class="section-header centered fade-in">
      <div class="section-overline on-light">RESULTS</div>
      <h2 class="section-heading">Proven Results for Financial Brands</h2>
      <p class="section-sub">Measurable outcomes from real affiliate programs we manage.</p>
    </div>
    <div class="case-grid">
      <?php if ( $case_studies->have_posts() ) : ?>
        <?php while ( $case_studies->have_posts() ) : $case_studies->the_post(); ?>
          <?php
            $client  = amp_get_case_study_meta( get_the_ID(), 'client_name' );
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
          <div class="case-card fade-in">
            <div class="case-card-accent" style="background:<?php echo esc_attr( $accent ); ?>"></div>
            <div class="case-card-body">
              <div class="case-client"><?php echo esc_html( $client ?: get_the_title() ); ?></div>
              <?php if ( $metrics ) : ?>
              <div class="case-metrics">
                <?php foreach ( $metrics as $m ) : ?>
                <div><div class="case-metric-value"><?php echo esc_html( $m['value'] ); ?></div><div class="case-metric-label"><?php echo esc_html( $m['label'] ); ?></div></div>
                <?php endforeach; ?>
              </div>
              <?php endif; ?>
              <?php if ( has_excerpt() ) : ?>
                <p class="case-desc"><?php echo esc_html( get_the_excerpt() ); ?></p>
              <?php endif; ?>
              <a href="<?php the_permalink(); ?>" class="case-link">Read Case Study <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg></a>
            </div>
          </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php else : ?>
        <!-- Fallback: hardcoded FloatMe Marketplace until case studies are entered in WP Admin -->
        <div class="case-card fade-in">
          <div class="case-card-accent"></div>
          <div class="case-card-body">
            <div class="case-client">FloatMe Marketplace</div>
            <div class="case-metrics">
              <div><div class="case-metric-value">+241%</div><div class="case-metric-label">YoY Revenue</div></div>
              <div><div class="case-metric-value">+88%</div><div class="case-metric-label">YoY EPC</div></div>
              <div><div class="case-metric-value">+540%</div><div class="case-metric-label">Partner Growth</div></div>
            </div>
            <p class="case-desc">FloatMe is an earned-wage access app offering budgeting tools and cash advances to millions of users. AMP took over their marketplace strategy, growing it from a handful of advertisers to 30+ curated partners, transforming affiliate into their fastest-growing revenue channel.</p>
            <a href="<?php echo esc_url( home_url( '/case-studies/' ) ); ?>" class="case-link">View Case Studies <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg></a>
          </div>
        </div>
      <?php endif; ?>
    </div>
    <div class="case-footer fade-in">
      <a href="<?php echo esc_url( get_post_type_archive_link( 'case_study' ) ); ?>" class="btn btn-secondary">View All Case Studies <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" style="width:14px;height:14px"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" /></svg></a>
    </div>
  </div>
</section>
