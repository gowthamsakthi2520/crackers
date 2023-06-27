<?php

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
            $table->id();
            $table->string("product_name");
            $table->text("product_description");
            $table->text("product_images");
            $table->decimal("sale_price");
            $table->decimal("regular_price");
            $table->integer("stock");
            $table->integer("category");
            $table->string("collection");
            $table->string("tags");
            $table->string("variants");
            $table->string("sku");
            $table->string("status")->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
