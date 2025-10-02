# Simple PHP Router Demo

A minimal PHP project demonstrating a tiny router, controllers and view partials using plain PHP and Tailwind for styling.

## Project layout (important files)
- index.php — bootstrap, loads helpers and router
- router.php — maps request paths to controller files
- controllers/ — controller scripts that set data and load views
- views/ — view templates
  - views/partials/ — shared partials (head, nav, banner, footer)
- function.php — small helper functions (dd, urlIs)

## Requirements
- PHP 7.4+ (or newer)
- A local web server (Laragon, XAMPP) or PHP built-in server

## Run locally
Option A — PHP built-in server (recommended for quick testing):
1. Open a terminal and cd to the project root:
   cd "c:\laragon\www\php"
2. Start the built-in server and use the router script so pretty URLs are handled:
   php -S localhost:8000 router.php
3. Visit http://localhost:8000/ , http://localhost:8000/about or http://localhost:8000/contact

Option B — Laragon / Apache:
- Place the project under your web root and ensure mod_rewrite or front controller routes requests to index.php (or use Laragon's pretty URLs).

## How routing works
The router script (router.php) reads the request path:
- It looks up the path in the `$routes` array
- If found, it requires the corresponding controller (controllers/*.php)
- If not found, it calls `abort('404')` which loads views/404.view.php

Example routes array entry:
```php
'/blog' => 'controllers/blog.php'
```

## Adding a page
1. Create `controllers/blog.php`:
   - set `$heading = "Blog";`
   - require `views/blog.view.php`
2. Create `views/blog.view.php` (use partials/head.php and partials/footer.php)
3. Add route to `router.php`:
   '/blog' => 'controllers/blog.php'

## Views and partials
- Partials are in `views/partials/` and included by view templates:
  - head.php — HTML head and Tailwind include
  - nav.php — top navigation (uses `urlIs()` from function.php to mark current link)
  - banner.php — page heading (expects `$heading`)
  - footer.php — closing tags

## Helpers
- `function.php` includes:
  - `dd($value)` — dump and die
  - `urlIs($value)` — compares current request URI to value (used for current link styling)

## Troubleshooting
- If links result in 404 from the web server (not your router), ensure the built-in router or server is configured to route requests to index.php/router.php.
- Check PHP error logs for parse errors if pages show blank.

License
- Simple demo; adapt freely for learning or projects.
