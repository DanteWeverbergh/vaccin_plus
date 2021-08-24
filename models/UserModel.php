<?php

class User {

    public static function getById($user_id) {

        global $db;

        $sql = 'SELECT * FROM user
                WHERE user_id = :user_id';
        $sql_statement = $db->prepare($sql);
        $sql_statement->execute([
            ':user_id' => $user_id,
        ]);

        return $sql_statement->fetchObject();

    }


    public static function getByEmail($email) {
        global $db;

        $sql = 'SELECT * FROM user
                WHERE email = :email';
        
        $sql_statement = $db->prepare($sql);
        $sql_statement->execute([
            ':email' => $email,
        ]);

        return $sql_statement->fetchObject();
    }

    public static function login($email, $password) {

        $user = self::getByEmail($email);

        if($user && password_verify($password, $user->password)) {
            return $user;
        }

        return false;
    } 
}