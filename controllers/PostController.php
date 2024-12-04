// controllers/PostController.php
<?php

use models\Post;

class PostController {
    private $model;

    public function __construct() {
        require_once 'models/Post.php';
        $this->model = new Post();
    }

    public function index() {
        $posts = $this->model->getAll();
        require 'views/posts.php';
    }
}
