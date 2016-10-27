<?php

class Controller {

    private $post;

    private $get;

    public function __constructor() {
     
    }

    public function parse() {
        if (isset($_POST)) {
           $this->post = $_POST;
        }

        if (isset($_GET)) {
           $this->get = $_GET;
        }

	$data = $this->delegate();
        return $data;
    }

    function private delegate(){

	return (object)array(
            'type' => 'post',
            'directory' => '/dir1/dir2/',
            'function' => 'method',
            'parameters' => array(
                              'number' => 3,
                              'page'  => 6,
                              'id'  => 7 ,
                              'l' => 'en'  
                            )
	);
    }

}

