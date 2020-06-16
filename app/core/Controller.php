<?php

class Controller
{
    protected function view($path){
        require_once '../app/views/' . $path . '.php';
    }

    protected function model($model){
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }
}