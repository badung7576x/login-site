<?php


namespace Modules\Administration\Services;


use Modules\Administration\Repositories\User\UserInterface;

class UserService
{
    protected $userInterface;

    public function __construct(UserInterface $userInterface) {
        $this->userInterface = $userInterface;
    }
}