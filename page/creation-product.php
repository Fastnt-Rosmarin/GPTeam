<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
    <title>Редактирование</title>
</head>

<body>
    <div class="main-block adap-main">
        <div class="creation-product_block">
            <select id="choices-select">
                <option value="Материалы">Материалы</option>
                <option value="Оборудование">Оборудование</option>
            </select>
            <input type="text" placeholder="Краткое название ..." id="creation-drief-description_input">
            <a type="button" class="creation-adding-picture_block">
                +
            </a>
            <div class="creation-charact-product-block">
                <input type="text" placeholder="Название хар-ки..." class="creation-product-parameters">
                <input type="text" placeholder="Значение хар-ки ..." class="creation-product-value">
            </div>
            <button type="button" class="creation-adding-field-block">
                <p class="creation-adding_text">Добавить строку</p>
                <div class="creation-adding-plus_block">
                    +
                </div>
            </button>
            <div class="creation-name-product_block">
                <p class="creation-name-product_text">Полное название товара:</p>
                <textarea class="creation-name-info_block">Написать ...</textarea>
                <p class="creation-name-product_text">Краткое описание:</p>
                <textarea class="creation-name-info_block">Написать ...</textarea>
            </div>
            <div class="creation-button_block">
                <button class="creation-prepared-button" id="button-save" type="button">Готово</button>
                <a class="creation-cancellation-button" href="product.php">Отмена</a>
                <?php include('admin-popup_forms.php'); ?>
            </div> 
        </div>
    </div>
</body>
<script src="../js/script-main.js"></script>