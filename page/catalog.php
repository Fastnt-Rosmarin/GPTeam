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
        <div class="text-navigation">
            <p id="text-nav"><a id="text-nav" href="../index.php">Главная</a> / Каталог</p>
            <p id="text-nav-fat">Каталог товаров</p>
        </div>
        <div class="products-v">
            <div class="text-category">
                <img class="categ-img" src="../img/stanoc.svg" alt="" />
                <p class="text-cat">Станки</p>
            </div>
            <?php include('products-bench.php'); ?>
            <?php include('products-bench.php'); ?>
            <?php include('products-bench.php'); ?>
            <?php include('products-bench.php'); ?>
            <div class="products-block_bench">
                <?php include('products-bench.php'); ?>
                <?php include('products-bench.php'); ?>
                <?php include('products-bench.php'); ?>
                <?php include('products-bench.php'); ?>
            </div>
            <div class="arrow-block">
                <button class="button-arrow_img" id="button-arrow"><img class="arrow-img" src="../img/arrow.svg" alt="" /></button>
            </div>
        </div>
        <div class="products-v_pocr">
            <div class="text-category_pocr">
                <img class="categ-img" src="../img/pocritio.svg" alt="" />
                <p class="text-cat">Покрытие</p>
            </div>
            <?php include('products-coating.php'); ?>
            <?php include('products-coating.php'); ?>
            <?php include('products-coating.php'); ?>
            <?php include('products-coating.php'); ?>
        </div>
        <?php include('application.php'); ?>
        <?php include('maps.php'); ?>
        <?php include('footer.php'); ?>
    </div>
</body>
<script src="../js/script-main.js"></script>