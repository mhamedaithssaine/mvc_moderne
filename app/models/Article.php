<?php
namespace App\Models;

use App\Core\Model;

class Article extends Model
{
    public function getAllArticles()
    {
        $stmt = $this->db->query('SELECT * FROM articles');
        return $stmt->fetchAll();
    }
}
