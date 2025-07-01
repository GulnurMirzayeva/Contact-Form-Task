# 📝 Laravel Contact Form Application

![PHP](https://img.shields.io/badge/PHP-8.0+-777BB4?logo=php)
![Laravel](https://img.shields.io/badge/Laravel-10+-FF2D20?logo=laravel)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-3.3.0-06B6D4?logo=tailwindcss)

A complete contact form solution with message storage and display functionality, built with Laravel and Tailwind CSS.

## ✨ Features

### 🖊️ Form Functionality
- Client-side & server-side validation
- Submission throttling (10 requests/minute)
- Success notifications with auto-dismiss
- Accessible form controls

### 📊 Message Management
- Chronological message display
- Interactive "Show More/Less" pagination
- Real-time visible message counter
- Smooth CSS transitions

### 🛠️ Technical Highlights
- MVC architecture
- Database migrations
- Form Request validation
- Vite-powered frontend assets
- Responsive Tailwind CSS design

## 🚀 Quick Start

### Prerequisites
- PHP 8.0+
- Composer 2.0+
- Node.js 16+
- MySQL/PostgreSQL/SQLite

### Installation
```bash
# Clone repository
git clone https://github.com/yourusername/laravel-contact-form.git
cd laravel-contact-form

# Install dependencies
composer install
npm install

# Configure environment
cp .env.example .env
php artisan key:generate

# Set up database (edit .env first)
php artisan migrate

# Build assets
npm run build
