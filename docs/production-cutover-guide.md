# AMP Website Production Cutover Guide

## Prerequisites

Before starting, confirm you have:
- [ ] GoDaddy account credentials (domain: affiliatemarketingpartners.co)
- [ ] Squarespace account credentials
- [ ] LocalWP site running with final theme
- [ ] WordPress hosting account (see Step 1)

---

## Step 1: Choose and Set Up WordPress Hosting

You need a production WordPress host. **Do NOT use GoDaddy's WordPress hosting** (it's slow and restrictive). Recommended options:

| Host | Price | Why |
|------|-------|-----|
| **SiteGround** (GoGeek) | ~$15/mo | Great support, staging built in, free SSL |
| **Cloudways** (DigitalOcean) | ~$14/mo | Fast, scalable, developer-friendly |
| **WP Engine** | ~$25/mo | Premium managed WP, great for agencies |

**Once you pick a host:**
1. Create an account and set up a new WordPress site
2. Use a temporary domain for now (your host will provide one, like `ampsite.sg-host.com` or similar)
3. Log into the WordPress admin on your new host
4. Note the admin URL, username, and password

---

## Step 2: Export Your Local Site

In LocalWP:
1. Open your local site admin: `http://amp-theme.local/wp-admin/`
2. Go to **All-in-One WP Migration > Export**
3. Click **Export To > File**
4. Wait for the export to complete, then download the `.wpress` file
5. Keep this file safe -- it contains everything (theme, plugins, content, settings)

---

## Step 3: Import to Production Host

On your new production WordPress site:
1. Log into WordPress admin on the production host
2. Go to **Plugins > Add New**, search for **All-in-One WP Migration**, install and activate it
3. Go to **All-in-One WP Migration > Import**
4. Upload your `.wpress` file
5. Click **Proceed** when prompted (ignore PHP version warnings)
6. After import completes, **log in again using your LocalWP credentials** (the import replaces the host's default login)

**Post-import checklist:**
- [ ] Go to **Settings > Permalinks**, click **Save Changes** (fixes routing)
- [ ] Go to **Settings > General**, confirm Site URL shows the temp domain
- [ ] Visit the site on the temp domain to confirm everything looks correct
- [ ] Check a few pages (Home, Services, About, Contact, Blog) to verify

---

## Step 4: Install Required Plugins on Production

Install these via **Plugins > Add New** in WordPress admin:

### Required
1. **WPForms Lite** -- contact form (search "wpforms", install, activate)
   - After activating, go to **WPForms > All Forms**
   - Your form should have been imported with the site
   - If not, recreate: Add New > Simple Contact Form > customize fields > Save
   - Go to **WPForms > Settings > Email** to confirm notifications go to `info@ampconsulting.co`

2. **All-in-One WP Migration** -- already installed from the import; keep it for backups

### Recommended
3. **Rank Math SEO** (or Yoast SEO) -- for meta descriptions, Open Graph tags, sitemaps
   - Install and run the setup wizard
   - It will auto-generate XML sitemaps
   - Add meta descriptions for each page via the page editor

4. **WP Super Cache** or **LiteSpeed Cache** -- page caching for speed
   - Install, activate, enable caching in settings

5. **Wordfence Security** -- firewall and malware scanning
   - Install, activate, run initial scan

6. **Leadfeeder by Dealfront** -- visitor tracking (see docs/dealfront-setup-guide if you saved it)
   - Install, add your Tracker ID from Dealfront dashboard

### Optional
7. **UpdraftPlus** -- automated backups to Google Drive/Dropbox
8. **Redirection** -- manage 301 redirects from old Squarespace URLs if needed

---

## Step 5: Set Up SSL Certificate

Most hosts provide free SSL (Let's Encrypt):
1. In your hosting control panel, find **SSL/TLS** or **Security**
2. Enable the free SSL certificate for your domain
3. Some hosts auto-provision SSL when you add the domain (Step 6)

---

## Step 6: Point GoDaddy DNS to New Host

This is the step that actually makes the switch. **Do this during low-traffic hours (early morning or weekend).**

### Get your host's DNS info
Your WordPress host will provide one of:
- **Two nameservers** (e.g., `ns1.siteground.net`, `ns2.siteground.net`)
- OR an **IP address** for an A record

### Option A: Change Nameservers (recommended, simplest)

1. Log into **GoDaddy** > **My Products** > **Domains** > click `affiliatemarketingpartners.co`
2. Scroll to **Nameservers** section
3. Click **Change** > select **Custom** > click **Enter my own nameservers**
4. Replace the existing nameservers with the ones from your WordPress host
5. Click **Save**
6. **Propagation takes 15 min to 48 hours** (usually 1-2 hours)

### Option B: Change A Record (if you want to keep GoDaddy DNS)

1. Log into **GoDaddy** > **My Products** > **Domains** > click `affiliatemarketingpartners.co`
2. Click **DNS** tab
3. Find the **A** record with **Name: @**
4. Click the pencil icon to edit
5. Change the **Value** to the IP address from your WordPress host
6. Set TTL to **1 Hour**
7. Click **Save**
8. Also update or add a **CNAME** record: Name: `www`, Value: `affiliatemarketingpartners.co`

### After DNS propagates:
1. Visit `https://affiliatemarketingpartners.co` -- you should see your WordPress site
2. Log into WordPress admin on the live domain
3. Go to **Settings > General**
4. Update **WordPress Address (URL)** and **Site Address (URL)** to `https://affiliatemarketingpartners.co`
5. Click **Save Changes**
6. Go to **Settings > Permalinks**, click **Save Changes** again

---

## Step 7: Post-Cutover Verification

Run through this checklist on the live domain:

- [ ] Homepage loads correctly with squiggle animation
- [ ] All nav links work (Services, Insights, About, Contact)
- [ ] Contact form submits and email arrives at `info@ampconsulting.co`
- [ ] Schedule a Meeting page shows Calendly embed
- [ ] Blog posts display correctly with correct authors and categories
- [ ] Mobile navigation drawer works (hamburger menu, swipe to close)
- [ ] SSL padlock shows in browser (https)
- [ ] Favicon (squiggle) appears in browser tab
- [ ] Client logos display on homepage trust bar
- [ ] Team headshots and hover bios work on About page

---

## Step 8: Block Search Engines (TEMPORARY -- until ready)

If you want to do a soft launch before going fully public:
1. Go to **Settings > Reading**
2. Check **"Discourage search engines from indexing this site"**
3. **Uncheck this when you're ready to go live for real**

---

## Step 9: Decommission Old Sites

### Squarespace
1. Log into Squarespace
2. Go to **Settings > Billing**
3. Click **Cancel Subscription** (or downgrade to free/paused if you want a safety net for 30 days)
4. **Before canceling**: confirm your WordPress site is live and working on the real domain
5. Squarespace will stop serving the site once the subscription ends and DNS no longer points to them

### InstaWP Staging Site
1. Go to https://app.instawp.io
2. Find `amp-staging` in your sites list
3. Click the three dots menu > **Delete Site**
4. Confirm deletion
5. InstaWP free tier sites auto-expire after 7 days anyway, but clean up manually to be safe

---

## Step 10: Set Up Squarespace URL Redirects (if needed)

If any of your old Squarespace pages had different URL structures, set up 301 redirects so existing links and Google results still work:

| Old Squarespace URL | New WordPress URL |
|---------------------|-------------------|
| `/meet-the-team` | `/about/` |
| `/ampcasestudies/floatmecasestudy` | `/case-studies/floatme/` |
| `/ampcasestudies/rydercasestudy` | `/case-studies/` |

Install the **Redirection** plugin and add these mappings.

---

## Timeline Estimate

| Step | Time |
|------|------|
| 1. Choose host + set up account | 15 min |
| 2. Export local site | 5 min |
| 3. Import to production | 10-15 min |
| 4. Install plugins | 15 min |
| 5. SSL setup | 5 min |
| 6. Point DNS | 5 min + 1-2 hr propagation |
| 7. Verification | 15 min |
| 8-10. Cleanup | 15 min |

**Total active time: ~1.5 hours + DNS propagation wait**

---

## Emergency Rollback

If something goes wrong after DNS switch:
1. Log into GoDaddy
2. Change nameservers back to Squarespace's (or revert the A record)
3. Squarespace will resume serving the old site within minutes to hours
4. Fix whatever went wrong on the WordPress side, then re-point DNS

Keep your Squarespace subscription active for at least 1-2 weeks after cutover as a safety net.
