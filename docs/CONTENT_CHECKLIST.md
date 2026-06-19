# MEPtrax content checklist

Create these pages in WordPress after activating the MEPtrax theme.

Copy source: [MEPTRAX_WORDPRESS_SITE_DRAFT.md](https://github.com/africa1228/TradulixPlanTakeoff/blob/main/docs/MEPTRAX_WORDPRESS_SITE_DRAFT.md)

## Home (`/`)

1. Create page **Home**
2. **Settings → Reading** → set as static front page
3. In Site Editor, insert MEPtrax patterns in order:
   - Hero
   - Early Access Notice
   - Three Features
   - Honesty List
   - Help Keep the Power Flowing *(replace Stripe placeholder after plugin setup)*
   - CTA Band

## Product (`/product/`)

Template: Default page

Suggested sections (paste from site draft):

- Workflow: Upload PDF → Process pages → Takeoff workspace → Export CSV/JSON
- Who it is for
- Supported browsers (Chrome/Edge primary)
- Known limitations (export reminder, OCR verify, popout/polygon notes)
- CTA: Start free → app signup

## Pricing (`/pricing/`)

Template: Default page

- Headline: Early access — free trial
- Bullets: free account, no credit card at launch, notice before future charges
- Not promised: SLA, phone support, unlimited storage, professional liability
- Optional: mention optional contributions via Stripe
- CTA: Create free account

## Support (`/support/`)

Template: Default page

- Email: support@meptrax.com
- Bug report checklist (browser, steps, export attempted)
- Account issues → app login email
- Optional contact form plugin

## Terms (`/terms/`)

Template: **Legal Page** (`page-legal`)

- Add attorney-reviewed Terms of Service
- Until reviewed, top banner: `DRAFT — REQUIRES ATTORNEY REVIEW BEFORE PUBLISH`
- Use section outline from site draft

## Privacy (`/privacy/`)

Template: **Legal Page** (`page-legal`)

- Add attorney-reviewed Privacy Policy
- Same DRAFT banner until reviewed

## Redirects (plugin — not pages)

| Path | Target |
|------|--------|
| `/login/` | `https://app.meptrax.com` |
| `/signup/` | `https://app.meptrax.com/signup` |

## Phase 2 pages

| Page | Slug | Notes |
|------|------|-------|
| FAQ | `/faq/` | Use FAQ table from site draft |
| Security | `/security/` | Org isolation, private storage — high level |
| About | `/about/` | Roy Electric / MEPtrax story |

## Launch gate

- [ ] All v1 pages published
- [ ] Footer links work on every page
- [ ] App CTAs point to app.meptrax.com only
- [ ] Terms/Privacy attorney-approved before public signup links from app
- [ ] Stripe donation optional and labeled as voluntary
