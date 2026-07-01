<?php
/**
 * Template Name: Cookie Policy
 * Description: Cookie policy page for Affiliate Marketing Partners.
 *
 * @package AMP_Theme
 */

get_header();
$contact_email = amp_get_contact_email();
?>

<section class="policy-hero">
	<div class="container">
		<h1 class="fade-in">Cookie Policy</h1>
		<p class="policy-hero-sub fade-in fade-in-delay-1">How this website uses cookies and similar technologies.</p>
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

			<p>This Cookie Policy explains how Affiliate Marketing Partners LLC ("AMP," "we," "our," or "us") uses cookies, pixels, tags, scripts, and similar technologies on this website. It should be read together with our <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy Policy</a>.</p>

			<h2>What Cookies Are</h2>
			<p>Cookies are small text files placed on your device when you visit a website. Similar technologies, such as pixels, tags, and scripts, may collect or store information about your browser, device, or interactions with a website.</p>

			<h2>How We Use Cookies</h2>
			<p>We use cookies and similar technologies to support core website functionality, remember privacy preferences, understand site performance, enable scheduling experiences, and measure marketing or affiliate activity.</p>

			<h2>Cookie Categories</h2>
			<h3>Necessary</h3>
			<p>Necessary cookies support core website features, security, and privacy preference storage. These cookies cannot usually be disabled through the site because the website may not function properly without them.</p>

			<h3>Functional</h3>
			<p>Functional cookies support enhanced features, such as embedded scheduling tools. If you decline these cookies, some embedded features may not load or may require an additional consent step.</p>

			<h3>Analytics And Performance</h3>
			<p>Analytics and performance cookies help us understand how visitors use the website so we can improve content, navigation, and site performance.</p>

			<h3>Marketing And Attribution</h3>
			<p>Marketing and attribution cookies help us understand business interest, measure affiliate or marketing activity, and support partner attribution. These technologies may identify company-level visitor activity or measure whether a visitor interacted with a partner or campaign.</p>

			<h2>Services We Use</h2>
			<p>The services used on this website may include WordPress, Complianz, Calendly, Dealfront/Leadfeeder, Impact, and Google-hosted resources or similar infrastructure. The exact cookies and storage periods may change as these providers update their services.</p>

			<h2>Managing Your Preferences</h2>
			<p>Where required, we ask for your consent before loading non-essential cookies. You can accept, reject, or customize cookie preferences through the cookie banner or preferences tool on the website. You can also adjust browser settings to block or delete cookies, though some features may not work as expected.</p>

			<h2>Updates To This Policy</h2>
			<p>We may update this Cookie Policy from time to time to reflect changes in our website, vendors, or legal requirements. When we do, we will update the "Last updated" date above.</p>

			<h2>Contact Us</h2>
			<p>If you have questions about this Cookie Policy, contact us at <a href="<?php echo esc_url( 'mailto:' . $contact_email ); ?>"><?php echo esc_html( $contact_email ); ?></a>.</p>
			<?php } ?>
		</article>
	</div>
</section>

<?php
get_footer();
