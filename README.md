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

    Drops all tables and re-runs all migrations, then seeds the database.

-   `php artisan make:seeder SeederName`

    -   Creates a new seeder class.

-   `composer require barryvdh/laravel-debugbar --dev`

    -   Installs the Laravel Debugbar package for development.

-   `php artisan make:controller`

    -   Creates a new controller class.

-   `php artisan route:list`

    -   Lists all registered routes for the application.

-   `php artisan route:list --except-vendor`

    -   Lists all registered routes except those provided by vendor packages.

php artisan make:policy

php artisan make:mail

## Different ways of routing

`
Route::get(uri: 'jobs', action: [JobController::class, 'index']);
Route::get(uri: '/jobs/create', action: [JobController::class, 'create']);
Route::get(uri: '/jobs/{job}', action: [JobController::class, 'show']);
Route::get(uri: '/jobs/{job}/edit', action: [JobController::class, 'edit']);
Route::patch(uri: '/jobs/{job}', action: [JobController::class, 'update']);
Route::delete(uri: '/jobs/{job}', action: [JobController::class, 'destroy']);
Route::post(uri: '/jobs', action: [JobController::class, 'store']);`

`
Route::controller(JobController::class)->group(function () {
    Route::get('jobs', 'index');
    Route::get('/jobs/create', 'create');
    Route::get('/jobs/{job}', 'show');
    Route::get('/jobs/{job}/edit', 'edit');
    Route::patch('/jobs/{job}', 'update');
    Route::delete('/jobs/{job}', 'destroy');
    Route::post('/jobs', 'store');
});`

#### use only/expect

`Route::resource('jobs', JobController::class, [
    'only' => ['index', 'show', 'create', 'store', 'edit', 'update', 'destroy']
]);`

### show all

`Route::resource('jobs', JobController::class);`

## middleware

`Route::resource(name: 'jobs', controller: JobController::class)->only((['index', 'show']));
Route::resource(name: 'jobs', controller: JobController::class)->except(['index', 'show'])->middleware('auth');`
