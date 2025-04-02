<div align="center">
<h3 align="center">Modern MVC Architecture in PHP</h3>

  <p align="center">
    A lightweight, fast, and easy-to-use PHP framework inspired by best practices.
    <br />
     <a href="https://github.com/issam-mhj/-architecture-mvc-moderne">github.com/issam-mhj/-architecture-mvc-moderne</a>
  </p>
</div>

## Table of Contents

<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#key-features">Key Features</a></li>
      </ul>
    </li>
    <li><a href="#architecture">Architecture</a></li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#acknowledgments">Acknowledgments</a></li>
  </ol>
</details>

## About The Project

This project aims to create a minimalist PHP framework based on the MVC (Model-View-Controller) design pattern. It focuses on being lightweight, fast, and easy to use while incorporating modern development practices. The framework is designed to meet the needs of modern web applications with minimal dependencies, offering powerful features in a streamlined package.

### Key Features

- **MVC Architecture:** Follows the Model-View-Controller pattern for organized and maintainable code.
- **Routing:** A simple router to map requests to controllers and actions.
- **Eloquent ORM:** Utilizes Illuminate Database for easy database interactions.
- **Templating:** Uses Illuminate View for rendering dynamic content.
- **Authentication:** Basic authentication functionality with login, registration, and logout.
- **Session Management:** Built-in session management for user sessions.
- **Validation:** Utilizes Illuminate Validation for input validation.
- **Composer Based:** Manages dependencies using Composer.
- **`.env` Configuration:** Uses `phpdotenv` to load environment variables from a `.env` file.

The project implements a Model-View-Controller (MVC) architecture.

- **Models:** Located in `app/models/`, responsible for interacting with the database. Uses Eloquent ORM. Example: `User.php`.
- **Views:** Located in `app/views/`, responsible for rendering the user interface. Example: `authentification/sign_in.php`, `authentification/sign_up.php`.
- **Controllers:** Located in `app/controllers/`, responsible for handling user requests and coordinating between models and views. Example: `AuthController.php`, `front/HomeController.php`.
- **Core:** Located in `app/core/`, contains core classes such as `Controller`, `Database`, `Model`, `Router`, `Session`, and `View`.
- **Configuration:** Located in `config/`, contains configuration files such as `config.php` (database settings) and `routes.php` (route definitions).
- **Public:** Located in `public/`, contains the `index.php` entry point and `.htaccess` file for routing.

Key technologies used:

- **PHP:** The primary language.
- **Illuminate Database:** Used for database interactions.
- **Illuminate Routing:** Used for handling routes.
- **Illuminate View:** Used for templating.
- **phpdotenv:** Used for managing environment variables.
- **Symfony Var-dumper:** Used for debugging.
- **Tailwind CSS:** Used for styling the login and registration pages.

## Getting Started

### Prerequisites

- PHP >= 8.2
- Composer

### Installation

1. Clone the repository:
   ```sh
   git clone https://github.com/issam-mhj/-architecture-mvc-moderne.git
   ```
2. Navigate to the project directory:
   ```sh
   cd -architecture-mvc-moderne
   ```
3. Install Composer dependencies:
   ```sh
   composer install
   ```
4. Copy `.env.example` to `.env` and configure your database settings:
   ```sh
   cp .env.example .env
   ```
   Edit the `.env` file with your database credentials.
5.  Configure your web server (e.g., Apache) to point to the `public/` directory as the document root. Ensure that `mod_rewrite` is enabled.
