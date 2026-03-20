# AMP WordPress Theme

Custom WordPress theme for [Affiliate Marketing Partners](https://affiliatemarketingpartners.co) -- a fintech affiliate marketing agency.

## Theme Overview

- **Design**: Ported from a high-fidelity HTML prototype with glass-morphism cards, gradient backgrounds, scroll-triggered animations, and a marigold/navy brand palette.
- **Content Management**: Blog posts via native WordPress editor, case studies via a custom post type with built-in meta fields.
- **SEO/GEO/AIO**: Schema markup (Organization, Person, Article, FAQ), AI-crawler-friendly HTML, `llms.txt` for AI discoverability.

## Local Development

1. Install [LocalWP](https://localwp.com/) (free)
2. Create a new site in LocalWP
3. Symlink or copy `amp-theme/` into your LocalWP site's `wp-content/themes/` directory:
   ```bash
   ln -s /path/to/this-repo/amp-theme /path/to/localwp-site/app/public/wp-content/themes/amp-theme
   ```
4. Activate the theme in WordPress Admin > Appearance > Themes

## Deployment

### Option A: WP Pusher (Recommended)
1. Install the [WP Pusher](https://wppusher.com/) plugin on your WordPress site
2. Connect your GitHub account
3. Install theme from this repo -- push-to-deploy updates automatically

### Option B: Manual Upload
1. Zip the `amp-theme/` folder
2. Upload via WordPress Admin > Appearance > Themes > Add New > Upload

## File Structure

```
amp-theme/
├── style.css                 # Theme metadata
├── functions.php             # Theme setup, enqueues, menus, CPT
├── header.php                # Navigation + head
├── footer.php                # Footer + CTA + scripts
├── front-page.php            # Homepage
├── page-services.php         # Services page
├── page-contact.php          # Contact page
├── single-case_study.php     # Case study detail
├── archive-case_study.php    # Case studies listing
├── single.php                # Blog post
├── home.php                  # Blog listing
├── 404.php                   # 404 page
├── assets/
│   ├── css/main.css          # All styles
│   ├── js/main.js            # Animations + interactions
│   └── images/               # Static assets
├── inc/
│   ├── post-types.php        # Case Study CPT + meta boxes
│   └── customizer.php        # Theme Customizer settings
└── template-parts/           # Reusable template components
```

## Recommended Plugins

- **Yoast SEO** -- Meta tags, sitemaps, Open Graph
- **Google Site Kit** -- Analytics + Search Console
- **WPForms Lite** -- Contact form
- **WP Super Cache** -- Page caching
- **UpdraftPlus** -- Automated backups
- **Redirection** -- 301 redirects for Squarespace migration
