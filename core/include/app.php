<?php

class App {

    private $view;
    private $template;

    public __constructor($template, $view) {
        $this->template = $template;
        $this->view = $view;
    }

    public function run($data) {
       
       $view->display(); 
    }
}
