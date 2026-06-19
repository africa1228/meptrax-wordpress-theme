# MEPtrax WordPress setup

Steps to go live on `meptrax.com` after this repo deploys the theme.

## 1. GitHub repository

1. Create GitHub repo: `meptrax-wordpress-theme`
2. Push this repository to `origin/main`
3. Add repository secrets (same DreamHost credentials as MEPtrax app deploy):
   - `DREAMHOST_HOST`
   - `DREAMHOST_USER`
   - `DREAMHOST_PASSWORD`
4. Confirm workflow **Deploy MEPtrax Marketing Theme** runs on push

## 2. DreamHost path

Default deploy target:

```text
/home/tradulix/meptrax.com/wp-content/themes/meptrax/
```

If WordPress is installed in a different docroot, update `.github/workflows/deploy-meptrax-marketing.yml` to match your panel path before first deploy.

## 3. Activate theme

1. WordPress admin → **Appearance → Themes**
2. Activate **MEPtrax**

### Site identity

1. **Settings → General** → Tagline: `FIND. MARK. TRACK.`
2. **Appearance → Editor → Site Identity** → upload logo (icon + wordmark as in brand mockup)

## 4. Header navigation

The header uses a split layout (white left, navy right) matching the hero mockup. Nav includes **Product** and **Support** dropdowns.

- Confirm permalinks match your pages after creating content (see CONTENT_CHECKLIST.md).
- Until you upload a custom logo, the bundled triangle mark (`logo-mark.svg`) displays automatically.

## 5. Create pages

Follow [CONTENT_CHECKLIST.md](./CONTENT_CHECKLIST.md).

Set **Settings → Reading** → static front page → Home.

## 6. Login / signup redirects

Install **Redirection** or **Safe Redirect Manager**:

| Source | Target |
|--------|--------|
| `/login/` | `https://app.meptrax.com` |
| `/signup/` | `https://app.meptrax.com/signup` |

Use 301 redirects. Do not embed Supabase login on meptrax.com.

## 7. Stripe optional contributions

**Purpose:** "Help keep the Power flowing" — voluntary support, not product purchase. Does not change MEPtrax app access.

### Recommended plugin

[WP Simple Pay](https://wordpress.org/plugins/stripe/) (WordPress.org slug: `stripe`) or official Stripe plugin with **Payment Links**.

### Setup

1. Stripe Dashboard → **Payment Links** → create links (e.g. $5, $10, $25, custom amount)
2. WordPress → **Plugins → Add New** → install and activate WP Simple Pay / Stripe
3. Connect Stripe account (use **test mode** first)
4. Site Editor → Home → find **Help keep the Power flowing** pattern (or insert from Patterns → MEPtrax)
5. Replace the dashed placeholder box with the plugin Payment Link button or form block
6. Add note on Pricing or Support page that contributions are optional gifts

### Legal

- Contributions are voluntary support, not payment for MEPtrax features
- Link to Terms of Service when attorney-reviewed copy is published
- **Never commit Stripe API keys to git** — plugin settings only

## 8. SEO (optional)

Install Rank Math or Yoast SEO. Submit sitemap after pages are published.

## 9. SSL

Ensure `https://meptrax.com` serves over SSL before linking from the app signup legal checkbox.

## 10. Verify

- [ ] Home loads with MEPtrax header/footer
- [ ] Start free / Log in go to `app.meptrax.com`
- [ ] Terms and Privacy use **Legal Page** template
- [ ] `/login/` and `/signup/` redirect to app
- [ ] Stripe test contribution works (if enabled)
- [ ] No links to `dev.meptrax.com`

## Roy admin checklist (first-time)

- [ ] Create GitHub repo `meptrax-wordpress-theme` and push
- [ ] Add DreamHost secrets to repo
- [ ] Run deploy workflow
- [ ] Activate MEPtrax theme in WP admin
- [ ] Upload logo
- [ ] Create pages per CONTENT_CHECKLIST.md
- [ ] Install Redirection plugin
- [ ] Install Stripe plugin + Payment Links
- [ ] Replace donation placeholder with live Stripe button
- [ ] Attorney review Terms/Privacy before removing DRAFT banner
