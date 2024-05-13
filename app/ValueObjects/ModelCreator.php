<?php

namespace App\ValueObjects;

use App\Models\Product;

/*** Class ModelCreator */
class ModelCreator
{
	/**
	 * @param string      $title
	 * @param float       $price
	 * @param int         $categoryId
	 * @param string|NULL $description
	 * @param string|NULL $image
	 * @return Product
	 */
	public static function createProduct(string $title, float $price, int $categoryId, ?string $description = NULL, ?string $image = NULL): Product
	{
		$product = new Product();
		$product->setTitle($title);
		$product->setPrice($price);
		$product->setDescription($description);
		$product->setImage($image);
		$product->setCategoryId($categoryId);
		$product->save();
		return $product;
	}
}