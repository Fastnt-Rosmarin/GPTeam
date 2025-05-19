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
        <div class="edit-news_block">
            <p class="edit-name-news-text">Новый ввоз станков!</p>
            <img src="../img/image%20129.png" alt="" class="edit-news-img">
            <div class="edit-info-news-block">
                <p class="edit-info-news-text">
                    В нашей компании появился новый товар, а именно станки DS 250!Станок универсальный, качественный и имеет полуавтоматическую систему покраса. Такое оборудование подойдёт для тех клиентов, кому нужно покрасить металлические конструкции и мелкие детали. Станок работает по схеме окунания в цетрифугу.
                </p>
                <p class="edit-info-news-text">
                    Станок с высокой загрузкой деталей, с наклоном “NA”. Грузоподъёмность от 5 до 8 кг. Пневматический цилиндр, полуавтоматический. Вес такой машины 350 кг. Управление простое и облегчённое, так что справится со станком сможет каждый!
                </p>
                <p class="edit-info-news-text">
                    Такую модель можно приобрести по скидке, если позвонить нам в течении двух недель. Надёжные и качественные станки уже в нашем интернет магазине!
                </p>
            </div>
            <div class="edit-button_block">
                <button class="edit-prepared-button" id="button-save" type="button">Готово</button>
                <a class="edit-cancellation-button" href="item.php">Отмена</a>
                <?php include('admin-popup_forms.php'); ?>
            </div>
        </div>
    </div>
</body>
<script src="../js/script-main.js"></script>