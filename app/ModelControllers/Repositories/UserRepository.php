<?php

namespace App\ModelControllers\Repositories;


use App\Exceptions\UserNotFoundException;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class UserRepository
 * @package App\ModelControllers\Repositories
 */
class UserRepository
{
    /**
     * @param int $id
     * @return User
     * @throws UserNotFoundException
     */
    public function getById(int $id): User
    {
        $user = User::where('id', '=', $id)->first();
        if ($user == null) {
            throw new UserNotFoundException();
        }
        return $user;
    }

    /**
     * @param string $email
     * @return User
     * @throws UserNotFoundException
     */
    public function getByEmail(string $email): User
    {
        $user = User::where('email', '=', $email)->first();
        if ($user == null) {
            throw new UserNotFoundException();
        }
        return $user;
    }

    /*** @return Collection */
    public function getAll(): Collection
    {
        return User::all();
    }
}
