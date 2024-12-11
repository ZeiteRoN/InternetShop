<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('computer_parts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description');
            $table->decimal('price')->unsigned();
            $table->integer('quantity');
            $table->string('image_path')->nullable();
            $table->bigInteger('category_id')->unsigned();
            $table->json('characteristics')->nullable();
            $table->timestamp("created_at")->useCurrent()->nullable();
            $table->timestamp("updated_at")->useCurrentOnUpdate()->nullable();
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
