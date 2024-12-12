<?php

namespace App\ModelControllers;

use App\Exceptions\PartNotFoundException;
use App\ModelControllers\Repositories\ComputerPartRepository;
use App\Models\ComputerPart;
use Illuminate\Database\Eloquent\Collection;

/***
 * Class ComputerPartController
 * @package App\ModelControllers
 */
class ComputerPartController
{
    /*** @var ComputerPartRepository */
    private ComputerPartRepository $repo;

    /*** @return void */
    public function __construct()
    {
        $this->repo = new ComputerPartRepository();
    }

    /**
     * @param int $id
     * @return ComputerPart
     * @throws PartNotFoundException
     */
    public function findById(int $id): ComputerPart
    {
        return $this->repo->getById($id);
    }

    /**
     * @param string $title
     * @return ComputerPart
     * @throws PartNotFoundException
     */
    public function findByTitle(string $title): ComputerPart
    {
        return $this->repo->getByTitle($title);
    }

    /**
     * @param string $categoryId
     * @return Collection
     * @throws PartNotFoundException
     */
    public function findAllByCategoryId(string $categoryId): Collection
    {
        return $this->repo->getAllByCategoryId($categoryId);
    }

    /**
     * @return Collection
     */
    public function getAll(): Collection
    {
        return $this->repo->getAll();
    }
}
