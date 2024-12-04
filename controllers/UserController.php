<?php

use models\User;

class UserController {
    private $model;

    public function __construct() {
        require_once 'models/User.php';
        $this->model = new User();
    }

    public function index() {
        $users = $this->model->getAll();
        require 'views/users.php';
    }
}