# 2ACALL - Call Center Management System

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Table of Contents

-   [Description](#description)
-   [Features](#features)
-   [Tech Stack](#tech-stack)
-   [Project Structure](#project-structure)
-   [Installation](#installation)
-   [Configuration](#configuration)
-   [Database Setup](#database-setup)
-   [Usage](#usage)
-   [Testing](#testing)
-   [Contribution](#contribution)
-   [License](#license)
-   [Contact](#contact)

## Description

2ACALL is a web-based call center management system built with Laravel. It allows administrators to manage job offers, handle contact messages, and provides a robust admin dashboard. The project is designed for scalability, security, and ease of use.

## Features

-   User authentication and authorization (admin and user roles)
-   Admin dashboard for managing job offers and contact messages
-   Contact form for users to send messages
-   Job offer CRUD (Create, Read, Update, Delete) operations
-   Real-time notifications for new contact messages
-   Responsive and modern UI using Tailwind CSS
-   Database migrations and seeders for easy setup
-   RESTful routing and controllers

## Tech Stack

-   **Backend:** Laravel (PHP)
-   **Frontend:** Blade templates, Tailwind CSS, Alpine.js
-   **Database:** MySQL (or compatible)
-   **Other:** Composer, NPM, Vite

## Project Structure

```
├── app/
│   ├── Http/Controllers/         # Controllers for business logic
│   ├── Models/                   # Eloquent models
│   └── ...
├── config/                       # Configuration files
├── database/
│   ├── migrations/               # Database migrations
│   ├── seeders/                  # Database seeders
│   └── factories/                # Model factories
├── public/                       # Publicly accessible files
├── resources/
│   ├── views/                    # Blade templates
│   ├── css/                      # CSS files
│   └── js/                       # JavaScript files
├── routes/
│   └── web.php                   # Web routes
├── tests/                        # Automated tests
├── .env.example                  # Example environment file
├── README.md                     # Project documentation
└── ...
```

## Installation

1. **Clone the repository:**
    ```sh
    git clone https://github.com/nesssim/2ACALL_V0.git
    cd 2ACALL_V0
    ```
2. **Install PHP dependencies:**
    ```sh
    composer install
    ```
3. **Install Node.js dependencies:**
    ```sh
    npm install
    ```
4. **Copy the environment file:**
    ```sh
    cp .env.example .env
    ```
5. **Generate application key:**
    ```sh
    php artisan key:generate
    ```

## Configuration

-   Edit the `.env` file to set your database credentials and other environment variables.
-   Example for MySQL:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=call_center
    DB_USERNAME=root
    DB_PASSWORD=your_password
    ```

## Database Setup

1. **Create the database:**
    - Create a MySQL database named `call_center` (or as specified in your `.env`).
2. **Run migrations:**
    ```sh
    php artisan migrate
    ```
3. **(Optional) Seed the database:**
    ```sh
    php artisan db:seed
    ```
4. **(Optional) Import SQL dump:**
    - You can import `call_center.sql` if you want a pre-filled database.

## Usage

1. **Start the development server:**
    ```sh
    php artisan serve
    ```
2. **Compile frontend assets:**
    ```sh
    npm run dev
    ```
3. **Access the application:**
    - Visit [http://localhost:8000](http://localhost:8000) in your browser.

## Testing

-   Run feature and unit tests using:
    ```sh
    php artisan test
    ```
    or
    ```sh
    ./vendor/bin/pest
    ```

## Contribution

1. Fork the repository
2. Create a new branch (`git checkout -b feature/your-feature`)
3. Commit your changes (`git commit -am 'Add new feature'`)
4. Push to the branch (`git push origin feature/your-feature`)
5. Create a Pull Request

## License

This project is open-sourced under the [MIT license](https://opensource.org/licenses/MIT).

## Contact

-   **Project Maintainer:** nesssim
-   **GitHub:** [https://github.com/nesssim/2ACALL_V0](https://github.com/nesssim/2ACALL_V0)
-   For questions or support, please open an issue on GitHub.
