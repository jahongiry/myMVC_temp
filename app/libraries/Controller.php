<?php
//This is base Controller Loads Models and Views

class Controller{
    //Load model
    public function model($model) {
        //Load model
        require_once "../app/models/" . $model . ".php";
        return new $model();
    }

    //Load View
    public function view($view, $data=[]){
        if(file_exists("../app/views/" . $view . ".php")) {
            require_once "../app/views/" . $view . ".php";
        } else {
            die("View does not exists");
        }
    }
}
