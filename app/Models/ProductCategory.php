<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class ProductCategory
 * @package App\Models
 * @property string    $title
 * @property Product[] $products
 */
class ProductCategory extends AModel
{
	/*** @return HasMany */
	public function products(): HasMany
	{
		return $this->hasMany(Product::class);
	}

	/*** @return string */
	public function getTitle(): string
	{
		return $this->title;
	}

	/**
	 * @param string $title
	 * @return void
	 */
	public function setTitle(string $title): void
	{
		$this->title = $title;
	}
}
