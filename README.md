<<<<<<< HEAD
# Smart Restaurant Management System (Dine-in + Delivery)

Production-style PHP backend (MVC-style modules), responsive POS frontend, and MySQL schema for **XAMPP** on Windows.

## Requirements

- XAMPP (or any Apache + PHP 8.1+ + MySQL/MariaDB stack)
- PHP extensions: `pdo_mysql`, `mbstring`, `fileinfo` (for image MIME checks)
- Modern browser (ES2020+)

## Installation (XAMPP)

1. **Copy the project** to your web root, for example:
   - `C:\xampp\htdocs\restaurant-system\`

2. **Create the database**
   - Open phpMyAdmin (`http://localhost/phpmyadmin`).
   - Create a database named `restaurant_system` (utf8mb4).
   - Import `database/schema.sql`.

3. **Configure MySQL credentials** (if not using default root/empty password):
   - Edit `backend/config/database.php` — set `username`, `password`, and `database` as needed.

4. **Apache `mod_rewrite`**
   - Ensure `mod_rewrite` is enabled in XAMPP’s `httpd.conf`.
   - The included `.htaccess` uses `RewriteBase /restaurant-system/`.  
     If your folder name differs, update `RewriteBase` to match (e.g. `/` if the app is at the domain root).

5. **Permissions**
   - Ensure the web server user can write to `frontend/assets/uploads/menu/` (for menu images).

6. **Open the app**
   - `http://localhost/restaurant-system/`

## Demo accounts

All demo passwords are **`password`** (bcrypt via `password_hash`).

| Email | Role | Notes |
|-------|------|--------|
| `admin@velvetplate.com` | admin | Dashboard, POS, kitchen, menu, tables, orders |
| `kitchen@velvetplate.com` | kitchen | Kitchen board only |
| `staff@velvetplate.com` | staff | POS, orders, tables (no dashboard / menu admin) |

Customers can **Register** from the home page or use any email you insert into `users` with role `customer`.

Passwords are stored with PHP `password_hash`. To generate a new hash, run locally:

```bash
php -r "echo password_hash('your_password', PASSWORD_DEFAULT);"
```

Then update the `users` table.

## TypeScript

Typed API helpers live in `frontend/ts/srms-api.ts`. The browser loads the implemented copy in `frontend/js/srms-api.js`.  
After changing the `.ts` file, mirror the logic in `.js` or add a build step (e.g. `tsc` or esbuild) if you prefer a compiled pipeline.

## Menu photos (30 dishes)

Sample data uses **curated Unsplash** URLs (dish-appropriate, high quality). The app treats `https://…` values in `menu_items.image_path` as external images—no Gemini or other API is required. To use **AI-generated** assets later, export images to your server or CDN and paste the URL in **Menu admin → Photo link**, or replace URLs in `database/schema.sql`.

**Existing database:** run `database/upgrade_menu_velvet_v2.sql` to allow longer URLs, then reload menu rows from `schema.sql` (or re-import on a fresh DB).

## Features

- Session auth, role-based access (`admin`, `kitchen`, `staff`, `customer`), public home + menu
- Menu + categories, image uploads, POS with cart (dine-in / delivery), GST and printable invoice
- Table management and automatic occupancy when dine-in orders are placed / completed
- Kitchen board with AJAX polling and large touch-friendly actions
- Admin dashboard with Chart.js and live stat refresh
- Fixed light theme for the public site (no theme toggle), toasts, responsive layout (mobile-first)

## Project structure

```
restaurant-system/
├── index.php              # Front controller + routing
├── .htaccess
├── database/schema.sql
├── backend/
│   ├── config/
│   ├── controllers/
│   ├── helpers/
│   ├── middleware/
│   ├── models/
│   └── routes/web.php     # Route reference (dispatch in index.php)
└── frontend/
    ├── assets/uploads/menu/
    ├── css/main.css
    ├── js/
    ├── pages/
    ├── partials/
    └── ts/
```

## Security notes

- Use HTTPS in production.
- Change demo passwords and restrict database access.
- Validate file uploads (already limited by MIME/size in `MenuController::apiUpload`).
=======
# restaurant-ordering-system
A web-based restaurant ordering system with order management and backend integration using PHP and MySQL.
>>>>>>> 1f25839cc3b2e4857b47805d805622bf761a50c2
