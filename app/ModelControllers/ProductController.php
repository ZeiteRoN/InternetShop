<?php

namespace App\ModelControllers;

use App\Exceptions\ProductNotFoundException;
use App\ModelControllers\Repositories\ProductRepository;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

/***
 * Class ProductController
 * @package App\ModelControllers
 */
class ProductController
{
	/*** @var ProductRepository */
	private ProductRepository $repo;

	public function __construct()
	{
		$this->repo = new ProductRepository();
	}

	/**
	 * @param int $id
	 * @return Product
	 * @throws ProductNotFoundException
	 */
	public function findById(int $id): Product
	{
		return $this->repo->findById($id);
	}

	/**
	 * @return Collection
	 */
	public function getAll(): Collection
	{
		return $this->repo->getAll();
	}
}