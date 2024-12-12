<?php

use App\ModelControllers\ComputerPartController;
use App\ModelControllers\ProductCategoryController;

if (!function_exists('productController')) {
    /*** @return ComputerPartController */
    function productController(): ComputerPartController
    {
        return app('ComputerPartController');
    }
}
if (!function_exists('productCategoryController')) {
    /*** @return ProductCategoryController */
    function productCategoryController(): ProductCategoryController
    {
        return app('ProductCategoryController');
    }
}
