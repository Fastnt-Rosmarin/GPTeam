<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/style.css">
    <title>Статься</title>
</head>

<body>
    <!-- Главное -->
    <div class="main-block">
        <div class="header">
            <div class="head-block">
                <a href="tel:8 927 211 66 50">
                    <p class="number-text">8 927 211 66</p>
                </a>
                <img class="logo" src="../uploads/logo.svg" alt="" />
                <a href="" id="swap-menu">
                    <img class="" src="../uploads/menu.svg" alt="" />
                </a>
            </div>
            <div class="search">
                <div class="sear-block">
                    <img class="sear-img" src="../uploads/magnifier.svg" alt="" />
                    <input class="search-engine" id="" type="search" placeholder="Поиск по сайту">
                </div>
                <a class="location" href="">
                    <img class="locat-img" src="../uploads/cursor.svg" alt="" />
                    <p class="loca-city_text">Тольятти</p>
                </a>
            </div>
        </div>
        <div class="text-navigation">
            <p id="text-nav"><a id="text-nav" href="../index.php">Главная</a> / Личный кабинет</p>
        </div>
        <div class="personal-block">
            <div class="personal-cont_left">
                <div class="personal-user_photo">
                    <img src="../uploads/user.svg" alt="">
                </div>
                <div class="user-states_block">
                    <p class="user-text">Романов Вадим Владиславович</p>
                    <p class="states-text">Пользователь</p>
                </div>
            </div>
            <a class="personal-cont-right" href="">
                <img src="../uploads/paint.svg" alt="">
            </a>
        </div>
        <div class="personal-settings">
            <p class="personal-settings_text">Настройки</p>
            <div class="personal-parameters_block">
                <p class="parameters-text">Рассылки новостей на почту</p>
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider"></span>
                </label>
            </div>
            <div class="personal-parameters_block">
                <p class="parameters-text">Рассылки новых товаров</p>
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider"></span>
                </label>
            </div>
        </div>
        <div class="sorting-filter_block">
            <p class="sorting-filter_text">Сортировка закладок</p>
            <a class="sorting_block" href=""><img src="../uploads/filter.svg" alt=""></a>
        </div>
        <div class="save-goods_block">
            <img src="../uploads/bookmark_darkblue.svg" alt="">
            <p class="save-goods_text">Сортировка закладок</p>
        </div>
        <div class="save-products_block">
            <div class="save_list_block">
                <div class="prod-maping_block">
                    <?php include('products-bench.php'); ?>
                </div>
                <div class="prod-maping_block">
                    <?php include('products-coating.php'); ?>
                </div>
                <div class="prod-maping_block">
                    <?php include('products-coating.php'); ?>
                </div>
                <div class="prod-maping_block">
                    <?php include('products-bench.php'); ?>
                </div>
            </div>
        </div>
        <div class="save-paper_block">
            <div class="save-articles_block">
                <img src="../uploads/bookmark_darkblue.svg" alt="">
                <p class="save-articles_text">Сохранённые статьи</p>
            </div>
            <div class="save_list_block">
                <?php include('new-block.php'); ?>
                <?php include('new-block.php'); ?>
                <?php include('new-block.php'); ?>
            </div>
        </div>
        <?php include('application.php'); ?>
        <?php include('maps.php'); ?>
        <?php include('footer.php'); ?>
    </div>
</body>
<script src="../js/script-main.js"></script>