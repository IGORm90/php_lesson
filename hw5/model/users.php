<?php

    function usersOne(string $login) : ?array{
        $sql = "SELECT id_user, password FROM users WHERE login=:login";
        $query = dbQuery($sql, ['login' => $login]);
        $user = $query->fetch();
        return  $user === false ? null : $user;
    }

    function usersId(string $id) : ?array{
        $sql = "SELECT id_user, login, email, name FROM users WHERE id_user=:id";
        $query = dbQuery($sql, ['id' => $id]);
        $user = $query->fetch();
        return  $user === false ? null : $user;
    }

    function createUser(array $fields) :bool{
        $sql = "INSERT users (login, password, email, name) VALUES (:login, :password, :email, :name)";
        dbQuery($sql, $fields);
        return true;
    }

?>