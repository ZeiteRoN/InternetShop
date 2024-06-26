<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	/*** Run the migrations.*/
	public function up(): void
	{
		Schema::create('products', function(Blueprint $table) {
			$table->id();
			$table->string('title');
			$table->string("description")->nullable();
			$table->float('price');
			$table->timestamp('created_at')->useCurrent();
			$table->timestamp('updated_at')->useCurrentOnUpdate();
		});
		DB::statement("ALTER TABLE `products` ADD `image` MEDIUMBLOB AFTER `price`");
	}
};
