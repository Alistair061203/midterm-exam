<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{

    public function run()
    {
        DB::table('features')->insert([
            ['name' => 'Model', 'description' => 'The Model component corresponds to all the data-related logic that the user works with. This can represent either the data that is being transferred between the View and Controller components or any other business logic-related data.'],
            ['name' => 'View', 'description' => 'The View component is used for all the UI logic of the application. It generates a user interface for the user. '],
            ['name' => 'Controller', 'description' => 'The controller is the component that enables the interconnection between the views and the model so it acts as an intermediary.'],
            ['name' => 'Routes', 'description' => 'Laravel routes define the URLs that users can visit in your web application. They are defined in the routes/web.php file for web-related routes.'],
            ['name' => 'Middleware', 'description' => 'Middleware in Laravel provides a convenient mechanism for inspecting and filtering HTTP requests entering your application. It acts as a bridge between a request and a response, allowing you to perform various tasks before or after the request is handled by your application
            '],
            ['name' => 'Blade Templates', 'description' => 'Blade is the simple, yet powerful templating engine provided with Laravel. Unlike other popular PHP templating engines, Blade does not restrict you from using plain PHP code in your views.'],
            ['name' => 'Migrations', 'description' => 'In Laravel, migrations are used to manage your database schema. They allow you to define the structure of your database tables and their relationships.'],
            ['name' => 'Seeders', 'description' => 'Laravel Seeders are specialized classes that allow developers to populate their databases with predefined data.'],
            ['name' => 'Database', 'description' => 'A database is an organized collection of structured information or data, typically stored electronically in a computer system.'],
            ['name' => 'Eloquent ORM', 'description' => 'The Eloquent ORM included with Laravel provides a beautiful, simple ActiveRecord implementation for working with your database. Each database table has a corresponding "Model" which is used to interact with that table. '],
        ]);
    }
}

// php artisan db:seed --class=FeatureSeeder
