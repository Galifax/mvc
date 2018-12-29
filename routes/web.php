<?php
use App\Router;
use Controllers\HelloController;

Router::get('hello', function() {
    HelloController::index();
});