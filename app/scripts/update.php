<?php

require_once 'init_core.php';

if('POST' != $_SERVER['REQUEST_METHOD']) header("Location: ../../public/index");
else{
   
    $table = trim($_POST['table']);
    $id    = trim($_POST['id']);
    $title = trim($_POST['title']);
    $img = trim($_POST['img']);
    $content = trim($_POST['content']);
    $date = trim($_POST['date']) . " " . trim($_POST['time']);

    try{

        $db = Database::Connect();
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->exec(
            "UPDATE $table SET title = '$title', image_path = '$img', content = '$content', post_created = '$date' WHERE id = $id"
        );

    }catch(PDOException $e){
        print "Couldn't update data: " . $e->getMessage();
    }
}

