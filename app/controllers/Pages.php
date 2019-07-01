<?php


class Pages extends  Controller {
    public function __construct(){
    }

    public function index(){
        $this->view('hello');

    }

    public function about($id = NULL){
        if($id != NULL)
            echo $id;
        else echo "fu";
    }
}