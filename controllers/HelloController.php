<?php
namespace Controllers;

use Controllers\Controller;

class HelloController extends Controller {

    public function index() {
        self::view('hello');
    }
}