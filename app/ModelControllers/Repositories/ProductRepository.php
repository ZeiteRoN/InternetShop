<?php

namespace App\ModelControllers\Repositories;

use App\Exceptions\ProductNotFoundException;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;


/***
 * Class ProductRepository
 * @package App\ModelControllers\Repositories
 */
class ProductRepository
{
	/**
	 * @param int $id
	 * @return Product
	 * @throws ProductNotFoundException
	 */
	public function findById(int $id): Product
	{
		$product = Product::where('id', '=', $id)->first();
		if ($product === NULL) {
			throw new ProductNotFoundException();
		}
		return $product;
	}

	/**
	 * @return Collection
	 */
	public function getAll(): Collection
	{
		return Product::all();
	}
}