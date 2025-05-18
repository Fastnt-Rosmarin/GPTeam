<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/style.css">
    <title>Личный кабинет</title>
</head>

<body>
    <!-- Главное -->
    <div class="main-block">
        <?php include('header-waf.php'); ?>
        <div class="personal_adap">
            <div class="text-navigation">
                <p id="text-nav"><a id="text-nav" href="../index.php">Главная</a> / Личный кабинет</p>
            </div>
            <div class="personal-block">
                <div class="personal-cont_left">
                    <div class="personal-user_photo">
                        <img src="../img/user.svg" alt="">
                    </div>
                    <div class="user-states_block">
                        <p class="user-text">Романов Вадим Владиславович</p>
                        <p class="states-text">Пользователь</p>
                    </div>
                </div>
                <a class="personal-cont-right" href="">
                    <img src="../img/paint.svg" alt="">
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
                    <p class="parameters-text custom-newsletter">Рассылки новых товаров</p>
                    <p class="parameters-text admin-newsletter">Удалять уведомления с пометкой “Отклонено” каждый месяц</p>
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider"></span>
                    </label>
                </div>
            </div>
            <div class="admin-notification_block">
                <p class="admin-nothification_text">Уведомления</p>
                <button class="admin-sorting_block" href="#" id="button-sorting"><img src="../img/filter.svg" alt=""></button>
            </div>
            <div class="sorting-filter_block">
                <p class="sorting-filter_text">Сортировка закладок</p>
                <button class="sorting_block" href="#" id="button-sorting"><img src="../img/filter.svg" alt=""></button>
            </div>
            <div class="sorting-popup_goods">
                <div class="sort-form_goods">
                    <div class="sort-top_form">
                        <p class="sort-text_goods">
                            Выберете товар
                        </p>
                        <button id="clous_sort" href="#"><img class="clous-city" src="../img/cross-grey.svg" alt="" /></button>
                    </div>
                    <div class="sort-bottom_form">
                        <a href="#" class="sort-bottom_text" id="">Показать всё</a>
                        <a href="#" class="sort-bottom_text" id="">Материалы</a>
                        <a href="#" class="sort-bottom_text" id="">Оборудование</a>
                    </div>
                </div>
            </div>
            <div class="save-goods_block">
                <img src="../img/bookmark_darkblue.svg" alt="">
                <p class="save-goods_text">Сохраненный товары</p>
            </div>
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
        <div class="adap-sorting-filter_block">
            <div class="sorting-filter_block">
                <p class="sorting-filter_text">Сортировка закладок</p>
                <button class="sorting_block" href="#" id="button-sort_year"><img src="../img/filter.svg" alt=""></button>
            </div>
        </div>
        <?php include('popup_year.php'); ?>
        <div class="save-paper_block">
            <div class="save-articles_block">
                <img src="../img/bookmark_darkblue.svg" alt="">
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