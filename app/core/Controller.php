<?php
namespace App\Core;

class Controller
{
    protected $view;
    protected $session;

    public function __construct()
    {
        $this->view = new View();
        $this->session = new Session();
    }

    public function view($view, $data = [])
    {
        $this->view->render($view, $data);
    }

    public function redirect($url)
    {
        header("Location: $url");
        exit();
    }
}
