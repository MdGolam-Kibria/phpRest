<?php
include 'UserController.php';
include '../repository/UserRepository.php';

$obj = new UserController(new UserRepository());
echo $obj->getAll();
?>
