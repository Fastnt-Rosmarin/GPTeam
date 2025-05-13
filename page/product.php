<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/style.css">
    <title>Карточка товара</title>
</head>

<body>
    <!-- Главное -->
    <div class="main-block">
        <?php include('header.php'); ?>
        <div class="product_adap">
            <div class="text-navigation">
                <p id="text-nav"><a id="text-nav" href="../index.php">Главная /</a><a id="text-nav" href="catalog.php"> Каталог</a> / Карточка товаров</p>
                <div class="fat-block">
                    <p id="text-nav-fat">Станок для нанесения покрытий</p>
                    <a class="star-img" href=""><img src="../img/star.svg" alt=""></a>
                </div>
                <?php include('admin-popup_forms.php'); ?>
                <div class="admin-product-edit_block">
                    <button class="editor_block" id="editor_button">
                        <img src="../img/pencil.svg" alt="" class="">
                    </button>
                    <div class="admin-menu-editor_block">
                        <button class="redactor_block" id="redactor_button">
                            <img src="../img/blue-pencil.svg" alt="" class="redactor-img">
                            <p class="redactor-text">Редактировать</p>
                        </button>
                        <button class="delite_block" id="delite_button">
                            <img src="../img/delite.svg" alt="" class="delite-img">
                            <p class="delite-text">Удалить</p>
                        </button>
                    </div>
                </div>
            </div>
            <div class="product-form">
                <div class="product-form_img">
                    <img class="product-img_block" src="../img/machine.svg" alt="">
                </div>
                <div class="product-form_table">
                    <div class="product-table_line">
                        <p class="product-line_left">Наименование модели</p>
                        <p class="product-line_right">DST 300</p>
                    </div>
                    <div class="product-table_line">
                        <p class="product-line_left">Габаритные размеры L x W x H</p>
                        <p class="product-line_right">3003500 X 2400 X 2300</p>
                    </div>
                    <div class="product-table_line">
                        <p class="product-line_left">Высота загрузки</p>
                        <p class="product-line_right">800 мм</p>
                    </div>
                    <div class="product-block_table">
                        <div class="product-table_line">
                            <p class="product-line_left">Загрузка деталей</p>
                            <p class="product-line_right">Через ковшовой элеватор</p>
                        </div>
                        <div class="product-table_line">
                            <p class="product-line_left">Выгрузка деталей</p>
                            <p class="product-line_right">Сквозная опрокидывающаяся корзина на плоском конвейре</p>
                        </div>
                        <div class="product-table_line">
                            <p class="product-line_left">Размер корзины</p>
                            <p class="product-line_right">30 мм</p>
                        </div>
                        <div class="product-table_line">
                            <p class="product-line_left">Наклон корзины</p>
                            <p class="product-line_right">45</p>
                        </div>
                        <div class="product-table_line">
                            <p class="product-line_left">Грузоподъемность</p>
                            <p class="product-line_right">25 кг</p>
                        </div>
                        <div class="product-table_line">
                            <p class="product-line_left">Скорость отжима</p>
                            <p class="product-line_right">200-500 RPM</p>
                        </div>
                        <div class="product-table_line">
                            <p class="product-line_left">Бочка с краской</p>
                            <p class="product-line_right">SS 304 герметичный с мешалкой</p>
                        </div>
                        <div class="product-table_line">
                            <p class="product-line_left">Окрасочная бочка с рубашкой водяного охлаждения</p>
                            <p class="product-line_right">Может быть предоставлен</p>
                        </div>
                        <div class="product-table_line">
                            <p class="product-line_left">Движение подъемника краски</p>
                            <p class="product-line_right">Гидравлический ножничный подъемник</p>
                        </div>
                        <div class="product-table_line">
                            <p class="product-line_left">Работа машины</p>
                            <p class="product-line_right">Полностью автоматическая</p>
                        </div>
                        <div class="product-table_line">
                            <p class="product-line_left">Панель управления</p>
                            <p class="product-line_right">PLC with HMI</p>
                        </div>
                        <div class="product-table_line">
                            <p class="product-line_left">Требуемая мощность машины</p>
                            <p class="product-line_right">6 HP</p>
                        </div>
                        <div class="product-table_line">
                            <p class="product-line_left">Вес машины ( приблизительно )</p>
                            <p class="product-line_right">1500 Kg</p>
                        </div>
                        <div class="product-table_line">
                            <p class="product-line_left">Корпус машины</p>
                            <p class="product-line_right">Монтаж панели</p>
                        </div>
                        <div class="sketch_block">
                            <div class="sketch-name_block">
                                <p class="sketch-name_text">Полное название товара:</p>
                                <p class="sketch-dep_text">Модель - Dip Spin Coating Machine DS 250</p>
                            </div>
                            <div class="sketch-name_block">
                                <p class="sketch-name_text">Краткое описание:</p>
                                <p class="sketch-dep_text">Машина для нанесения покрытий погружением в центрифугу</p>
                            </div>
                        </div>
                    </div>
                    <div class="inverted-arrow_block">
                        <button class="button-arrow_img" id="button-inver"><img class="arrow-img" src="../img/arrow.svg" alt="" /></button>
                    </div>
                </div>
            </div>
            <div class="product-button_block">
                <a class="admin-button_adding button-adding" id="adding-button">
                    <img src="../img/plus-admin_icon.svg" alt="" class="plus-img">
                    <p class="adding-prod_text">
                        Добавить товар
                    </p>
                </a>
                <a class="product-button_app" href="">
                    <p class="" id="">Оставить заявку</p>
                </a>
                <a class="product-button_mark" href="">
                    <p class="" id="">Закладки</p>
                </a>
            </div>
            <div class="product-reliability_block">
                <div class="relib-block_info">
                    <div class="block-info_relib">
                        <p class="text-relib">Отличная надежность</p>
                        <img src="../img/zashita.svg" alt="">
                    </div>
                    <p class="block-info-description">Крайне редко возникают проблемы при использовании</p>
                </div>
                <div class="relib-block_feature">
                    <img src="../img/galochka.svg" alt="">
                    <p class="text-feature">Хорошее качество</p>
                </div>
                <div class="relib-block_feature">
                    <img src="../img/galochka.svg" alt="">
                    <p class="text-feature">Без проблем</p>
                </div>
                <div class="relib-block_feature">
                    <img src="../img/galochka.svg" alt="">
                    <p class="text-feature">Долгая гарантия</p>
                </div>
            </div>
            <div class="other-goods_text">
                <p>Другие товары</p>
            </div>
            <div class="products-h">
                <?php include('products-bench.php'); ?>
                <?php include('products-bench.php'); ?>
            </div>
        </div>
        <?php include('application.php'); ?>
        <?php include('maps.php'); ?>
        <?php include('footer.php'); ?>
    </div>
</body>
<script src="../js/script-main.js"></script>