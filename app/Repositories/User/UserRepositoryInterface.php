<?php
namespace App\Repositories\UserRepository;

use App\Repositories\RepositoryInterface;

interface UserRepositoryInterface extends RepositoryInterface
{
    public function getUser();
}
