<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articleModel = new Article();
        $articles = $articleModel->getAllArticles();
        $this->view('index', ['articles' => $articles]);
    }
}
