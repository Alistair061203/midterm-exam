<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ExampleSeeder extends Seeder
{

    public function run()
    {
        DB::table('examples')->insert([
            ['name' => 'John Doe', 'age' => 25],
            ['name' => 'Jane Smith', 'age' => 30],
        ]);
    }
}

// php artisan db:seed --class=ExampleSeeder