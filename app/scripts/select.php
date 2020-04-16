<?php

require_once 'init_core.php';

if('POST' != $_SERVER['REQUEST_METHOD']) header("Location: ../../public/index");
else{
   
    $id = trim($_POST['id']);
    $table = trim($_POST['table']);

    try{

        $db = Database::Connect();
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $q = $db->query("SELECT * FROM $table where id = $id");

        while($row = $q->fetch()) {
            echo json_encode(array('id' => $id, 'table' => $table ,'title' => $row["title"], 'img' => $row["image_path"], 'content' => $row['content'], 'date' => $row['post_created']));
        }

    }catch(PDOException $e){
        print "Couldn't delete data: " . $e->getMessage();
    }
}

