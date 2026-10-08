# RCCG Angola website

Laravel 13 site for RCCG Resurrection Ground Parish, Luanda. Pages are Blade views styled with Tailwind CSS 4 (no Vite, no build pipeline in production).

## Working on the design

```bash
npm install
npm run dev      # rebuild public/css/site.css on change
npm run build    # minified build; commit public/css/site.css
```

The compiled `public/css/site.css` is committed because the site deploys by FTP with no build step. Parish content (programs, parishes, pastors, SEO keywords) lives in `config/church.php`; phone, email and address live in `config/app.php`. See `DESIGN.md` for the design system.

