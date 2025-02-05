<?php
namespace App\Core;

use App\Models\User;

class Auth
{
    public function login($username, $password)
    {
        $userModel = new User();
        $user = $userModel->getUserByUsername($username);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            return true;
        }
        return false;
    }

    public function logout()
    {
        session_destroy();
        header("Location: /login");
        exit();
    }

    public function isLoggedIn()
    {
        return isset($_SESSION['user_id']);
    }

    public function getUser()
    {
        if ($this->isLoggedIn()) {
            return ['id' => $_SESSION['user_id'], 'username' => $_SESSION['username']];
        }
        return null;
    }
}
