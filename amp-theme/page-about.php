<?php
/**
 * Template Name: About
 * Description: About page with company story, Jessica's credentials, and team grid with hover bios.
 *
 * @package AMP_Theme
 */

get_header();
$img_dir     = get_template_directory_uri() . '/assets/images';
$contact_url = home_url( '/contact/' );
?>

<section class="about-hero">
	<div class="amp-squiggle" style="top:-10%;right:-4%;width:400px;height:480px;opacity:0.07;transform:scaleX(-1);">
		<img src="<?php echo esc_url( $img_dir . '/logos/amp_squiggle.png' ); ?>" alt="">
	</div>
	<div class="container">
		<h1 class="fade-in">We Build True Partnerships,<br><em>AMPlify Brands</em> & Fuel Growth</h1>
		<p class="about-hero-sub fade-in fade-in-delay-1">Affiliate Marketing Partners is a specialized affiliate marketing agency built exclusively for financial brands. We combine deep industry expertise with hands-on program management to turn affiliate into your most predictable, highest-quality growth channel.</p>
	</div>
</section>

<section class="about-story">
	<div class="container">
		<div class="about-story-grid">
			<div class="about-story-content fade-in">
				<div class="section-overline on-light">OUR STORY</div>
				<h2>Built by Operators, Not Generalists</h2>
				<p>AMP was founded by Jessica Robinson after more than a decade leading affiliate programs at some of the world's largest financial brands, including PayPal, where she served as Global Head of Affiliates.</p>
				<p>She saw the same problem everywhere: financial brands were either working with generalist agencies that didn't understand compliance, publisher quality, or fintech-specific KPIs, or they were trying to manage affiliate in-house without the network, tools, or bandwidth to do it well.</p>
				<p>AMP exists to solve that. We're a small, senior team that works with a focused set of financial brands. Every client gets the attention and expertise of people who've built and scaled programs at the highest level.</p>
			</div>
			<div class="about-story-stats fade-in fade-in-delay-1">
				<div class="about-stat">
					<span class="about-stat-value">15+</span>
					<span class="about-stat-label">Years Industry Experience</span>
				</div>
				<div class="about-stat">
					<span class="about-stat-value">500+</span>
					<span class="about-stat-label">Publisher Contacts</span>
				</div>
				<div class="about-stat">
					<span class="about-stat-value">75k+</span>
					<span class="about-stat-label">New Monthly Users</span>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="about-team">
	<div class="container">
		<div class="section-header centered fade-in">
			<div class="section-overline">MEET THE TEAM</div>
			<h2 class="section-heading" style="color:var(--white);">The People Behind Your Program</h2>
			<p class="section-sub" style="color:var(--slate-light);">A senior, specialized team that treats your affiliate program like their own.</p>
		</div>
		<div class="team-grid">

			<div class="team-card fade-in">
				<div class="team-card-inner">
					<div class="team-card-front">
						<div class="team-avatar">
							<img src="<?php echo esc_url( $img_dir . '/headshots/jessica headshot.webp' ); ?>" alt="Jessica Robinson" style="object-position:center 30%;transform:scale(1.3);">
						</div>
						<h3 class="team-name">Jessica Robinson</h3>
						<span class="team-role">Founder</span>
					</div>
					<div class="team-card-back">
						<p>Former Global Head of Affiliates at PayPal with 15+ years in performance marketing for financial services. Jessica founded AMP to give financial brands access to the same caliber of affiliate strategy that Fortune 500 companies rely on.</p>
					</div>
				</div>
			</div>

		<div class="team-card fade-in fade-in-delay-1">
			<div class="team-card-inner">
				<div class="team-card-front">
					<div class="team-avatar">
						<img src="<?php echo esc_url( $img_dir . '/headshots/dan-desilva.webp' ); ?>" alt="Daniel DeSilva">
					</div>
					<h3 class="team-name">Daniel DeSilva</h3>
					<span class="team-role">Head of Client Services & Network Strategy</span>
				</div>
				<div class="team-card-back">
					<p>Dan DeSilva is an affiliate and partnerships leader with 15 years of experience in performance marketing. His previous experience includes scaling a full-service agency and operating across both brand and publisher sides of the ecosystem.</p>
				</div>
			</div>
		</div>

		<div class="team-card fade-in fade-in-delay-2">
			<div class="team-card-inner">
				<div class="team-card-front">
					<div class="team-avatar">
						<img src="<?php echo esc_url( $img_dir . '/headshots/andy headshot.webp' ); ?>" alt="Andy Shal">
					</div>
					<h3 class="team-name">Andy Shal</h3>
					<span class="team-role">Affiliate Marketing Manager</span>
				</div>
				<div class="team-card-back">
					<p>With 15+ years in affiliate marketing focused on financial services, Andy brings deep industry knowledge and an extensive publisher network. He specializes in uncovering unique growth opportunities for clients across the fintech space.</p>
				</div>
			</div>
		</div>

		<div class="team-card fade-in fade-in-delay-3">
			<div class="team-card-inner">
				<div class="team-card-front">
					<div class="team-avatar">
						<img src="<?php echo esc_url( $img_dir . '/headshots/Candace+Headshot.webp' ); ?>" alt="Candace Massari" style="object-position:center 15%;">
					</div>
					<h3 class="team-name">Candace Massari</h3>
					<span class="team-role">Affiliate Marketing Manager</span>
				</div>
				<div class="team-card-back">
					<p>With 10+ years in affiliate marketing, Candace specializes in partnership strategy and growth across fintech and insurtech. From scaling programs to building marketplace channels, she brings deep experience across the financial services landscape.</p>
				</div>
			</div>
		</div>

		<div class="team-card fade-in fade-in-delay-4">
			<div class="team-card-inner">
				<div class="team-card-front">
					<div class="team-avatar">
						<img src="<?php echo esc_url( $img_dir . '/headshots/Jenn Headshot.webp' ); ?>" alt="Jenn Briggs">
					</div>
					<h3 class="team-name">Jenn Briggs</h3>
					<span class="team-role">Marketplace Operations</span>
				</div>
				<div class="team-card-back">
					<p>With 15+ years in marketing and communications, Jenn helps fintech brands grow through compelling messaging and thoughtful negotiation. She builds win-win partnerships grounded in trust that drive meaningful, lasting results.</p>
				</div>
			</div>
		</div>

		<div class="team-card fade-in fade-in-delay-5">
			<div class="team-card-inner">
				<div class="team-card-front">
					<div class="team-avatar">
						<img src="<?php echo esc_url( $img_dir . '/headshots/Amy Headshot.webp' ); ?>" alt="Amy Park">
					</div>
					<h3 class="team-name">Amy Park</h3>
					<span class="team-role">Account Specialist, Operations</span>
				</div>
				<div class="team-card-back">
					<p>Amy drives both marketplace growth and internal operations at AMP. She leads partner acquisition and offer selection across accounts while building the workflows and systems that help the team scale efficiently.</p>
				</div>
			</div>
		</div>

		</div>
	</div>
</section>

<section class="about-values">
	<div class="container">
		<div class="section-header centered fade-in">
			<div class="section-overline on-light">WHAT SETS US APART</div>
			<h2 class="section-heading">Why Financial Brands Choose AMP</h2>
		</div>
		<div class="about-values-grid">
			<div class="about-value-card fade-in">
				<div class="about-value-icon">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" /></svg>
				</div>
				<h3>Financial Services Expertise</h3>
				<p>We understand compliance requirements, regulated publisher vetting, and the metrics that matter to financial brands: funded accounts, approval rates, LTV, and default risk.</p>
			</div>
			<div class="about-value-card fade-in fade-in-delay-1">
				<div class="about-value-icon">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" /></svg>
				</div>
				<h3>Senior-Level Team</h3>
				<p>No junior account managers learning on your budget. Every person on your account has years of affiliate marketing experience in financial services.</p>
			</div>
			<div class="about-value-card fade-in fade-in-delay-2">
				<div class="about-value-icon">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605" /></svg>
				</div>
				<h3>Established Publisher Network</h3>
				<p>15+ years of relationships with finance-focused publishers, content sites, and influencers, all vetted for quality, compliance, and audience relevance.</p>
			</div>
			<div class="about-value-card fade-in fade-in-delay-3">
				<div class="about-value-icon">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
				</div>
				<h3>Full Transparency</h3>
				<p>Centralized dashboards, weekly reporting, and direct access to your team. No black boxes, no hidden margins, no surprises.</p>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
