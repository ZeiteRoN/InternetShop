<?php

namespace App\ModelControllers;

use App\Exceptions\ProductCategoryNotFoundException;
use App\ModelControllers\Repositories\ProductCategoryRepository;
use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Collection;

/*** Class ProductCategoryController */
class ProductCategoryController
{
	/*** @var ProductCategoryRepository */
	private ProductCategoryRepository $repo;

	/*** @return void */
	function __construct()
	{
		$this->repo = new ProductCategoryRepository();
	}

	/**
	 * @param int $id
	 * @return ProductCategory
	 * @throws ProductCategoryNotFoundException
	 */
	public function findById(int $id): ProductCategory
	{
		return $this->repo->findById($id);
	}

	/*** @return Collection */
	public function getAll(): Collection
	{
		return $this->repo->getAll();
	}
}