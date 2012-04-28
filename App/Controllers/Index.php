<?php

namespace App\Controllers;

use SON\Controller\Action,
    SON\Controller\Crud,
    SON\Di\Container;

class Index extends Action {
    use Crud;
    protected $model = "article";
}