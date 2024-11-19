<?php

use App\Models\Product;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->primary(['id']);
            $table->id("id");
            $table->string("title");
            $table->integer("price");
            $table->string("description");
            $table->string("category");
            $table->string("image")->nullable();
            $table->timestamps();
        });
        Product::create([
            'title' => 'valami',
            'price' => 200,
            'description' => 'ASDASDSADASDASDASD',
            'category' => 'jewerly',
        ]);
        Product::create([
            'title' => 'valami',
            'price' => 200,
            'description' => 'ASDASDSADASDASDASD',
            'category' => 'jewerly',
        ]);
        Product::create([
            'title' => 'valami',
            'price' => 200,
            'description' => 'ASDASDSADASDASDASD',
            'category' => 'jewerly',
        ]);
        Product::create([
            'title' => 'valami',
            'price' => 200,
            'description' => 'ASDASDSADASDASDASD',
            'category' => 'jewerly',
        ]);
        Product::create([
            'title' => 'valami',
            'price' => 200,
            'description' => 'ASDASDSADASDASDASD',
            'category' => 'jewerly',
        ]);
        Product::create([
            'title' => 'valami',
            'price' => 200,
            'description' => 'ASDASDSADASDASDASD',
            'category' => 'jewerly',
        ]);
        Product::create([
            'title' => 'valami',
            'price' => 200,
            'description' => 'ASDASDSADASDASDASD',
            'category' => 'jewerly',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
