<?php

namespace Blog;

use User\User as Test;

/**
 * BlogPost
 */
class Post implements PostInterface
{
    public $title;
    public $user;

    function __construct()
    {
        $this->user = new Test();
    }
}
