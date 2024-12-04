// controllers/CommentController.php
<?php

use models\Comment;

class CommentController {
    private $model;

    public function __construct() {
        require_once 'models/Comment.php';
        $this->model = new Comment();
    }

    public function index() {
        $comments = $this->model->getAll();
        require 'views/comments.php';
    }
}