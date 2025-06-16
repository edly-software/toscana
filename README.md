🍝 Toscana Restaurant Management System
A modern, full-stack restaurant management application built for Toscana Memmingen, an Italian restaurant located in the heart of Memmingen, Germany. This system provides both administrative capabilities and a beautiful customer-facing website.

🌟 Overview
Toscana is a comprehensive restaurant management solution that combines a powerful Laravel backend with a modern Vue.js frontend. The application is designed to help restaurants scale their operations while providing an exceptional digital experience for customers.

🚀 Features
🔧 Admin Panel (Filament)
Product Management: Full CRUD operations for restaurant items
Category Management: Organize products by categories (Pizza, Pasta, etc.)
Menu Management: Upload and manage digital menus
Customer Notifications: Send announcements and updates to customers
Pizza & Pasta Specialized Management: Dedicated modules for core Italian dishes
🌐 Customer Frontend
Beautiful Landing Page: Showcasing restaurant atmosphere with image carousel
Digital Menu Integration: Direct access to current menu offerings
Responsive Design: Optimized for all devices
Multi-language Support: German localization with Euro currency formatting
Legal Pages: Privacy policy (Datenschutz) and Imprint (Impressum)
📱 Technical Features
Modern Tech Stack: Laravel 11 + Vue 3 + TypeScript + Inertia.js
Component Library: Radix Vue with Tailwind CSS
Image Management: Comprehensive photo gallery system
SEO Optimized: Proper meta tags and structure
🛠️ Tech Stack
Backend
Framework: Laravel 11 (PHP 8.2+)
Admin Panel: Filament 3.2
Authentication: Laravel Breeze + Sanctum
Database: MySQL/PostgreSQL compatible
Testing: Pest PHP
Frontend
Framework: Vue 3 with TypeScript
Build Tool: Vite
Routing: Inertia.js
Styling: Tailwind CSS
Components: Radix Vue + Custom UI Components
Carousel: Embla Carousel
Icons: Radix Icons
Development Tools
Code Quality: Laravel Pint (PHP CS Fixer)
Package Manager: Composer + npm
Version Control: Git
📊 Database Schema
The application includes the following main entities:

Products: Restaurant items with name, description, price, and category
Categories: Product categorization system
Pizzas: Specialized pizza management with formatted pricing
Pastas: Dedicated pasta item management
Menus: Digital menu file management
Customer Notifications: Announcement system
Users: Authentication and user management
🚀 Getting Started
Prerequisites
PHP 8.2 or higher
Composer
Node.js 18+ and npm
MySQL/PostgreSQL database
Installation
Clone the repository
bash
Run
git clone <repository-url>cd toscana
Install PHP dependencies
bash
Run
composer install
Install Node.js dependencies
bash
Run
npm install
Environment setup
bash
Run
cp .env.example .envphp artisan key:generate
Configure your database in .env file

Run migrations

bash
Run
php artisan migrate
Build frontend assets
bash
Run
npm run build
Start development servers
bash
Run
# Backendphp artisan serve# Frontend (in another terminal)npm run dev
🎯 Usage
Admin Access
Access the admin panel at /admin
Configure admin email in APP_ADMIN environment variable
Manage products, categories, menus, and notifications
Customer Experience
Beautiful landing page with restaurant information
Browse digital menus
View image galleries
Access legal information
🖼️ Image Management
The system includes a sophisticated image management system:

Gallery: 50+ restaurant photos in /public/toscana/
Carousel: Dynamic image loading with exclusion filters
Optimization: Responsive images for all devices
🌍 Localization
Primary Language: German
Currency: Euro (€) with German formatting
Legal Compliance: GDPR-compliant privacy policy and imprint
📝 License
This project is open-sourced software licensed under the MIT license.

🤝 Contributing
This is a restaurant-specific application, but the codebase serves as an excellent starting point for other restaurant management systems. Feel free to fork and adapt for your own restaurant needs.

📞 Support
For questions about this restaurant management system, please refer to the Laravel and Vue.js documentation, or create an issue in the repository.

Built with ❤️ for Toscana Memmingen - Bringing authentic Italian flavors to the digital world.