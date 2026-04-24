# 📝 Laravel Blog Application

## 📌 Project Description

This project is a Laravel-based blog application built as part of a freelance mission.  
It allows a blogger to manage and publish technical articles, while visitors can browse and read content without authentication.

The application follows Laravel best practices:
- Eloquent ORM
- Blade templating
- Migrations & Seeders
- Named routes and middleware

---

## 🚀 Features

### 🌐 Public Blog

- View all published articles
- Display:
  - Title
  - Category
  - Publication date
  - Excerpt
- View full article details
- Filter articles by category

---

### 🔐 Authentication

- Login / Logout functionality
- No registration (user created via Seeder)
- Protected routes using `auth` middleware

---

### 🛠️ Article Management (Dashboard)

Accessible only for authenticated users:

- View all articles (draft & published)
- Create new article:
  - Title
  - Content
  - Category
  - Status (Draft / Published)
- Edit existing article
- Delete article (with confirmation)

---

### ⭐ Bonus Feature (Optional)

- Pagination (`->paginate(6)`)
- Search by title
- Reading time estimation

---

## 🏗️ Tech Stack

- Framework: Laravel
- Database: MySQL
- Templating: Blade
- ORM: Eloquent

---

## 📂 Project Structure
app/
├── Models/
├── Http/Controllers/
resources/views/
routes/web.php
database/migrations/
database/seeders/


---

## ⚙️ Installation

### 1. Clone the repository

```bash
git clone https://github.com/pro-joseph/blog.git
cd blog
```
## 2. Install dependencies
```
composer install
npm install && npm run dev
```
## 3. Configure environment
```
cp .env.example .env
php artisan key:generate
```
## 4. Run migrations & seeders
```
php artisan migrate:fresh --seed
```
This will create:
4 categories /
1 blogger account /
6 articles (draft & published) /

## 5. Start the server
php artisan serve

## 🔑 Default Credentials
Email: admin@example.com
Password: password

## 🧠 Key Concepts
Eloquent Relationships
Article → belongsTo → Category
Category → hasMany → Articles

## 📅 Timeline
Duration: 5 days
Deadline: Friday 24/04/2026
## 👨‍💻 Author

Developed as part of a backend training and freelance simulation project.
