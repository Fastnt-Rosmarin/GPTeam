<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/style.css">
    <title>Каталог</title>
</head>

<body>
    <!-- Главное -->
    <div class="main-block">
        <?php include('header.php'); ?>
        <div class="catalog_adap">
            <div class="text-navigation">
                <p id="text-nav"><a id="text-nav" href="../index.php">Главная</a> / Каталог</p>
                <p id="text-nav-fat">Каталог товаров</p>
            </div>
            <div class="button-block_catalog">
                <button class="catalog-button_product active" id="materials-button">Материалы</button>
                <button class="catalog-button_product" id="equipment-button">Оборудование</button>
                <button class="catalog-button_product" id="tehnologe-button">Технология</button>
            </div>
            
            <?php include('nothing_found.php'); ?> <!-- Блок "Ничего не найдена" -->
            <?php include('application.php'); ?>
            <?php include('maps.php'); ?>
            <?php include('footer.php'); ?>
        </div>
</body>
<script src="../js/script-main.js"></script>