<?php

class Controller
{
    public function view($path){
        require_once '../app/views/' . $path . '.php';
    }

    public function model($model){
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }
}