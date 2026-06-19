# MEPtrax WordPress Theme

Git source of truth for the **MEPtrax** marketing block theme deployed to `meptrax.com`.

The MEPtrax takeoff app lives in a separate repo (`TradulixPlanTakeoff`) at `app.meptrax.com`.

## What this repo contains

- `theme/meptrax/` — installable WordPress block theme (FSE)
- Block patterns: hero, early-access notice, features, honesty list, CTA, optional donations
- GitHub Actions deploy to DreamHost `wp-content/themes/meptrax/`

## What WordPress admin owns (not in git)

- Theme activation
- Logo upload (Site Identity)
- Stripe plugin + Payment Links ("Help keep the Power flowing" optional contributions)
- Terms/Privacy final text (attorney-reviewed)
- Redirection plugin for `/login/` and `/signup/` → app

## Copy authority

Marketing copy is based on [MEPTRAX_WORDPRESS_SITE_DRAFT.md](https://github.com/africa1228/TradulixPlanTakeoff/blob/main/docs/MEPTRAX_WORDPRESS_SITE_DRAFT.md) in the TradulixPlanTakeoff repo.

## Quick start

1. Read [docs/SETUP.md](docs/SETUP.md)
2. Push to `main` → GitHub Actions deploys theme to DreamHost
3. WordPress → Appearance → Themes → activate **MEPtrax**
4. Follow [docs/CONTENT_CHECKLIST.md](docs/CONTENT_CHECKLIST.md)

## App URLs (defaults)

| Setting | Default |
|---------|---------|
| Sign up | `https://app.meptrax.com/signup` |
| Log in | `https://app.meptrax.com` |
| Support | `support@meptrax.com` |

Override via `meptrax_app_signup_url`, `meptrax_app_login_url`, `meptrax_support_email`, `meptrax_legal_entity_name` filters in a small mu-plugin if needed.

## Stripe donations

Optional contributions only. **Does not grant MEPtrax app entitlements.** See SETUP.md for WP Simple Pay / Stripe Payment Links.

## Deploy secrets (GitHub)

- `DREAMHOST_HOST`
- `DREAMHOST_USER`
- `DREAMHOST_PASSWORD`

Remote path: `/home/tradulix/meptrax.com/wp-content/themes/meptrax/`
