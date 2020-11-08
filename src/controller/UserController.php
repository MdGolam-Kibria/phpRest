<?php

namespace App\controller;
use App\service\UserService;

class UserController
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function getAll()
    {
        return $this->userService->getAll();
    }

}