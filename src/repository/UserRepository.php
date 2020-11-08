<?php

namespace App\repository;
use App\connection\DatabaseConnection;
use App\service\UserService;
use App\util\DatabaseUtil;

class UserRepository implements UserService
{
    public function insertData($tableName, $name, $email, $phone, $password)
    {

    }

    public function getAll(){
       $sql = "SELECT * FROM departments";
       $stmt=DatabaseConnection::myQuery($sql);
       $stmt->execute();
       $lists=$stmt->fetchAll(\PDO::FETCH_ASSOC);
       return json_encode($lists);
    }

    function create($tableName, $name, $email, $phone, $password)
    {
        // TODO: Implement create() method.
    }

    function update($id)
    {
        // TODO: Implement update() method.
    }

    function delete($id)
    {
        // TODO: Implement delete() method.
    }

    function getUserById($id)
    {
        // TODO: Implement getUserById() method.
    }
}