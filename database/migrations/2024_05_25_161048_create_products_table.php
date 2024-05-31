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
            $table->string("name");
            $table->string("ref");
            $table->float("price");
            $table->float("price_f");
            $table->float("tva")->default(0);
            $table->unsignedBigInteger("category_id")->nullable();
            $table->foreign("category_id")->references("id")->on("categories")->onDelete("cascade");
            $table->unsignedBigInteger("supplier_id")->nullable();
            $table->foreign("supplier_id")->references("id")->on("suppliers")->onDelete("cascade");
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
