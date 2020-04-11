<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../itnewssite/public/css/style.css">
    <link rel="stylesheet" href="../../../itnewssite/public/css/media_search.css">
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

    <section class="main-content-section-search">
        <div class="main-content-section-search-wrapper">
            <div class="first_part_search">
                <div class="first-part-search-field">
                    <form action="search" id="search-form" method="post">
                        <input type="text" placeholder="Поиск" name='search_text'id="search-form-text">
                        <img src="../../../itnewssite/public/images/search_button.png" id="search_button" alt="">
                    </form>
                </div>
                <div><?php $this->search_posts(); ?></div>
            </div>
            <div class="second_part_search"></div>
        </div>
   </section>
    <script src="../../../itnewssite/public/js/index.js"></script>
    <script src="../../../itnewssite/public/js/ajax_magic.js"></script></body>
</html>