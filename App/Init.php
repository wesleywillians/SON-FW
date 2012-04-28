<?php

namespace App;

use SON\Init\Bootstrap;

class Init extends Bootstrap {

    protected function _initRoutes() {
        $ar['artigo-home'] = ['route' => '/artigos', 'controller' => 'index', 'action' => 'index'];
        $ar['artigo-novo'] = ['route' => '/artigo/novo', 'controller' => 'index', 'action' => 'novo'];
        $ar['artigo-edit'] = ['route' => '/artigo/edit/', 'controller' => 'index', 'action' => 'edit'];
        $ar['artigo-delete'] = ['route' => '/artigo/delete/', 'controller' => 'index', 'action' => 'delete'];
        
        $this->setRoutes($ar);
    }

}