# Homepage V5 (content branch)

**Branch:** `content/homepage-v5`  
**Status:** Ready for human review — **not** deployed to production.

## Content authority

Rendered homepage is controlled by:

1. **Theme template** `theme/meptrax/templates/front-page.html`  
2. **Pattern stack** `meptrax/home-landing` → `hero-split` + `homepage-v5-body` + `cta-band`  
3. **Header/footer parts** for chrome CTAs  

**WordPress page body for Home is not used** when the front-page template is active.  
Live production may still show older DB-customized content until:

- this theme is activated/deployed to a **staging** site, and  
- production WP is set to the theme-owned front-page template.

Do not edit the live Home page body expecting V5 unless the template authority is confirmed.

## Local preview (not production)

```bash
node tools/build-homepage-v5-preview.mjs
node tools/capture-homepage-v5-screenshots.mjs
```

Open `preview/homepage-v5.html` and `preview/screenshots/`.

## Primary CTA

- Label: **Try MEPTrax Takeoff Free**  
- Supporting: **30 days free. No credit card required.**  
- URL: `https://app.meptrax.com/signup`
