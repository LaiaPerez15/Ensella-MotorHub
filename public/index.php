<?php
// Autoload manual for simplicity in this first delivery
require_once '../config/Database.php';
require_once '../models/Post.php';
require_once '../models/User.php';
require_once '../models/Comment.php';
require_once '../controllers/PostController.php';
require_once '../controllers/UserController.php';

// Basic Router
$url = $_GET['url'] ?? 'home';
$url = rtrim($url, '/');
$url = explode('/', $url);

// Routes
if ($url[0] == 'home' || $url[0] == '') {
    $controller = new PostController();
    $controller->index();
} elseif ($url[0] == 'post' && isset($url[1])) {
    $controller = new PostController();
    $controller->show($url[1]);
} elseif ($url[0] == 'register') {
    $controller = new UserController();
    $controller->register();
} elseif ($url[0] == 'login') {
    $controller = new UserController();
    $controller->login();
} elseif ($url[0] == 'logout') {
    $controller = new UserController();
    $controller->logout();
} else {
    echo "<h1>404 - Página no encontrada</h1>";
}
