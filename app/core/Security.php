<?php
namespace App\Core;

class Security
{
    public function protectCSRF()
    {
        if (!isset($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }
        return $_SESSION['csrf_token'];
    }

    public function validateCSRF($token)
    {
        return hash_equals($_SESSION['csrf_token'], $token);
    }

    public function protectXSS($data)
    {
        return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    }

    public function protectSQLInjection($query)
    {
        return $query; 
    }
}
