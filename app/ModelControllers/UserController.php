<?php

namespace App\ModelControllers;

use App\Exceptions\UserNotFoundException;
use App\Http\Controllers\Controller;
use App\ModelControllers\Repositories\UserRepository;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class UserController
 * @package App\ModelControllers
 */
class UserController extends Controller
{
    private UserRepository $repo;

    /** @return void */
    function __construct()
    {
        $this->repo = new UserRepository();
    }

    /**
     * @param int $id
     * @return User
     * @throws UserNotFoundException
     */
    public function findById(int $id): User
    {
        return $this->repo->getById($id);
    }

    /**
     * @param string $email
     * @return User
     * @throws UserNotFoundException
     */
    public function findByEmail(string $email): User
    {
        return $this->repo->getByEmail($email);
    }

    /*** @return Collection */
    public function getAll(): Collection
    {
        return $this->repo->getAll();
    }
}
