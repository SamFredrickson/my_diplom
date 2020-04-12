<?php

class Database{

    public static function Connect(){
        return new PDO('mysql:host='.HOST.';dbname='.DBNAME.';charset=utf8', LOGIN, PASSWORD);
    }
}