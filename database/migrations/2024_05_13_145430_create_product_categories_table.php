<?php

use App\ValueObjects\Constants\ProductCategories;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	/*** Run the migrations.*/
	public function up(): void
	{
		Schema::create('product_categories', function(Blueprint $table) {
			$table->id();
			$table->string('title');
			$table->timestamp('created_at')->useCurrent();
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
		});
		foreach (ProductCategories::ALL as $category) {
			$data[] = ['title' => $category];
		}
		DB::table('product_categories')->insert($data ?? []);
	}
};
