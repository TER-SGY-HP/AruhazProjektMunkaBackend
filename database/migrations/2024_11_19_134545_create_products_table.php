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
            $table->string("category");
            $table->string("description");   
            $table->string("image")->nullable();
            $table->timestamps();
        });
        Product::create([
            'title' => 'Adidas Campus',
            'price' => 45000,
            'description' => 'Az Adidas Campus cipő az időtlen stílus és kényelem tökéletes ötvözete. Ez a klasszikus és népszerű cipőmodell már évtizedek óta az utcai divat egyik ikonjává vált, és nem véletlenül.',
            'category' => "men's clothing",
            'image' => 'https://balazskicks.com/cdn/shop/files/1.png?v=1711153326&width=1000',
        ]);
        Product::create([
            'title' => 'Kisgyerek gumicsizma',
            'price' => 10000,
            'description' => 'Jó gumicsizma',
            'category' => "men's clothing",
            'image' => 'https://www.bblove.hu/cdn/shop/files/spongya_1.jpg?v=1731069640&width=600',
        ]);
        Product::create([
            'title' => 'Nike Air Force 1 Low Tiffany & Co. 1837',
            'price' => 200,
            'description' => 'A Jordaneken kívűl az Air Force 1-es cipők azok amik megjelennek mindenki szeme előtt, ha a Nike cipőkről beszélünk.',
            'category' => "men's clothing",
            'image' => 'https://balazskicks.com/cdn/shop/products/1_ea85e846-f4de-4271-823f-baa9ac8a44df.png?v=1702320958&width=1000',
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
