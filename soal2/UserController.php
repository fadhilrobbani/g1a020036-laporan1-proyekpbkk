<?php

namespace Controller;

use Model\User;

class UserController
{
    public static function getUsers()
    {
        return [
            new User('fadhil', 'password'),
            new User('patrick', 'star'),
            new User('squidwood', 'tenpoles')
        ];
    }

    public static function login()
    {
        $users = self::getUsers();
        foreach ($users as $user) {
            if ($_POST['username'] == $user->username && $_POST['password'] == $user->password) {
                $_SESSION['user'] = $user->username;
                $_SESSION['message'] = 'login success';

                header('Location: /home.php');
                exit();
            } else {
                $_SESSION['message'] = 'login failed';
            }
        }
    }

    public static function logout()
    {
        session_start();
        session_destroy();

        header('Location: index.php');
        exit();
    }
}
