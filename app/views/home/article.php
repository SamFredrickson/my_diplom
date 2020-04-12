<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../itnewssite/public/css/style.css">
    <link rel="stylesheet" href="../../../itnewssite/public/css/media_article.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <title>ITNews</title>
</head>
<body>   
<header>
        <div class="header-block">
            <div class="header-block-inside">
                <a href="index">
                <div class="header-block-inside-logo">
                    <div class="header-block-inside-logo-text">ITNEWS</div>  
                </div>
                </a>
                <div class="header-block-inside-logo-search">
                    <div class="logo-pic"><img src="../../../itnewssite/public/images/search.png" width="18px" alt=""></div>
                    <div class="search-text"><a href="search">Поиск</a></div>
                </div>
            </div>
        </div>
    </header>

    <section class="main-content-section-article">
        <div class="main-content-section-article-wrapper">
            <div class="first_part_search">
                <div class="first_part_search_wrapper">
                   <div class="first_part_search_wrapper_text">
                        <div class="first-part-date"><?php print $data[0][4]; ?></div>
                        <div class="first-part-title"><?php print $data[0][1]; ?></div>
                   </div>
                </div>
                <div class="first_part_search_wrapper-image">
                    <div class="first-part-image">
                        <img src="../../../itnewssite/public/images/posts/<?php print $data[0][2]; ?>" alt="">
                    </div>
                    <div class="first-part-content">
                          <?php $this->display_content($data[0][3]); ?>                   
                    </div>
            </div>
            <div class="second_part_search"></div>
        </div>
   </section>
    <script src="../../../itnewssite/public/js/index.js"></script>
    <script src="../../../itnewssite/public/js/ajax_magic.js"></script></body>
</html>