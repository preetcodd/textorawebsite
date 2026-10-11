# Textora Technologies — Official Company Web Portal

<p align="center">
  <a href="https://textorasms.com" target="_blank" rel="noopener noreferrer">
    <img src="https://textorasms.com/images/textorasms-svg-logo.svg" alt="Textora SMS Logo" width="320">
  </a>
</p>

<p align="center">
  <strong>Next-Generation Enterprise CPaaS & Omnichannel Messaging Solutions</strong><br>
  Enterprise Bulk SMS • WhatsApp Business API • RCS Messaging • Voice Solutions • Email Marketing • Custom Web Development
</p>

<p align="center">
  <a href="https://textorasms.com"><img src="https://img.shields.io/badge/Production-Live-success?style=flat-square&logo=googlechrome" alt="Production Site"></a>
  <a href="https://php.net"><img src="https://img.shields.io/badge/PHP-8.3%2B-777BB4?style=flat-square&logo=php" alt="PHP Version"></a>
  <a href="https://laravel.com"><img src="https://img.shields.io/badge/Laravel-11.x-FF2D20?style=flat-square&logo=laravel" alt="Laravel Framework"></a>
  <a href="https://livewire.laravel.com"><img src="https://img.shields.io/badge/Livewire-3.5-FB70A9?style=flat-square&logo=livewire" alt="Livewire"></a>
  <a href="https://filamentphp.com"><img src="https://img.shields.io/badge/Filament-3.2-FFA726?style=flat-square" alt="Filament"></a>
  <a href="https://tailwindcss.com"><img src="https://img.shields.io/badge/TailwindCSS-3.4-38B2AC?style=flat-square&logo=tailwindcss" alt="Tailwind CSS"></a>
  <a href="https://www.mysql.com"><img src="https://img.shields.io/badge/MySQL-8.0-4479A1?style=flat-square&logo=mysql" alt="MySQL"></a>
  <img src="https://img.shields.io/badge/License-Proprietary-red?style=flat-square" alt="License">
</p>

---

## 📌 Executive Overview

This repository contains the source code for the official corporate website and customer portal of **Textora Technologies Pvt. Ltd.** ([textorasms.com](https://textorasms.com)).

Textora SMS is an Indian Communications Platform as a Service (CPaaS) provider and digital solutions partner helping businesses automate customer interactions, enhance customer retention, and scale transactional and promotional communications across SMS, WhatsApp, RCS, Voice, and Email.

### Key Capabilities & Business Offerings

- **WhatsApp Business API & Automation**: Official Meta cloud API integration, verified Blue Tick assistance, marketing & utility conversation templates, and no-code chatbot builder.
- **Bulk WhatsApp Marketing**: High-throughput broadcast messaging with multimedia support (images, videos, PDF catalogs, CTA buttons).
- **Bulk SMS Services**: DLT-compliant Promotional, Transactional, and SIM-based SMS routing with sender ID customization and real-time delivery reports.
- **RCS Messaging (Rich Communication Services)**: Interactive next-generation messaging with rich media cards, action buttons, carousels, and verified branding inside native messaging inboxes.
- **Voice Solutions**: Voice SMS, Outbound Dialer (OBD), interactive voice broadcasts, and voice API integration.
- **Developer SMS APIs & OTP Engine**: High-speed REST APIs for OTP verification, authentication, and CRM event triggers.
- **Free Marketing Utilities**: In-browser WhatsApp Link & QR Code Generator (`/whatsapp-link-generator`) and dynamic WhatsApp Cost Calculator.
- **Enterprise Partner Programs**: Reseller white-label portal solutions.

---

## 🛠️ Architecture & Technology Stack

The application is engineered as a modern, high-performance web platform combining high-converting public landing pages with a reactive, low-overhead administrative back-office:

```
┌────────────────────────────────────────────────────────────────────────┐
│                              FRONTEND                                  │
│  Blade Templates • Tailwind CSS 3.4 • Flowbite 2.5 • Alpine.js 3.4    │
│  AOS Animations • Swiper 11 • QRCode.js • FontAwesome 6.5 • jQuery    │
└───────────────────────────────────┬────────────────────────────────────┘
                                    │
┌───────────────────────────────────▼────────────────────────────────────┐
│                       REACTIVE MANAGEMENT LAYER                        │
│             Livewire 3.5  +  Filament Tables & Forms 3.2              │
└───────────────────────────────────┬────────────────────────────────────┘
                                    │
┌───────────────────────────────────▼────────────────────────────────────┐
│                           BACKEND & CORE                               │
│              PHP 8.3+  •  Laravel 11.x (Breeze Auth)                   │
└───────────────────────────────────┬────────────────────────────────────┘
                                    │
┌───────────────────────────────────▼────────────────────────────────────┐
│                              DATABASE                                  │
│                 MySQL 8.0 / MariaDB (Eloquent ORM)                     │
└────────────────────────────────────────────────────────────────────────┘
```

| Layer | Component | Description |
| :--- | :--- | :--- |
| **Backend Core** | **Laravel 11.x** on **PHP 8.3+** | Application kernel, routing, middleware pipeline, exception handling, and Eloquent ORM. |
| **Admin UI & CRUD** | **Livewire 3.5** + **Filament 3.2** | Real-time administrative tables, modal editors, array repeaters, and search/filter grids without REST boilerplate. |
| **Authentication** | **Laravel Breeze** | Role-based authentication (`Admin`, `Customer`), password hashing, and session guards. |
| **Styling & Theme** | **Tailwind CSS 3.4** + **Flowbite** | Responsive, mobile-first design system customized with Textora's corporate green and gold palettes. |
| **Client Scripts** | **Alpine.js**, **Vite 5**, **Swiper 11**, **AOS** | Fast, reactive DOM manipulation, carousel sliders, and scroll animations. |
| **Interactive Tools** | **QRCode.js** | Client-side vector and PNG QR code generation for the WhatsApp tool. |
| **SEO & Schemas** | **JSON-LD Microdata** & **XML Sitemap** | Rich snippet integration (`ProfessionalService`, `Product`, `ItemList`, `FAQPage`) and auto-generated `sitemap.xml`. |
| **Web Server Root** | **`public/` & `public_html/`** | Configured for dual compatibility: local development (`public/`) and cPanel production deployments (`public_html/`). |

---

## 📂 Project Directory Structure

```
textorasms.com/
├── app/                                    # Application Core Logic
│   ├── Http/
│   │   ├── Controllers/                    # Web & Resource Controllers
│   │   │   ├── Auth/                       # Breeze Authentication Controllers
│   │   │   ├── ClientMasterController.php  # Client management
│   │   │   ├── EnquiryMasterController.php # Lead capture & form validation
│   │   │   ├── PricingMasterController.php # Dynamic pricing query & view
│   │   │   ├── ProfileController.php       # Account profile management
│   │   │   ├── SitemapController.php       # Dynamic XML sitemap generator
│   │   │   ├── UserController.php          # Admin user management
│   │   │   └── VlogMastersController.php   # Blog listing & detail pages
│   │   ├── Middleware/
│   │   │   └── AuthenticateUser.php        # Custom user auth middleware
│   │   └── Requests/                       # Form validation request classes
│   ├── Livewire/                           # Livewire & Filament Table Components
│   │   ├── ClientCreate.php & ClientTable.php
│   │   ├── EnquiryTable.php                # Lead inquiry tracker table
│   │   ├── PricingCreate.php & PricingTable.php # Pricing CRUD with JSON repeater
│   │   ├── UserCreate.php & UserTable.php
│   │   └── VlogCreate.php & VlogTable.php  # Blog post management
│   ├── Models/                             # Eloquent Database Models
│   │   ├── ClientMaster.php                # Client record model
│   │   ├── EnquiryMaster.php               # Leads / inquiry model
│   │   ├── PricingMaster.php               # Multi-service pricing plans & JSON features
│   │   ├── User.php                        # Auth user model (roles: Admin, Customer)
│   │   └── VlogMasters.php                 # Blog articles model
│   └── Providers/
│       └── AppServiceProvider.php
│
├── bootstrap/                              # Laravel 11 bootstrap
│   ├── app.php                             # Routing definitions, middleware, & 404 handler
│   └── providers.php
│
├── config/                                 # Configuration (app, database, auth, filament...)
│
├── database/                               # Migrations, factories, and seeders
│   ├── migrations/
│   │   ├── 0001_01_01_000000_create_users_table.php
│   │   ├── 2025_11_26_094451_create_pricing_masters_table.php
│   │   ├── 2025_11_27_123610_create_client_masters_table.php
│   │   ├── 2025_12_01_104932_create_vlog_masters_table.php
│   │   ├── 2025_12_02_094054_create_enquiry_masters_table.php
│   │   └── 2026_07_14_120000_add_whatsapp_pricing_fields_to_pricing_masters_table.php
│   └── seeders/
│       ├── DatabaseSeeder.php
│       └── UserSeeder.php
│
├── public/ & public_html/                  # Document Roots
│   ├── css/, js/, images/, webfonts/       # Public static assets & brand graphics
│   ├── build/                              # Vite production bundle manifest & assets
│   ├── storage/                            # Public symlink to storage/app/public
│   ├── .htaccess                           # Apache URL rewrite and security rules
│   └── index.php                           # Application bootstrapping entry point
│
├── resources/                              # Source templates & frontend assets
│   ├── css/ & js/                          # Tailwind base CSS and Vite JavaScript entry
│   └── views/
│       ├── components/                     # Reusable Blade UI components
│       │   ├── master-page.blade.php       # Master layout for public marketing site
│       │   ├── ai-chat.blade.php           # "Preet" floating WhatsApp lead generation widget
│       │   ├── aside/side-nav.blade.php    # Admin sidebar menu
│       │   └── whatsapp-calculator.blade.php
│       ├── layouts/
│       │   ├── app.blade.php               # Authenticated Dashboard layout
│       │   └── guest.blade.php             # Authentication layout
│       ├── livewire/                       # Livewire component Blade views
│       └── Website/                        # Public Marketing Landing Pages
│           ├── home_web.blade.php          # Main homepage
│           ├── pricing_page.blade.php      # Dynamic DB-driven pricing table
│           ├── bulk_sms.blade.php          # Bulk SMS service page
│           ├── bulk_whatsapp.blade.php     # Bulk WhatsApp page
│           ├── whatsapp_business_api.blade.php # WhatsApp Cloud API page
│           ├── whatsapp_link_generator.blade.php # WhatsApp link & QR generator
│           ├── rcs_messaging.blade.php     # RCS Messaging page
│           ├── voice_api.blade.php         # Voice call / OBD page
│           ├── otp_api.blade.php           # SMS OTP & API page
│           ├── email_marketing.blade.php   # Email marketing page
│           ├── website_development.blade.php # Web development page
│           ├── reseller.blade.php          # Reseller partner program page
│           ├── blog_list.blade.php         # Blog listing page
│           ├── blog_details.blade.php      # Blog reading detail view
│           ├── contact_us.blade.php        # Contact page with lead form
│           └── terms_condition.blade.php / privacy_policy.blade.php / refund_policy.blade.php
│
├── routes/
│   ├── web.php                             # Public site & protected dashboard routes
│   ├── auth.php                            # Breeze authentication routes
│   └── console.php                         # Artisan scheduled tasks & commands
│
├── storage/                                # Logs, sessions, uploaded blog images
├── .env.example                            # Template environment configuration
├── composer.json                           # PHP dependencies (Laravel 11, Filament 3, Livewire 3)
├── package.json                            # Frontend dependencies (Tailwind, Flowbite, Vite)
├── tailwind.config.js                      # Tailwind design token configuration
└── vite.config.js                          # Vite build asset configuration
```

---

## 💻 Local Installation & Setup Guide

### 1. Prerequisites

Ensure your development environment meets the following requirements:
* **PHP**: `>= 8.3` with extensions enabled: `pdo_mysql`, `mbstring`, `openssl`, `curl`, `fileinfo`, `intl`, `gd`, `zip`, `exif`.
* **MySQL**: `>= 8.0` (or MariaDB 10.4+)
* **Node.js**: `>= 18.x` & `npm`
* **Composer**: `>= 2.x`

### 2. Clone and Configure Environment

```bash
# Navigate to the project directory
cd textorasms.com

# Copy environment template if .env does not exist
cp .env.example .env
```

Configure your local database credentials in `.env`:
```dotenv
APP_NAME="Textora SMS"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=textorasms
DB_USERNAME=root
DB_PASSWORD=your_mysql_password
```

### 3. Install Dependencies & Generate Application Key

```bash
# Install PHP dependencies
composer install

# Generate encryption key
php artisan key:generate

# Install Node modules & build frontend assets
npm install
npm run build
```

### 4. Database Migration & Storage Linking

```bash
# Create and migrate all tables
php artisan migrate

# Link the public storage directory for uploaded blog media
php artisan storage:link
```

### 5. Start the Development Server

```bash
# Terminal 1: Run the Laravel local server
php artisan serve

# Terminal 2 (Optional for frontend development): Run Vite hot-reload
npm run dev
```

Visit the application at **`http://localhost:8000`** (or `http://127.0.0.1:8000`).

---

## 🗄️ Database Management & Data Seeding

### Creating an Administrator Account

To access the back-office dashboard, authorized developers can provision an administrator account securely using Tinker:

```bash
php artisan tinker
```

```php
\App\Models\User::create([
    'name' => 'Administrator',
    'email' => 'admin@yourcompany.com',
    'password' => bcrypt('YOUR_SECURE_PASSWORD'),
    'role' => 'Admin',
    'is_active' => true,
]);
```

> **Security Note:** Never commit actual passwords or sensitive credentials to version control. Always choose a strong, unique password for production and staging environments.

### Dynamic Pricing & Blog Data

The public pricing page (`/pricing-web`) and blog pages (`/blog_list`) retrieve their records directly from the database:
- **`pricing_masters`**: Manages all service plans (WhatsApp Business API, Bulk WhatsApp, SMS, RCS, Voice, Email). Features are stored in a native JSON column (`features`), supporting dynamic feature lists.
- **`vlog_masters`**: Manages published blog articles, cover image paths, and publication dates.

To seed baseline tables:
```bash
php artisan db:seed
```

---

## 🔐 Admin Dashboard & Access Control

The back-office portal is accessible at **`/login`** and managed through **`/dashboard`**.

Access is protected by role-based authorization:
- **Admin**: Full access to Client management, Pricing matrix, Inquiries/Leads tracker, and Blog CMS.
- **Customer**: Access restricted to customer-specific views and services.

### Administrative Modules

1. **Client Management (`/clients`)**:
   - Manage registered client companies, business contacts, and toggle active statuses.
2. **Pricing Engine (`/pricing`)**:
   - Real-time Filament table builder for adding and editing plans across SMS, WhatsApp, RCS, Voice, and Email.
   - Edit modal features dynamic subcategory dropdowns, setup fees, per-conversation rates (Marketing vs. Utility), and a repeater list for plan feature bullets.
3. **Leads & Inquiries Tracker (`/enquiry`)**:
   - View, filter, and export incoming lead submissions from website contact forms, demo requests, and service inquiries.
4. **Blog Manager (`/blog`)**:
   - Create, edit, publish, and manage company articles, SEO content, and cover graphics.

---

## 🚀 Production Deployment (cPanel & Shared Hosting)

The repository is structured to seamlessly support deployment to standard Apache/cPanel or Plesk hosting environments:

### Document Root Configuration

In cPanel, the public web directory is typically mapped to `public_html/`:
1. Ensure the application root files (`app/`, `bootstrap/`, `config/`, `vendor/`, `storage/`, etc.) reside one level above the public web root (or in the root folder).
2. The `public_html/index.php` file bootstraps Laravel:
   ```php
   require __DIR__.'/../vendor/autoload.php';
   (require_once __DIR__.'/../bootstrap/app.php')->handleRequest(Request::capture());
   ```
3. Keep static assets (`images/`, `css/`, `js/`, `webfonts/`, `build/`) synchronized between `public/` and `public_html/`.

### Production Optimization Commands

Run these commands in production following code updates:
```bash
# Optimize configuration, routes, and views
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Run production migrations safely
php artisan migrate --force

# Symlink storage to public_html/storage
php artisan storage:link
```

### Security & Compliance

- Ensure `.env` is never publicly accessible via browser.
- Verify `APP_DEBUG=false` in production.
- Keep HTTPS and SSL redirection enabled via `public_html/.htaccess`.

---

## 🏢 Corporate & Support Information

- **Company**: Textora Technologies Pvt. Ltd.
- **Headquarters**: 5A, 1st Cross Road, Dollar Scheme Colony, 1st Stage, BTM Layout, Bengaluru, Karnataka 560068, India
- **Customer Support**: [+91 9187054466](tel:9187054466)
- **Email**: [support@textorasms.com](mailto:support@textorasms.com)
- **Official Website**: [https://www.textorasms.com](https://www.textorasms.com)

---

<p align="center">
  &copy; 2026 Textora Technologies Pvt. Ltd. All rights reserved.<br>
  <em>Proprietary Software — Unauthorized copying or redistribution is strictly prohibited.</em>
</p>