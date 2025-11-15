<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Primary key, auto increment
            $table->string('name', 100); // Maksimal 100 karakter
            $table->text('description')->nullable(); // Opsional
            $table->decimal('price', 10, 2); // Decimal 10,2
            $table->integer('stock')->default(0); // Default 0
            $table->timestamps(); // created_at & updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
