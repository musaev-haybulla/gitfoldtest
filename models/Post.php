namespace models;
namespace models;
namespace models;
// models/Post.php
<?php

class Post
{
    public function getAll()
    {
        return [
            ['id' => 1, 'title' => 'First Post'],
            ['id' => 2, 'title' => 'Second Post']
        ];
    }
}