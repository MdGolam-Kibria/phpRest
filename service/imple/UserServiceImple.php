<?php
include '../../repository/UserRepository.php';
include '../UserService.php';

class UserServiceImple implements UserService
{
    function create($tableName, $name, $email, $phone, $password)
    {
        $repo = new UserRepository();
        $repo->insertData($tableName, $email, $phone, $password);
        if (is_null($repo)) {
            return '{"code":"4000","message":"null"}';
        }
        echo '{"code":"200","message":"Data Inserted"}';
    }

    function getAll($tableName)
    {
        $repo = new UserRepository();
        echo json_encode($repo->getAll($tableName));
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