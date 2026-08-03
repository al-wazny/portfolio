# portfolio

The marketing website for **Wishfulgoods**, a digital product agency based in Karlsruhe, Germany specializing in custom web development. Built with plain PHP, Bootstrap 4, and SCSS.

## Features

- **Component-based PHP layout** — sections like `service`, `project`, `testimonial`, and `stat` live in [`view/components/`](view/components) and are auto-included via [`view/index.php`](view/index.php), which loops through every `.php` file under `view/*`.
- **Bilingual content (DE/EN)** — copy is stored as JSON in [`view/translation/snippets/`](view/translation/snippets) (`de-DE.json`, `en-GB.json`) and swapped based on a `langID` cookie / `?language=` query param, with no page reload needed for content changes.
- **Legal pages** — dedicated `imprint.php` (Impressum) and `privacy-policy.php` (Datenschutz) pages, as required for a business operating in Germany.
- **SCSS-based styling** — organized into `abstract/`, `layout/`, `components/`, and `page/` partials under [`assets/css/`](assets/css), compiled to `index.css`.

## Project structure

```
portfolio/
├── index.php              # Landing page
├── imprint.php             # Impressum
├── privacy-policy.php      # Datenschutz
├── robots.txt
├── view/
│   ├── index.php            # Auto-includes all component/layout PHP files
│   ├── components/          # Reusable PHP render functions (service, project, stat, testimonial)
│   ├── layout/               # Navigation & footer
│   └── translation/
│       ├── index.php         # Loads the active-language JSON based on cookie
│       └── snippets/         # de-DE.json / en-GB.json content
└── assets/
    ├── css/                  # SCSS source + compiled CSS
    ├── js/
    ├── img/
    └── icons/
```

## Getting started

This is a plain PHP site with no build step or package manager — any PHP-capable web server works.

```bash
git clone https://github.com/al-wazny/portfolio.git
cd portfolio
php -S localhost:8000
```

Then open `http://localhost:8000` in your browser.

### Editing content

Site copy lives entirely in [`view/translation/snippets/de-DE.json`](view/translation/snippets/de-DE.json) and [`en-GB.json`](view/translation/snippets/en-GB.json) — update the strings there rather than editing the PHP templates directly.

### Editing styles

Source SCSS lives under `assets/css/`. If you have Sass installed, compile changes with:

```bash
sass assets/css/index.scss assets/css/index.css
```

## License

No license file is currently included in this repository. As this is a live business website, that's expected — add a license only if you intend to open this code up for reuse.
