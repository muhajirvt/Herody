<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# My Laravel Project

This is a basic authentication system using the Laravel framework that includes generating a unique identifier (ID) for each registered user.

## Installation

Follow these steps to set up the project locally.

### Prerequisites

- PHP >= 7.3
- Composer
- Node.js & npm
- MySQL

Clone the repository:

`git clone https://github.com/muhajirvt/Herody`

### Install dependencies:

`composer install`

`php artisan ui bootstrap --auth`

`npm install`

`npm run dev`

### Set up the environment file:

cp .env.example .env

Configure your .env file with your database credentials.

### Run migrations:
    
`php artisan migrate`

to enable default credential run the seeder command using 

`php artisan db:seed`

### Serve the application:

`php artisan serve`

### Usage

- Register a new user with a unique ID.
- Log in with registered credentials.
- Log out securely.
   




