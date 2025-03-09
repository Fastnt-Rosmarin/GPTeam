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
        <?php include('page/header.php'); ?>
        <div class="text-navigation">
            <p id="text-nav"><a id="text-nav" href="../index.php">Главная /</a><a id="text-nav" href="news.php"> Новости</a> / Статься</p>
            <p id="text-nav-fat">Новый ввоз станков!</p>
        </div>
        <div class="item_block">
            <img src="../uploads/image%20129.png" alt="">
            <div class="item-info_block">
                <div class="item-text_block">
                    <p class="text-info_item">В нашей компании появился новый товар, а именно станки DS 250! Станок универсальный, качественный и имеет полуавтоматическую систему покраса. Такое оборудование подойдёт для тех клиентов, кому нужно покрасить металлические конструкции
                        и мелкие детали. Станок работает по схеме окунания в цетрифугу. </p>
                    <p class="text-info_item">Станок с высокой загрузкой деталей, с наклоном “NA”. Грузоподъёмность от 5 до 8 кг. Пневматический цилиндр, полуавтоматический. Вес такой машины 350 кг. Управление простое и облегчённое, так что справится со станком сможет каждый!</p>
                    <p class="text-info_item">Такую модель можно приобрести по скидке, если позвонить нам в течении двух недель. Надёжные и качественные станки уже в нашем интернет магазине!</p>
                </div>
                <div class="item-date_block">
                    <p class="date-item">12.01.25</p>
                    <img src="../uploads/bookmarks-ser.svg" alt="">
                </div>
            </div>
        </div>
        <div class="news_block">
            <p class="other-news_text">Другие новости</p>
            <div class="news_list">
                <?php include('page/new-block.php'); ?>
                <?php include('page/new-block.php'); ?>
                <?php include('page/new-block.php'); ?>
            </div>
        </div>
        <?php include('page/application.php'); ?>
        <?php include('page/maps.php'); ?>
        <?php include('page/footer.php'); ?>
    </div>
</body>
<script src="../js/script-main.js"></script>