<?php

namespace SON\Controller;

abstract class Action {

    protected $action;
    protected $view;

    public function __construct() {
        $this->view = new \stdClass();
    }

    protected function render($view, $layout=true) {
        $this->action = $view;
        if($layout==true && file_exists("../App/views/layout.phtml"))
            include_once '../App/views/layout.phtml';
        else
            $this->content($view);
    }

    protected function content() {
        $atual = get_class($this);
        $singleClassName = strtolower(str_replace("App\\Controllers\\", "", $atual));
        include_once '../App/views/' . $singleClassName . '/' . $this->action . '.phtml';
    }

}
