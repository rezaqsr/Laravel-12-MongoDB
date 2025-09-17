<div align="center">
<h1>Laravel 12 & MongoDB</h1>
</div>
<p align="center">
<a href="#"><img src="https://img.shields.io/badge/Laravel-12.x-f61500" alt="Laravel"></a>
<a href="#"><img src="https://img.shields.io/badge/MongoDB-42B883" alt="MongoDB"></a>
<a href="#"><img src="https://img.shields.io/badge/Livewire-3.x-C25C8B" alt="LiveWire"></a>
<a href="#"><img src="https://img.shields.io/badge/MaterializeCSS-1.x-EE6E73" alt="Tailwind"></a>
</p>

---

- **MongoDB Integration**: Full integration of MongoDB as the Database For Your Laravel Project.
- **Caching with MongoDB**: Store and Manage Cache Data in MongoDB.
- **Queue Management**: Use MongoDB For Laravel's Queue System.
- **Environment Configurations**: Easy-to-Configure `.env` File for MongoDB Settings.
## Prerequisites

Before you start, ensure you have the following:

- PHP 8.2+
- Composer
- [MongoDB Server](https://www.mongodb.com/docs/manual/tutorial/)
- [MongoDB PHP Extension](https://www.php.net/manual/en/mongodb.installation.php)


## Getting Started

### Step 1: Clone the Repository

```bash
git clone https://github.com/rezaqsr/Laravel-mongoDB.git
cd Laravel-mongoDB
```
### Step 2: composer install

```bash
composer install
```
### Step 3: Configure Environment Variables

Create `.env` & Copy the `.env.example` file to `.env`:

```bash
cp .env.example .env
```
### Step 4: Generate App Key
```bash
php artisan key:generate
```
### Step 5: Run Server
```bash
php artisan serve
```
## Resources
 - [Laravel Documentation](https://laravel.com/docs)
 - [MongoDB Documentation](https://www.mongodb.com/docs/)
 - [Livewire Documentation](https://livewire.laravel.com/docs/quickstart)
 - [Materialize CSS Documentation](https://materializecss.com/)
## License
This project is open-sourced under the MIT license.

This `README.md` provides clear instructions for setting up a Laravel project integrated with MongoDB, covering database connection, caching, and queue configurations for a quick start.

