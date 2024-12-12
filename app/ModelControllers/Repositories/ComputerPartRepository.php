<?php

namespace App\ModelControllers\Repositories;

use App\Exceptions\PartNotFoundException;
use App\Models\ComputerPart;
use Illuminate\Database\Eloquent\Collection;


/***
 * Class ComputerPartRepository
 * @package App\ModelControllers\Repositories
 */
class ComputerPartRepository
{

    /**
     * @param int $id
     * @return ComputerPart
     * @throws PartNotFoundException
     */
    public function getById(int $id): ComputerPart
    {
        $part = ComputerPart::where('id', '=', $id)->first();
        if ($part === null) {
            throw new PartNotFoundException();
        }
        return $part;
    }

    /**
     * @param string $title
     * @return ComputerPart
     * @throws PartNotFoundException
     */
    public function getByTitle(string $title): ComputerPart
    {
        $part = ComputerPart::where('title', '=', $title)->first();
        if ($part === null) {
            throw new PartNotFoundException();
        }
        return $part;
    }

    /**
     * @param string $categoryId
     * @return Collection
     * @throws PartNotFoundException
     */
    public function getAllByCategoryId(string $categoryId): Collection
    {
        $parts = ComputerPart::where('category_id', '=', $categoryId)->all();
        if ($parts === null) {
            throw new PartNotFoundException();
        }
        return $parts;
    }

    /*** @return Collection */
    public function getAll(): Collection
    {
        return ComputerPart::all();
    }
}
