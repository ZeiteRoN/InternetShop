<?php

namespace App\ModelControllers\Repositories;

use App\Exceptions\ProductCategoryNotFoundException;
use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Collection;

/*** Class ProductCategoryRepository */
class ProductCategoryRepository
{
	/**
	 * @param int $id
	 * @return ProductCategory
	 * @throws ProductCategoryNotFoundException
	 */
	public function findById(int $id): ProductCategory
	{
		$category = ProductCategory::where('id', '=', $id)->first();
		if ($category === NULL) {
			throw new ProductCategoryNotFoundException();
		}
		return $category;
	}

	/*** @return Collection */
	public function getAll(): Collection
	{
		return ProductCategory::all();
	}
}