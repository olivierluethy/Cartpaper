# Cartpaper

A small PHP web app where users register, log in, and write and publish their own books — like a lightweight self-publishing notebook.

## Features

- **User accounts** — register and log in (passwords hashed with bcrypt).
- **Write & publish books** — create a book with a title, summary and date, then edit or delete it.
- **Per-user library** — each book belongs to its author (`users` ↔ `books` relation).
- **Home feed** — browse the published books.

## Tech

- **PHP** with a hand-rolled **MVC** structure (`app/Controllers`, `app/Models`, `app/Views`).
- Custom front controller and router (`index.php`, `core/Router.php`).
- **MySQL** database (schema and demo data in `cartpaper.sql`).
- Plain CSS/JS in `public/`.

## Run locally

1. Create the database and tables by importing `cartpaper.sql` (e.g. via phpMyAdmin or the MySQL CLI).
2. Check the DB credentials in `index.php` (defaults: database `cartpaper`, user `root`, empty password).
3. Serve the project root with PHP or XAMPP/Apache:

   ```sh
   php -S localhost:8000
   ```

4. Open <http://localhost:8000>.

Demo login (from the seed data): `olivier@kauz.ch` / `kauz.git`.
