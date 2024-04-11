<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('workers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('phone_number');
            $table->string('image')->nullable();
            $table->integer('salary')->nullable();
            $table->timestamps();
        });
    }

  
    public function down(): void
    {
        Schema::dropIfExists('workers');
    }
};
