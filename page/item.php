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
        <?php include('header.php'); ?>
        <div class="item_adap">
            <div class="text-navigation">
                <p id="text-nav"><a id="text-nav" href="../index.php">Главная /</a><a id="text-nav" href="news.php"> Новости</a> / Статься</p>
                <p id="text-nav-fat">Новый ввоз станков!</p>
                <?php include('admin-popup_forms.php'); ?>
                <div class="admin-item-edit_block admin_mode">
                    <button class="editor_block" id="editor_button">
                        <img src="../img/pencil.svg" alt="" class="">
                    </button>
                    <div class="admin-menu-editor_block">
                        <a class="redactor_block" id="redactor_button" href="editing-news.php">
                            <img src="../img/blue-pencil.svg" alt="" class="redactor-img">
                            <p class="redactor-text">Редактировать</p>
                        </a>
                        <button class="delite_block" id="delite_button">
                            <img src="../img/delite.svg" alt="" class="delite-img">
                            <p class="delite-text">Удалить</p>
                        </button>
                    </div>
                </div>
            </div>
            <div class="item_block">
                <img class="item-imt_block" src="../img/image%20129.png" alt="">
                <div class="item-info_block">
                    <div class="item-text_block">
                        <p class="text-info_item">В нашей компании появился новый товар, а именно станки DS 250! Станок универсальный, качественный и имеет полуавтоматическую систему покраса. Такое оборудование подойдёт для тех клиентов, кому нужно покрасить металлические конструкции
                            и мелкие детали. Станок работает по схеме окунания в цетрифугу. </p>
                        <p class="text-info_item">Станок с высокой загрузкой деталей, с наклоном “NA”. Грузоподъёмность от 5 до 8 кг. Пневматический цилиндр, полуавтоматический. Вес такой машины 350 кг. Управление простое и облегчённое, так что справится со станком сможет каждый!</p>
                        <p class="text-info_item">Такую модель можно приобрести по скидке, если позвонить нам в течении двух недель. Надёжные и качественные станки уже в нашем интернет магазине!</p>
                    </div>
                    <div class="item-date_block">
                        <p class="date-item">12.01.25</p>
                        <img src="../img/bookmarks-ser.svg" alt="" class="bookmarks-img">
                    </div>
                    <div class="admin-adding-products-block admin_mode">
                        <a class="admin-button_adding" id="adding-button" href="creation-news.php">
                            <img src="../img/plus-admin_icon.svg" alt="" class="plus-img">
                            <p class="adding-prod_text">
                                Добавить статью
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="news_block">
            <p class="other-news_text">Другие новости</p>
            <div class="news_list">
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