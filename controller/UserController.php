<?php
include '../service/UserService.php';

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