<?php

class Database{

    public static function Connect(){
        return new PDO('mysql:host='.HOST.';dbname='.DBNAME, LOGIN, PASSWORD);
    }
}