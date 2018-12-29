<?php
namespace App;

class Router {

    public function get($url, $function) {
        if ($url == $_GET['url']) {
            $function->__invoke();
        } else {
            require_once __DIR__ . '/../views/404.php';
        }
    }

}