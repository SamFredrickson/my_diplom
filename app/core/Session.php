<?php

class Session{
    public function __construct(){
        session_start();
    }

    public function redirect(){
        header("Location: index");
    }

    public function login(){
        if(!isset($_SESSION['user'])){
            $_SESSION['user'] = 'admin';
            header("Location: panel");
        }
    }
}

$session = new Session();