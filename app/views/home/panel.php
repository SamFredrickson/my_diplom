<?php if(!isset($_SESSION['user'])) header('Location: admin'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../itnewssite/public/css/admin.css">

    <title>Админ-панель</title>
</head>
<body>
    <header class="admin_header">
        <div class="admin-header-title">Admin Panel</div>
    </header>
    <section class="admin_content">
        <div class="admin_left">
            <a href="index">
            <div class="admin_left_item">
                <img src="../../../itnewssite/public/images/ico/home.png" alt="">
               <div class="admin_left_item_text">Главная</div>
            </div>
        </a>
        <a href="add">
            <div class="admin_left_item">
                <img src="../../../itnewssite/public/images/ico/plus.png" alt="">
               <div class="admin_left_item_text">Добавить</div>
            </div>
        </a>
        <a href="edit">
            <div class="admin_left_item">
                <img src="../../../itnewssite/public/images/ico/edit.png" alt="">
               <div class="admin_left_item_text">Изменить</div>
            </div>
        </a>
        </div>
        <div class="admin_right" style="height: 100vh;">
            <div class="admin_welcome">
                Добро пожаловать в административную панель сайта. <br> Выберите необходимую опцию слева.
            </div>
        </div>
    </section>
</body>
</html>