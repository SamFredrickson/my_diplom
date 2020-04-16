<?php if("POST" != $_SERVER['REQUEST_METHOD']) header("Location: edit"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../itnewssite/public/css/admin.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

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
        <div class="admin_right">
                <div class="admin_right_content">

                    <span id="update_id" style="display:none;"><?php print $_POST['id'] ?></span>
                    <span id="update_table" style="display:none;"><?php print $_POST['table'] ?></span>

                    <div class="admin_right_date">
                        <input type="text" id='date' name="date" value=<?php print $_POST['date']; ?>>
                        <input type="text" id='time' name="time" value=<?php print $_POST['time'] ?>>
                    </div>
                    <div class="admin_right_title">
                        <textarea type="text" id="title" name="title"><?php print $_POST['title']; ?></textarea>
                    </div>
                    <div class="admin_right_img">
                        <input name="myFile" type="file" id="file" value=<?php print $_POST['img']; ?>>
                    </div>
                    <div class="editor_container">
                        <div id="toolbar-container"></div>
                        <div id="editor" name='editor'><?php print $_POST['content']; ?></div>
                    </div>
                    <div class="admin_right_btn">
                        <input type="submit" id="update_admin" value="Обновить" name="update_admin">
                    </div>
                </div>
        </div>
    </section>

    <script src="https://cdn.ckeditor.com/ckeditor5/18.0.0/decoupled-document/ckeditor.js"></script>
<script>
 DecoupledEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                const toolbarContainer = document.querySelector( '#toolbar-container' );

                toolbarContainer.appendChild( editor.ui.view.toolbar.element );
            } )
            .catch( error => {
                console.error( error );
            } );
</script>
    <script src="../../../itnewssite/public/js/ajax_magic.js"></script>
    <footer class="admin_footer">
        
    </footer>
</body>
</html>