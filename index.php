<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <title>Главная</title>
</head>

<body>
    <!-- Главное -->
    <div class="main-block">
        <?php include('page/header.php'); ?>
        <div class="menu">
            <a href="page/catalog.php" class="сatolog" id="menu--content">
                <p class="text-bm">Каталог</p>
                <img class="img-bm" src="img/book_icon.svg" alt="" />
            </a>
            <a href="page/news.php" class="news" id="menu--content">
                <p class="text-bm">Новости</p>
                <img class="img-bm" src="img/megafon_icon.svg" alt="" />
            </a>
            <a href="page/aboutus.php" class="aboutus" id="menu--content">
                <p class="text-bm">О нас</p>
                <img class="img-bm" src="img/handshake_icon.svg" alt="" />
            </a>
            <a href="#" class="bookmarks" id="menu--content">
                <p class="text-bm">Закладки</p>
                <img class="img-bm" src="img/bookmark_icon.svg" alt="" />
            </a>
            <a href="page/connection.php" class="contacts" id="menu--content">
                <p class="text-bm">Контакты</p>
                <img class="img-bm" src="img/telephon_icon.svg" alt="" />
            </a>
        </div>
        <div class="products-h">
            <?php include('page/products-bench.php'); ?>
            <?php include('page/products-bench.php'); ?>
        </div>
        <p class="text-part" id="text-name_prod">Наши партнеры</p>
        <div class="partners">
            <div class="" id="part-block">
                <img class="partnes-img" src="img/logo-effco.svg" alt="" />
            </div>
            <div class="" id="part-block">
                <img class="partnes-img" src="img/logo-effco.svg" alt="" />
            </div>
            <div class="" id="part-block">
                <img class="partnes-img" src="img/logo-effco.svg" alt="" />
            </div>
        </div>
        <?php include('page/questions.php'); ?>
        <?php include('page/application.php'); ?>
        <?php include('page/maps.php'); ?>
        <?php include('page/footer.php'); ?>
    </div>
</body>
<script src="js/script-main.js"></script>