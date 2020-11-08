<?php
include_once 'vendor/autoload.php';
$obj = new \App\controller\UserController(new \App\repository\UserRepository());
echo $obj->getAll();
?>
