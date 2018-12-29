<?php
namespace Controllers;

class Controller {

    public static $layout = 'default';

    public function view ($view) {
        $content = __DIR__ . '/../views/' . $view . '.php';
        require_once __DIR__ . '/../views/layouts/' . self::$layout . '.php';

    }

}