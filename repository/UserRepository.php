<?php
include '../util/DatabaseUtil.php';
include '../connection/DatabaseConnection.php';
include '../service/UserService.php';

class UserRepository implements UserService
{
    public function insertData($tableName, $name, $email, $phone, $password)
    {
        $sql = "INSERT INTO $tableName(name,email,phone,password) VALUES ($name,$email,$phone,$password)";

        $startQuery = mysqli_query(new DatabaseConnection(DatabaseUtil::$serverName, DatabaseUtil::$userName, DatabaseUtil::$password, DatabaseUtil::$dbName), $sql);

        if (mysqli_connect_errno()) {
            return null;
        }

        if ($startQuery) {
            return $startQuery;
        }
    }

    public function getAll($tableName){
       $sql = "SELECT * FROM $tableName";
       $startQuery = mysqli_query(new DatabaseConnection(DatabaseUtil::$serverName,DatabaseUtil::$userName,DatabaseUtil::$password,DatabaseUtil::$dbName),$sql);
       if (mysqli_num_rows($startQuery)>0){
           $rows = array();
           while ($data = mysqli_fetch_assoc($startQuery)){
               $rows['content'][] = $data;
           }
           return $rows;
       }
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