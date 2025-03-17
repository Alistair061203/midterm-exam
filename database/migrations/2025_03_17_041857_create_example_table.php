<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('examples', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('example');
    }
};
