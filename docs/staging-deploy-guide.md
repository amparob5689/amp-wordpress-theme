# Staging Site Deploy Guide

**Staging URL:** https://amp-staging.instawp.site

## How to Update Staging After Making Changes

1. **Export your local site**
   - LocalWP WordPress admin > All-in-One WP Migration > Export > File
   - Downloads a `.wpress` file

2. **Import to staging**
   - Go to `amp-staging.instawp.site/wp-admin`
   - All-in-One WP Migration > Import > Upload the `.wpress` file
   - Click Proceed when prompted

3. **After import**
   - Settings > Permalinks > Save (flushes rewrite rules)
   - Settings > Reading > check "Discourage search engines from indexing this site"
   - Login credentials will be your LocalWP credentials (import replaces everything)

## Notes

- Free InstaWP tier lasts 7 days -- recreate if it expires
- The PHP version warning (8.2 vs 8.0) is safe to ignore
- Full export/import takes ~2 minutes
- For code-only changes, InstaWP also supports SFTP/SSH and Git Deployment (see InstaWP dashboard sidebar)
