<?php
/**
 * Template Name: Privacy Policy
 * Description: Privacy policy page for Affiliate Marketing Partners.
 *
 * @package AMP_Theme
 */

get_header();
$contact_email = amp_get_contact_email();
?>

<section class="policy-hero">
	<div class="container">
		<h1 class="fade-in">Privacy Policy</h1>
		<p class="policy-hero-sub fade-in fade-in-delay-1">How Affiliate Marketing Partners collects, uses, and protects information from visitors to this website.</p>
	</div>
</section>

<section class="policy-content">
	<div class="container">
		<article class="policy-document fade-in">
			<?php
			$page_content = get_the_content();
			if ( ! empty( trim( $page_content ) ) ) {
				the_content();
			} else {
			?>
			<p class="policy-updated">Last updated: July 1, 2026</p>

			<p>Affiliate Marketing Partners LLC ("AMP," "we," "our," or "us") respects your privacy. This Privacy Policy explains how we collect, use, disclose, and protect information when you visit our website, contact us, schedule a meeting, or otherwise interact with us online.</p>

			<h2>Information We Collect</h2>
			<p>We may collect information you choose to provide, such as your name, email address, company name, role, message details, and any information submitted through contact forms, email, or scheduling tools.</p>
			<p>We may also collect limited technical and usage information automatically, such as device information, browser type, pages viewed, referring URLs, approximate location derived from IP address, and interactions with our website. Some of this information may be collected through cookies, pixels, tags, or similar technologies, subject to your cookie preferences where required.</p>

			<h2>How We Use Information</h2>
			<p>We use information to respond to inquiries, schedule and manage meetings, provide requested information about our services, maintain and improve the website, understand site performance, support affiliate attribution, identify potential business interest, protect the security of our website, and comply with legal obligations.</p>

			<h2>Cookies And Similar Technologies</h2>
			<p>We use cookies and similar technologies to support core site functionality, understand site performance, enable scheduling experiences, and measure marketing or affiliate activity. You can learn more in our <a href="<?php echo esc_url( home_url( '/cookie-policy/' ) ); ?>">Cookie Policy</a> and manage your preferences through the cookie banner or preferences tool on the site.</p>

			<h2>Third-Party Services</h2>
			<p>We use trusted third-party providers to operate the website and related services. These may include WordPress, Complianz, Calendly, Dealfront/Leadfeeder, Impact, and Google-hosted resources or similar infrastructure. These providers may process information on our behalf or according to their own terms and privacy notices.</p>

			<h2>How We Share Information</h2>
			<p>We may share information with service providers, technology vendors, professional advisors, and business partners where needed to operate the website, respond to requests, measure performance, support affiliate attribution, or comply with law. We do not sell personal information for money. Certain tracking or advertising-related disclosures may be considered a "sale" or "sharing" under some U.S. state privacy laws, and you may opt out where those rights apply.</p>

			<h2>Data Retention</h2>
			<p>We keep information for as long as reasonably necessary for the purposes described in this policy, including to respond to inquiries, maintain business records, comply with legal obligations, resolve disputes, and improve our services.</p>

			<h2>Your Privacy Choices</h2>
			<p>Depending on where you live, you may have rights to request access to, correction of, deletion of, or restriction of certain personal information. You may also have the right to object to certain processing or opt out of certain sharing or targeted advertising activities. To exercise privacy rights, contact us at <a href="<?php echo esc_url( 'mailto:' . $contact_email ); ?>"><?php echo esc_html( $contact_email ); ?></a>.</p>

			<h2>Children's Privacy</h2>
			<p>Our website and services are intended for business audiences and are not directed to children under 13. We do not knowingly collect personal information from children.</p>

			<h2>Security</h2>
			<p>We use reasonable administrative, technical, and organizational safeguards designed to protect information. No method of transmission or storage is completely secure, so we cannot guarantee absolute security.</p>

			<h2>International Visitors</h2>
			<p>Our website is operated from the United States. If you access the website from outside the United States, information may be processed in the United States or other countries where our providers operate.</p>

			<h2>Changes To This Policy</h2>
			<p>We may update this Privacy Policy from time to time. When we do, we will update the "Last updated" date above.</p>

			<h2>Contact Us</h2>
			<p>If you have questions about this Privacy Policy or our privacy practices, contact us at <a href="<?php echo esc_url( 'mailto:' . $contact_email ); ?>"><?php echo esc_html( $contact_email ); ?></a>.</p>
			<?php } ?>
		</article>
	</div>
</section>

<?php
get_footer();
