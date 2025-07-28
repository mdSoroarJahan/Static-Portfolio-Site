# Static Portfolio Site

A responsive portfolio website built with Laravel and Bootstrap, featuring a modern design with smooth animations and interactive elements.

## Features

-   **Responsive Design**: Mobile-first approach with Bootstrap framework
-   **Interactive Portfolio**: Filterable portfolio gallery
-   **Google Maps Integration**: Contact section with interactive maps
-   **Modern UI**: Clean and professional design
-   **Testimonials Carousel**: Client testimonial slider
-   **Contact Form**: Functional contact form with validation

## Setup Instructions

### Prerequisites

-   PHP 8.2 or higher
-   Composer
-   Laravel 11.x

### Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/mdSoroarJahan/Static-Portfolio-Site.git
    cd Static-Portfolio-Site/Portfolio
    ```

2. Install dependencies:

    ```bash
    composer install
    ```

3. Copy the environment file:

    ```bash
    cp .env.example .env
    ```

4. Generate application key:

    ```bash
    php artisan key:generate
    ```

5. Configure your environment variables in `.env`:

    ```bash
    # Database configuration (if needed)
    DB_CONNECTION=sqlite

    # Google Maps API Key (required for maps functionality)
    GOOGLE_MAPS_API_KEY=your_google_maps_api_key_here
    ```

6. Set up the database (if using database features):

    ```bash
    php artisan migrate
    ```

7. Start the development server:
    ```bash
    php artisan serve
    ```

The application will be available at `http://localhost:8000`.

### Google Maps API Key Setup

1. Go to the [Google Cloud Console](https://console.cloud.google.com/)
2. Create a new project or select an existing one
3. Enable the Maps JavaScript API
4. Create credentials (API key)
5. Add your API key to the `.env` file:
    ```
    GOOGLE_MAPS_API_KEY=your_actual_api_key_here
    ```

**Important**: Keep your API key secure and never commit it to version control. The `.env` file is already excluded from Git.

## Project Structure

```
Portfolio/
├── app/
│   ├── Http/Controllers/
│   └── Models/
├── resources/
│   ├── views/
│   │   ├── home.blade.php
│   │   ├── about.blade.php
│   │   ├── services.blade.php
│   │   ├── portfolio.blade.php
│   │   └── contact.blade.php
│   ├── css/
│   └── js/
├── public/
│   └── assets/
│       ├── css/
│       ├── js/
│       └── img/
└── routes/
    └── web.php
```

## Security

-   API keys are stored in environment variables
-   Sensitive data is excluded from version control
-   CSRF protection enabled
-   Input validation implemented

## Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Submit a pull request

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
