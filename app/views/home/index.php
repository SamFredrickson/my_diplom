<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../itnewssite/public/css/style.css">
    <link rel="stylesheet" href="../../../itnewssite/public/css/media.css">
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
   <section class="main-content-section">
        <div class="main-content-static">
            <div class="left-info-part">
                <div class="left-info-part-first" id="<?php print $data[0][0]; ?>" dt="static_content">
                    <div class="left-info-part-first-title">
                        <?php print $data[0][1]; ?>                       
                    </div>
                    <div class="left-info-part-first-pic">
                        <img src="../../../itnewssite/public/images/posts/<?php print $data[0][2]; ?>" alt="">
                    </div>
                </div>
                <div class="left-info-part-second">
                    <div class="left-info-part-block" id="<?php print $data[1][0]; ?>" dt="static_content">
                        <div class="left-info-part-block-title" id="228"><?php print $data[1][1]; ?></div>
                        <div class="left-info-part-block-pic"><img src="../../../itnewssite/public/images/posts/<?php print $data[1][2]; ?>" alt=""></div>
                    </div>
                    <div class="left-info-part-block" id="<?php print $data[2][0]; ?>" dt="static_content">
                        <div class="left-info-part-block-title"><?php print $data[2][1]; ?></div>
                        <div class="left-info-part-block-pic"><img src="../../../itnewssite/public/images/posts/<?php print $data[2][2]; ?>" alt=""></div>
                    </div>
                    <div class="left-info-part-block" id="<?php print $data[3][0]; ?>" dt="static_content">
                        <div class="left-info-part-block-title"><?php print $data[3][1]; ?></div>
                        <div class="left-info-part-block-pic"><img src="../../../itnewssite/public/images/posts/<?php print $data[3][2]; ?>" alt=""></div>
                    </div>
                </div>
            </div>
            <div class="right-info-part"></div>
        </div>
   </section>
   <section class="main-section-dynamic">
       <div class="main-section-dynamic-content">
           <div class="left_part">
                <div class="main-section-currency">
                    <div class="main-section-currency-content">
                        <div class="currency_title">USD</div>
                        <div class="currency_value"><?php print $currency_info['usd'] . '₽'; ?></div>
                    </div>
                </div>
                <div class="main-section-currency">
                  <div class="main-section-currency-content">
                        <div class="currency_title">EUR</div>
                        <div class="currency_value"><?php print $currency_info['euro'] . '₽'; ?></div>
                    </div>
                 </div>
           </div>
           <div class="middle_part">
               <?php $this->display(); ?>
           </div>
       </div>
       <div class="main-section-dynamic-show-more">
           Показать ещё
       </div>
   </section>
    <script src="../../../itnewssite/public/js/index.js"></script>
    <script src="../../../itnewssite/public/js/ajax_magic.js"></script></body>
</html>