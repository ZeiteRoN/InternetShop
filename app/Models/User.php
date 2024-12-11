<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Carbon;

/**
 * Class User
 * @property int $id
 * @property string $email
 * @property string $password
 * @property bool $is_admin
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @method static where(string $column, string $operator, string $value)
 * @package App\Models
 */
class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password'
    ];

    /*** @return int */
    public function getId(): int
    {
        return $this->id;
    }

    /*** @return string */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return void
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /*** @return string */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return void
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /*** @return bool */
    public function isAdmin(): bool
    {
        return $this->is_admin;
    }

    /**
     * @param bool $isAdmin
     * @return void
     */
    public function setIsAdmin(bool $isAdmin): void
    {
        $this->is_admin = $isAdmin;
    }

    /*** @return Carbon */
    public function getCreatedAt(): Carbon
    {
        return $this->created_at;
    }

    /*** @return Carbon */
    public function getUpdatedAt(): Carbon
    {
        return $this->updated_at;
    }
}
