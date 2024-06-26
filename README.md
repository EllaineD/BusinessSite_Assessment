# Project Name
BusinessSite

## Description

This is a webpage made as an assessment task for Software Developer role.

## Deployment Instructions

### Requirements
- PHP [PHP 8.1.25]
- Composer [2.7.7 ]
- MySQL [phpmyadmin v5.2.1]


### Installation

1. Clone the repository: https://github.com/EllaineD/BusinessSite_Assessment
2. Install dependencies in cmd: composer install
3. Update the following configurations in the `.env` file: Database connection details
4. Run database migrations: php artisan migrate
5. (Optional) Seed the database with initial data: db:seed


### Configuration

- To customize the project's settings, modify the `.env` file.
- Additional configuration files can be found in the `config/` directory.

### Running the Application

To start the development server, run the following command:php artisan serve
The application will be accessible at [http://localhost:8000](http://localhost:8000).
The admin portal is accessible at [http://localhost:8000](http://localhost:8000/admin).

### Testing

To run the tests, use the following command: php artisan test

### Troubleshooting

If you encounter any issues during deployment, try the following steps:

- Make sure all dependencies are installed and up to date.
- Ensure that laravel, livewire, filament, doctrine dependencies do not have any conflits.
- Double-check your database connection settings in the `.env` file.
- Clear the application cache using the command: php artisan cache:clear


