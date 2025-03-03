# Laravel Project Commands

-   `php artisan serve`

    -   Starts the Laravel development server.

-   `php artisan migrate`

    -   Runs the database migrations.

-   `php artisan make:model ModelName`

    -   Creates a new Eloquent model class.

-   `php artisan make:model ModelName -mf`

-   Creates a new Eloquent model + factory + migration.

-   `php artisan make:controller ControllerName`

    -   Creates a new controller class.

-   `php artisan make:migration create_table_name_table`

    -   Creates a new migration file.

-   `php artisan tinker`

    -   Opens an interactive shell to interact with your application.

-   `php artisan vendor:publish`

    -   Generate/gets resources that were installed by composer, e.g., pagination views.

-   `php artisan migrate:fresh --seed`
    `php artisan db:seed --class=SeedClassName`

        -   Drops all tables and re-runs all migrations, then seeds the database.

-   `php artisan make:seeder SeederName`

    -   Creates a new seeder class.

-   `composer require barryvdh/laravel-debugbar --dev`

    -   Installs the Laravel Debugbar package for development.
