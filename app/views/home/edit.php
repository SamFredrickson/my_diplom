<?php if(!isset($_SESSION['user'])) header('Location: admin'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../itnewssite/public/css/admin.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <style>
        
    </style>
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
        <a href="edit" id="edit_link">
            <div class="admin_left_item">
                <img src="../../../itnewssite/public/images/ico/edit.png" alt="">
               <div class="admin_left_item_text">Изменить</div>
            </div>
        </a>
        </div>
        <div class="admin_right">
            <div class="table_wrapper" style="width: 90%; margin: 0 auto; padding-top: 10px;">
                <table id="admin_table" border="1" style="width: 100%; margin-bottom: 20px;">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Option</th>
                    </tr>
                    <?php $this->fill("static_content"); ?>
                </table>
                <table id="admin_table" border="1" style="width: 100%;">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Option</th>
                    </tr>
                    <?php $this->fill("dynamic_content"); ?>
                </table>
            </div>
        </div>
    </section>
    <footer class="admin_footer">
        
    </footer>
    <script src="../../../itnewssite/public/js/ajax_magic.js"></script>
</body>
</html>