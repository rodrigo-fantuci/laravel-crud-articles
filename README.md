# News Articles CRUD

This project is a CRUD (Create, Read, Update, Delete) application for news articles built using the Laravel framework. It includes authentication using the Sanctum package and allows users to create, view, edit, and delete their own news articles.

## Getting Started

These instructions will guide you on how to download and test the application locally on your computer.

### Prerequisites

-   PHP 8.0 or higher
-   PostgresSQL or any other database supported by Laravel
-   Composer
-   npm

### Installing

1. Clone the repository to your local machine: `git clone https://github.com/rodrigo-fantuci/laravel-crud-articles.git`
2. Navigate to the project directory: `cd laravel-crud-articles`
3. Install the required dependencies: `composer install`
4. Copy the .env.example file to .env: `cp .env.example .env`
5. Generate a new application key: `php artisan key:generate`
6. Create a new database and configure the connection settings in the .env file
7. Run the migrations: `php artisan migrate`
8. Start the development server: `php artisan serve`

### Routes

-   `GET /articles`: Retrieve a list of all news articles
-   `GET /articles/{id}`: Retrieve a specific news article
-   `POST /articles`: Create a new news article
-   `PUT /articles/{id}`: Update an existing news article
-   `DELETE /articles/{id}`: Delete an existing news article

## Authors

-   **Rodrigo Fantuci** - [Github Profile](https://github.com/rodrigo-fantuci)

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
