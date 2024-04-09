# Laravel PHP

## What I learned:

Laravel is a PHP framework primarily focused on the Model-View-Controller (MVC) architectural pattern. One of its standout features is its Object-Relational Mapping (ORM) system, which simplifies database interactions by allowing developers to work with databases directly within their code, without needing to interact with SQL queries directly.


### View
For the View layer, Laravel uses Blade, a templating engine that allows for the creation of HTML-like views. Blade templates offer the flexibility to include PHP code alongside HTML, enabling developers to implement conditions, loops, and other dynamic content directly within the view files.

### Controller
In the Controller layer, controllers are housed within the `app/Http/Controllers` directory. Controllers handle the logic of the application, facilitating interactions with the data layer and orchestrating responses to client requests. Middleware, also located in the `Http` folder, acts as intermediate software that performs data processing, validation, and security-related tasks before passing control to the controllers.

### Model
Within the Model layer, Laravel organizes database-related tasks within the `migrations` directory. Migration files define the structure and relationships of database tables, allowing developers to manage database schema changes and versioning through code.


### Routing system
In Laravel, routing refers to the process of defining how the application responds to HTTP requests. Laravel provides a convenient and expressive way to define routes using its routing system.

Routes in Laravel are typically defined in the routes directory, specifically within the web.php or api.php files, depending on the type of routes you're defining.

    Web Routes (web.php): These routes are responsible for handling web requests and typically define routes for web pages, including routes for rendering views, handling form submissions, etc. You'll find these routes defined in the routes/web.php file.

    API Routes (api.php): These routes are meant for handling API requests and are commonly used for building RESTful APIs. API routes typically interact with data in JSON format and are often used for AJAX requests or building backend services. You'll find these routes defined in the routes/api.php file.

The routes/web.php and routes/api.php files serve as the entry point for defining routes in your Laravel application. Inside these files, you can use Laravel's routing methods like Route::get(), Route::post(), Route::put(), Route::delete(), etc., to define routes for various HTTP methods.


```php
// routes/web.php
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', 'AboutController@index');

Route::post('/contact', 'ContactController@store');

```
In the above example, we define three routes:

    A GET route for the root URL (/) that returns the welcome view.
    A GET route for the /about URL that maps to the index method of the AboutController.
    A POST route for the /contact URL that maps to the store method of the ContactController.

The app.php file is typically located in the config directory (config/app.php). This file contains application-level configuration options for your Laravel application, including settings related to logging, debugging, timezone, encryption, service providers, etc. It's an important configuration file, but it doesn't directly relate to routing.

## Overall: 
Laravel's well-defined directory structure and intuitive syntax streamline the development process, making it a popular choice for building robust and maintainable web applications.
