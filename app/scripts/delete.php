<?php

require_once 'init_core.php';

if('POST' != $_SERVER['REQUEST_METHOD']) header("Location: ../../public/index");
else{
   
    $table = trim($_POST['table']);
    $id    = trim($_POST['id']);

    try{

        $db = Database::Connect();
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $q = $db->exec(
            "DELETE FROM $table WHERE id = $id"
        );

    }catch(PDOException $e){
        print "Couldn't delete data: " . $e->getMessage();
    }
}

