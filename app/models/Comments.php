<?php

use Phalcon\Mvc\Model;

class Comments extends Model
{
    public $id;
    public $post_id;
    public $username;
    public $content;
}
