<?php

require_once 'init_core.php';

if('POST' != $_SERVER['REQUEST_METHOD']) header("Location: ../../public/index");
else{
    $date    = trim($_POST['date']) . " " . trim($_POST['time']);
    $title   = trim($_POST['title']);
    $image   = trim($_POST['file']);
    $content = trim($_POST['editor']);

    try{

        $db = Database::Connect();
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $q = $db->exec(

            "INSERT INTO dynamic_content (title, image_path, content, post_created)
            VALUES ('$title', '$image', '$content', '$date')
            "
            
        );

    }catch(PDOException $e){
        print "Couldn't insert data: " . $e->getMessage();
    }
}

