<?php

namespace App\Providers;

use App\ModelControllers\ProductCategoryController;
use App\ModelControllers\ProductController;
use Illuminate\Support\ServiceProvider;

/*** Class ControllerServiceProvider */
class ControllerServiceProvider extends ServiceProvider
{
	/*** Bootstrap services.*/
	public function boot(): void
	{
		$this->app->singleton(ProductController::class);
		$this->app->alias(ProductController::class, "ProductController");
		$this->app->singleton(ProductCategoryController::class);
		$this->app->alias(ProductCategoryController::class, "ProductCategoryController");
	}
}
