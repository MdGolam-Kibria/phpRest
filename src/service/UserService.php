<?php

namespace App\service;
interface UserService
{
 function create($tableName,$name,$email,$phone,$password);
 function getAll();
 function update($id);
 function delete($id);
 function getUserById($id);
}