# PPL-B1-Ajektif

## Web Application of Software Development for Modern Agroindustry Subject

### Requirements

- PHP >= 8.1
- Composer
- Node.js
- MySQL + phpmyadmin

### Installation

1. Clone Repository :
   
    `git clone https://github.com/BrianFaviansa/PPL-B1-Ajektif.git`

2. Open Directory
   
    `cd PPL-B1-Ajektif`

3. Install PHP Dependency
   
    `composer install`

4. Install Node.js Dependency
   
    `npm install`

5. Copy .env.example to .env then do the database configuration

6. Generate Application key
    
    `php artisan key:generate`

7.  Run Migration & Seeder
    
    `php artisan migrate --seed`

8. Linking Storage
    
    `php artisan storage:link`

9. Open 2 Terminal for Compiling Vite and Running Development Server
    
    `npm run dev`

    `php artisan serve`

