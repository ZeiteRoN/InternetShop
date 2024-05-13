<?php

namespace App\Models;

/***
 * Class Product
 * @property int         $id
 * @property string      $title
 * @property string|NULL $image
 * @property string|NULL $description
 * @property int         $price
 * @property int         $category_id
 */
class Product extends AModel
{
	/*** @return int */
	public function getId(): int
	{
		return $this->id;
	}

	/**
	 * @param int $id
	 * @return void
	 */
	public function setId(int $id): void
	{
		$this->id = $id;
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

	/*** @return string|NULL */
	public function getImage(): ?string
	{
		return $this->image;
	}

	/**
	 * @param string|NULL $image
	 * @return void
	 */
	public function setImage(?string $image): void
	{
		$this->image = $image;
	}

	/*** @return string|NULL */
	public function getDescription(): ?string
	{
		return $this->description;
	}

	/**
	 * @param string|NULL $description
	 * @return void
	 */
	public function setDescription(?string $description): void
	{
		$this->description = $description;
	}

	/*** @return int */
	public function getPrice(): int
	{
		return $this->price;
	}

	/**
	 * @param int $price
	 * @return void
	 */
	public function setPrice(int $price): void
	{
		$this->price = $price;
	}

	/*** @return int */
	public function getCategoryId(): int
	{
		return $this->category_id;
	}

	/**
	 * @param int $categoryId
	 * @return void
	 */
	public function setCategoryId(int $categoryId): void
	{
		$this->category_id = $categoryId;
	}
}