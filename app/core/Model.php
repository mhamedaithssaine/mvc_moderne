<?php
namespace App\Core;

use App\Core\Database;

class Model
{
    protected $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }
    public function createUser($username, $email, $password)
{
    $db = Database::getInstance();
    $stmt = $db->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
    return $stmt->execute([
        ':username' => $username,
        ':email' => $email,
        ':password' => $password
    ]);
}
}
