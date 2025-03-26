<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/style.css">
    <title>Новость</title>
</head>

<body>
    <!-- Главное -->
    <div class="main-block">
        <?php include('header.php'); ?>
        <div class="text-navigation">
            <p id="text-nav"><a id="text-nav" href="../index.php">Главная</a> / Новости</p>
            <p id="text-nav-fat">Новости</p>
        </div>
        <div class="filter-year_block">
            <p class="year-block_text">2025 год</p>
            <a class="filter_block" href=""><img src="../img/filter.svg" alt=""></a>
        </div>
        <div class="news_block">
            <div class="news_list">
                <?php include('new-block.php'); ?>
                <?php include('new-block.php'); ?>
                <?php include('new-block.php'); ?>
            </div>
        </div>
        <?php include('questions.php'); ?>
        <?php include('application.php'); ?>
        <?php include('maps.php'); ?>
        <?php include('footer.php'); ?>
    </div>
</body>
<script src="../js/script-main.js"></script>