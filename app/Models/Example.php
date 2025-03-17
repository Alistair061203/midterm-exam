<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Example extends Model
{
    use HasFactory;

    protected $table = 'examples'; // Ensure this matches your database table name

    protected $fillable = ['name', 'age']; // Define mass-assignable fields
}
