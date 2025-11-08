# Casa Storefront Blueprint

This document captures the structure and reasoning behind the current Laravel build so you can extend it into a full commerce experience.

## Application Shell
- `resources/views/layouts/app.blade.php` defines the global HTML scaffold. It owns the `<head>` meta tags, loads Font Awesome, registers the Vite bundle, and wraps every page with the shared header, footer, and cart drawer components.
- Blade stacks (`@stack('styles')`, `@stack('scripts')`) are available for view-specific assets once deeper pages are introduced.
- When the session stores a `cart_added` flash message the layout mounts a toast helper and signals the JavaScript to reopen the drawer after the redirect.

## UI Components
- `resources/views/components/header.blade.php` replaces the original PHP header with a reusable Blade component. It renders the promo bar, desktop navigation, search form, account shortcuts, and the cart trigger. Data attributes (`data-mobile-toggle`, `data-cart-toggle`, etc.) are used instead of IDs so the JavaScript can stay unobtrusive.
- `resources/views/components/footer.blade.php` carries the multi-column footer with shop navigation, support links, contact information, and social handles.
- `resources/views/components/cart-drawer.blade.php` exposes a right-hand overlay. It reads the session cart, displays line items, and falls back to an empty state. The session data is normalized before rendering so every blade path can keep the markup simple.

## Landing Experience
- `resources/views/home.blade.php` is the only page in play right now and mirrors the Hora Originals aesthetic. It expects five collections from the controller: featured categories, featured products, new arrivals, best sellers, and featured brands. The markup leans on Tailwind utility classes for spacing, typography, and responsive grid control.
- A small `$categoryBackgrounds` array keeps gradient combinations in one place and rotates them across category tiles using the loop index.
- Session-driven forms inside the hero grids post to the cart endpoints so interactions work end-to-end even without a database-backed cart table yet.

## Routing and Controller
- `routes/web.php` maps `/` to `HomeController` and stubs the remaining navigation targets so links resolve while the actual pages are still pending. Cart POST/DELETE routes mutate the session payload and redirect back with friendly messaging.
- `app/Http/Controllers/HomeController.php` operates as a single-action controller (`__invoke`). It pulls the featured/new/best sellers scopes using simple query builders. Relationships (`with('brand')`) prevent N+1 queries when the Blade templates render brand names.

## Domain Models and Schema
- `app/Models/{Category,Brand,Product}.php` declare fillable fields, cast booleans/decimals into native types, and define the relationships that power the home view. Each model keeps the surface minimal so future business logic can use dedicated service classes instead of bloated models.
- `database/migrations/2025_11_06_*` create normalized tables with indexes tuned for storefront reads. Categories and brands use feature flags plus position ordering. Products link back via foreign keys, store merchandising flags (`is_featured`, `is_new_arrival`, `is_best_seller`), and include JSON specifications for flexible technical data.

## Seed Data
- `database/seeders/CategorySeeder.php` loads six featured categories with curated copy and placeholder imagery (`images/watch.webp`).
- `database/seeders/BrandSeeder.php` introduces a dozen prestige brands, assigns shared artwork (`images/Hublot-logo.png`), and marks the first eight as featured so the brands grid looks full.
- `database/seeders/ProductSeeder.php` loops each category against the top four brands to create a realistic product matrix. It randomizes merchandising badges, inventory counts, and price ladders while filling out excerpt/description copy.
- Running `php artisan migrate --seed` will prepare PostgreSQL with enough records to make the landing page feel like a real storefront.

## Front-End Behaviour
- `resources/js/app.js` runs after `DOMContentLoaded`. It manages three interaction clusters:
  1. Cart drawer open/close, overlay state, escape key handling, and auto-open when an item is added.
  2. Mobile navigation toggle, including scroll lock synchronization with the cart overlay.
  3. Mobile search shortcut that focuses the desktop search input for small screens.
- Tailwind is delivered through Vite with the official PostCSS plugin (`@tailwindcss/postcss`), so any utility classes added in Blade or Vue/React (later) will be tree-shaken correctly.

## Suggested Next Steps
1. Promote the cart session logic into a dedicated controller/service once checkout requirements solidify.
2. Replace the placeholder navigation routes with full feature controllers or Inertia pages.
3. Add request validation and guard rails to the cart endpoints if guest traffic becomes high.
4. Layer in policies or scoped queries when you introduce customer accounts so the storefront and admin dashboards can reuse the same models safely.
