<?php


namespace App\Core;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class View
{
    private static $twig = null;

    private static function init()
    {
        if (self::$twig === null) {
            $loader = new FilesystemLoader([
                'admin' => __DIR__ . '/../views/admin',
                'front' => __DIR__ . '/../views/front'
            ]);
            self::$twig = new Environment($loader, [
                "cache" => __DIR__ . "/../../storage/cache/Twig",
                "debug" => true
            ]);
        }
    }

    public static function render($view, $data = [])
    {
        self::init();
        echo self::$twig->render($view . '.twig', $data);
    }
}