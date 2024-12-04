<?php
require_once 'controllers/UserController.php';
require_once 'controllers/PostController.php';
require_once 'controllers/CommentController.php';

$route = $_GET['route'] ?? 'users';

switch($route) {
    case 'users':
        $controller = new UserController();
        break;
    case 'posts':
        $controller = new PostController();
        break;
    case 'comments':
        $controller = new CommentController();
        break;
}

$controller->index();