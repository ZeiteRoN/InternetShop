<?php

namespace App\Models;


/***
 * Class Product
 * @property int          $id
 * @property string       $title
 * @property string|NULL  $image
 * @property string|NULL  $description
 * @property int          $price
 * @property int          $category_id
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

	/*** @return string|null */
	public function getImage(): ?string
	{
		return $this->image;
	}

	/**
	 * @param string|null $image
	 * @return void
	 */
	public function setImage(?string $image): void
	{
		$this->image = $image;
	}

	/*** @return string|null */
	public function getDescription(): ?string
	{
		return $this->description;
	}

	/**
	 * @param string|null $description
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
	 * @param int $category_id
	 * @return void
	 */
	public function setCategoryId(int $category_id): void
	{
		$this->category_id = $category_id;
	}
}