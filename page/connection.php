<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/style.css">
    <title>О нас</title>
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
        <?php include('page/application.php'); ?>
        <?php include('page/maps.php'); ?>
        <?php include('page/footer.php'); ?>
    </div>
</body>
<script src="../js/script-main.js"></script>