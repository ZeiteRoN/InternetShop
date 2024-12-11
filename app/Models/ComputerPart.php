<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ComputerPart
 * @property  int $id
 * @property  string $title
 * @property  string $description
 * @property  float $price
 * @property  integer $quantity
 * @property  string $imagePath
 * @property  integer $categoryId
 * @property  array $characteristics
 * @package App\Models
 */
class ComputerPart extends AModel
{
    use HasFactory;

    /*** @var string */
    protected $table = 'computer_parts';

    /*** @return int */
    public function getId(): int
    {
        return $this->id;
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

    /*** @return string */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return void
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /*** @return float */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return void
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /*** @return int */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return void
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /*** @return string */
    public function getImagePath(): string
    {
        return $this->imagePath;
    }

    /**
     * @param string $imagePath
     * @return void
     */
    public function setImagePath(string $imagePath): void
    {
        $this->imagePath = $imagePath;
    }

    /*** @return int */
    public function getCategoryId(): int
    {
        return $this->categoryId;
    }

    /**
     * @param int $categoryId
     * @return void
     */
    public function setCategoryId(int $categoryId): void
    {
        $this->categoryId = $categoryId;
    }

    /*** @return array */
    public function getCharacteristics(): array
    {
        return $this->characteristics;
    }

    /**
     * @param array $characteristics
     * @return void
     */
    public function setCharacteristics(array $characteristics): void
    {
        $this->characteristics = $characteristics;
    }
}
