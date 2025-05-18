<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/style.css">
    <title>Редактирование</title>
</head>

<body>
    <div class="main-block">
        <div class="creation-news_block">
            <input type="text" placeholder="Заголовок ..." id="creation-title-news_input">
            <a type="button" class="creation-news-picture_block">
                +
            </a>
            <textarea placeholder="Напишите текст ..." id="creation-text_news"></textarea>
            <div class="creation-button_block">
                <button class="creation-prepared-button" id="button-save" type="button">Готово</button>
                <a class="creation-cancellation-button" href="item.php">Отмена</a>
                <?php include('admin-popup_forms.php'); ?>
            </div>
        </div>
    </div>
</body>
<script src="../js/script-main.js"></script>