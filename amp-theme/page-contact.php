<?php
/**
 * Template Name: Contact
 * Description: Contact page with form area, contact details, and what-to-expect info.
 *
 * @package AMP_Theme
 */

get_header();
$contact_email = amp_get_contact_email();
$img_dir       = get_template_directory_uri() . '/assets/images/logos';
?>

<section class="contact-hero">
	<div class="amp-squiggle" style="bottom:-20%;left:-6%;width:400px;height:480px;opacity:0.06;">
		<img src="<?php echo esc_url( $img_dir . '/amp_squiggle.png' ); ?>" alt="">
	</div>
	<div class="container">
		<h1 class="fade-in">Let's Talk</h1>
		<p class="contact-hero-sub fade-in fade-in-delay-1">Whether you're launching a new affiliate program, scaling an existing one, or exploring app monetization, we'd love to hear from you.</p>
	</div>
</section>

<section class="contact-main">
	<div class="container">
		<div class="contact-grid">
			<div class="contact-form-col fade-in">
				<h2>Send Us a Message</h2>
				<?php
				$page_content = get_the_content();
				if ( ! empty( trim( $page_content ) ) ) {
					the_content();
				} else {
				?>
				<div class="contact-form-placeholder">
					<p>Install <strong>WPForms Lite</strong> (free) or <strong>Contact Form 7</strong>, create a form, and paste the shortcode in this page's content editor.</p>
					<p>Or reach out directly:</p>
					<a href="<?php echo esc_url( 'mailto:' . $contact_email ); ?>" class="btn btn-primary"><?php echo esc_html( $contact_email ); ?></a>
				</div>
				<?php } ?>
			</div>

			<div class="contact-info-col fade-in fade-in-delay-1">
				<div class="contact-info-card">
					<h3>What to Expect</h3>
					<ol class="contact-expect-list">
						<li><strong>We reply within 24 hours</strong>, usually sooner.</li>
						<li><strong>30-minute discovery call</strong> where we'll learn about your program, goals, and challenges.</li>
						<li><strong>Free program audit</strong>. If there's a fit, we'll put together an actionable assessment of your affiliate channel.</li>
						<li><strong>Custom proposal</strong> with a tailored engagement scope, clear deliverables, and timeline.</li>
					</ol>
				</div>

				<div class="contact-info-card contact-schedule-card">
					<h3>Prefer to Skip the Form?</h3>
					<p>Book a free 30-minute discovery call directly with our strategy team.</p>
					<a href="<?php echo esc_url( home_url( '/schedule/' ) ); ?>" class="btn btn-outline contact-schedule-btn">Schedule a Meeting &rarr;</a>
				</div>

				<div class="contact-info-card">
					<h3>Direct Contact</h3>
					<div class="contact-detail">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" /></svg>
						<a href="<?php echo esc_url( 'mailto:' . $contact_email ); ?>"><?php echo esc_html( $contact_email ); ?></a>
					</div>
				</div>

				<div class="contact-info-card">
					<h3>Best Fit For</h3>
					<ul class="contact-fit-list">
						<li>Fintech apps and financial services companies</li>
						<li>Teams looking to launch, scale, or fix an affiliate program</li>
						<li>Companies that value compliance and partner quality</li>
						<li>Brands ready to invest in a performance channel</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
