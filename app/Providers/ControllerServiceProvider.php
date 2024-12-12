<?php

namespace App\Providers;

use App\ModelControllers\ComputerPartController;
use App\ModelControllers\ProductCategoryController;
use Illuminate\Support\ServiceProvider;

/*** Class ControllerServiceProvider */
class ControllerServiceProvider extends ServiceProvider
{
    /*** Bootstrap services.*/
    public function boot(): void
    {
        $this->app->singleton(ComputerPartController::class);
        $this->app->alias(ComputerPartController::class, "ComputerPartController");
        $this->app->singleton(ProductCategoryController::class);
        $this->app->alias(ProductCategoryController::class, "ProductCategoryController");
    }
}
