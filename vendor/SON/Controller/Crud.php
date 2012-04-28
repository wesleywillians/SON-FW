<?php

namespace SON\Controller;

use SON\Di\Container;

trait Crud {

    public function index() {
        $model = Container::getClass($this->model);
        $this->view->objetos = $model->fetchAll();
        $this->render("index");
    }

   public function novo() {
       if(count($_POST)) {
           $model = Container::getClass($this->model);
           $model->save($_POST);
           $this->view->sucesso = true;
       }
       $this->render("novo");
   }
   
   public function edit() {
       $model = Container::getClass($this->model);
       
       if(count($_POST)) {
           $model->save($_POST);
           $this->view->sucesso = true;
       }
       
       if(isset($_GET['id'])) {
           $this->view->artigo = $model->find($_GET['id']);
       }
       
       $this->render("edit");

   }
   
   public function delete() {
       if(isset($_GET['id'])) {
           $model = Container::getClass($this->model);
           $model->delete($_GET['id']);
           $this->render("delete");
       }
   }

}
