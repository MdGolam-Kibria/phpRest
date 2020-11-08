<?php
//include '../model/UserPojo.php';

interface UserService
{
 function create($tableName,$name,$email,$phone,$password);
 function getAll($tableName);
 function update($id);
 function delete($id);
 function getUserById($id);
}