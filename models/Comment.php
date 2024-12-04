namespace models;
namespace models;
namespace models;
namespace models;
// models/Comment.php
<?php

class Comment
{
    public function getAll()
    {
        return [
            ['id' => 1, 'text' => 'Great post!'],
            ['id' => 2, 'text' => 'Nice work']
        ];
    }
}