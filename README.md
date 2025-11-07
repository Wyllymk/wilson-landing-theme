# Wilson Landing Theme

A focused, production-ready WordPress landing page theme.  
Built for a single-page landing experience with an automatic SCSS compiler and a simple Gulp build workflow. Use this theme to deliver pixel-accurate landing pages quickly.

## Quick summary

- Modern, responsive landing layout.
- SCSS source with automatic PHP compilation (scssphp).
- Optional Gulp/Node build for local development.
- Small, accessible HTML structure. You edit styles in SCSS only.

## Requirements

- WordPress 5.8+
- PHP 7.4+
- Composer (for the PHP SCSS compiler)
- Node.js 14+ and npm (optional for Gulp tasks)

## Install (fast)

1. Copy the theme folder to `wp-content/themes/your-theme-name`.
2. Run `composer install` in the theme root (for scssphp) — optional if you rely on prebuilt CSS.
3. (Optional) Run `npm install` if you plan to use Gulp locally.
4. Activate the theme in the WordPress admin.

## Development workflows

### PHP SCSS compiler (on-demand)

- This is the default included flow. The theme compiles SCSS on-demand using scssphp.
- To force recompilation:
  - Ensure `WP_ENVIRONMENT_TYPE` is set to `development` in `wp-config.php`:
    ```php
    define('WP_ENVIRONMENT_TYPE', 'development');
    ```
  - Edit any SCSS file and load the site. The compiler detects the change and regenerates CSS.

### Gulp (local build)

- Use Gulp when you want a faster local iteration loop and source maps.
- Typical commands:
  - `npm install`
  - `npm run build` — compile production assets.
  - `npm run dev` — start watch + live rebuild (if provided).

## File structure (important files)

- `front-page.php` — landing page markup. Edit HTML sections here.
- `assets/scss/` — source SCSS files.
  - `_variables.scss` — change colors, fonts, spacing here.
  - `_sections.scss` — section-specific styles.
  - `_landing.scss` — landing layout and components.
- `assets/dist/` — compiled CSS/JS (generated).
- `inc/scssphp/` — PHP-based SCSS compiler (composer dependency).
- `assets/js/` — source scripts.
- `assets/img/` — images and prepared assets.

## Styling: what to edit

- Edit `assets/scss/_variables.scss` to change:
  - Colors
  - Typography
  - Spacing
  - Breakpoints
- Add styles for new HTML in `assets/scss/_sections.scss` or `_landing.scss`.
- If using PHP compilation, save and refresh the page to see changes.

## Troubleshooting

### SCSS not compiling?

- Run `composer install` to ensure scssphp is available.
- Confirm `inc/scssphp` exists.
- Confirm `WP_ENVIRONMENT_TYPE` == `development` for automatic compilation.
- Delete theme transient keys matching compilation timestamps if needed.

### Styles not updating?

- Clear your browser cache.
- Confirm `assets/dist/style.css` exists (Gulp flow).
- If using PHP compiler, edit any SCSS and reload the page.

### Gulp or npm issues?

- Delete `node_modules` and `package-lock.json`.
- Run `npm install` again.
- Use `npm run build` to regenerate assets.

### JavaScript errors?

- Open the browser console and check for errors.
- Confirm `assets/dist/main.min.js` is present when using build flow.
- Ensure WordPress enqueues scripts properly.

## Accessibility & performance notes

- The layout uses semantic HTML and keyboard-focusable controls.
- Images are optimized. Lazy loading is supported.
- Keep hero media sizes reasonable for mobile performance.

## How to add a section

1. Add markup to `front-page.php`.
2. Add SCSS to `assets/scss/_sections.scss` or create a new partial.
3. If using Gulp, run `npm run build`. If using PHP compiler, refresh the site.

## Contributing

- Fork the repo.
- Create a short-lived feature branch.
- Keep changes scoped and documented.
- Test across desktop, tablet, and mobile viewports.

## License

GPL v2 or later.

---

Created with attention to detail.  
If you want, I can:

- produce a minimal contributor checklist, or
- convert the README to a shorter INSTALL.md focused only on setup.
