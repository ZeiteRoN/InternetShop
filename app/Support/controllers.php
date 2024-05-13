<?php

use App\ModelControllers\ProductCategoryController;
use App\ModelControllers\ProductController;

if ( ! function_exists('productController')) {
	/*** @return ProductController */
	function productController(): ProductController
	{
		return app('ProductController');
	}
}
if ( ! function_exists('productCategoryController')) {
	/*** @return ProductCategoryController */
	function productCategoryController(): ProductCategoryController
	{
		return app('ProductCategoryController');
	}
}