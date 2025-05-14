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
        <div class="edit-product-selecting_block">
            <select name="edit-product_block" id="edit-product_form" required>
                <option value="Выберите категорию" disabled selected hidden>Выберите категорию</option>
                <option value="Материалы">Материалы</option>
                <option value="Оборудование">Оборудование</option>
            </select>
            <p class="edit-name-product-text">Станок для нанасение покрытий </p>
            <div class="edit-product-img_block">
                <img src="../img/machine.svg" alt="" class="edit-product-img">
            </div>
            <div class="edit-charact-product-block">
                <div class="edit-value-string">
                    <p class="edit-product-parameters-text">
                        Наименование модели
                    </p>
                    <textarea class="edit-product-value-block">DST 300</textarea>
                </div>
                <div class="edit-value-string">
                    <p class="edit-product-parameters-text">
                        Габаритные размеры L x W x H
                    </p>
                    <textarea class="edit-product-value-block">3003500 X 2400 X 2300</textarea>
                </div>
                <div class="edit-value-string">
                    <p class="edit-product-parameters-text">
                        Высота загрузки
                    </p>
                    <textarea class="edit-product-value-block">800 мм</textarea>
                </div>
                <div class="edit-value-string">
                    <p class="edit-product-parameters-text">
                        Загрузка деталей
                    </p>
                    <textarea class="edit-product-value-block">Через ковшовой элеватор</textarea>
                </div>
                <div class="edit-value-string">
                    <p class="edit-product-parameters-text">
                        Выгрузка деталей
                    </p>
                    <textarea class="edit-product-value-block">Сквозная опрокидывающаяся корзина на плоском конвейре</textarea>
                </div>
                <div class="edit-value-string">
                    <p class="edit-product-parameters-text">
                        Размер корзины
                    </p>
                    <textarea class="edit-product-value-block">30 мм</textarea>
                </div>
                <div class="edit-value-string">
                    <p class="edit-product-parameters-text">
                        Наклон корзины
                    </p>
                    <textarea class="edit-product-value-block">45</textarea>
                </div>
                <div class="edit-value-string">
                    <p class="edit-product-parameters-text">
                        Грузоподъемность
                    </p>
                    <textarea class="edit-product-value-block">25 кг</textarea>
                </div>
                <div class="edit-value-string">
                    <p class="edit-product-parameters-text">
                        Скорость отжима
                    </p>
                    <textarea class="edit-product-value-block">200-500 RPM</textarea>
                </div>
                <div class="edit-value-string">
                    <p class="edit-product-parameters-text">
                        Бочка с краской
                    </p>
                    <textarea class="edit-product-value-block">SS 304 герметичный с мешалкой</textarea>
                </div>
                <div class="edit-value-string">
                    <p class="edit-product-parameters-text">
                        Окрасочная бочка с рубашкой водяного охлаждения
                    </p>
                    <textarea class="edit-product-value-block">Может быть предоставлен</textarea>
                </div>
                <div class="edit-value-string">
                    <p class="edit-product-parameters-text">
                        Движение подъемника краски
                    </p>
                    <textarea class="edit-product-value-block">Гидравлический ножничный подъемник</textarea>
                </div>
                <div class="edit-value-string">
                    <p class="edit-product-parameters-text">
                        Работа машины
                    </p>
                    <textarea class="edit-product-value-block">Полностью автоматическая</textarea>
                </div>
                <div class="edit-value-string">
                    <p class="edit-product-parameters-text">
                        Панель управления
                    </p>
                    <textarea class="edit-product-value-block">PLC with HMI</textarea>
                </div>
                <div class="edit-value-string">
                    <p class="edit-product-parameters-text">
                        Требуемая мощность машины
                    </p>
                    <textarea class="edit-product-value-block">6 HP</textarea>
                </div>
                <div class="edit-value-string">
                    <p class="edit-product-parameters-text">
                        Вес машины (приблизительно)
                    </p>
                    <textarea class="edit-product-value-block">1500 кг</textarea>
                </div>
                <div class="edit-value-string">
                    <p class="edit-product-parameters-text">
                        Корпус машины
                    </p>
                    <textarea class="edit-product-value-block">Монтаж панели</textarea>
                </div>
            </div>
            <div class="edit-name-product_block">
                <p class="edit-name-product_text">Полное название товара:</p>
                <textarea class="edit-name-info_block">Модель - Dip Spin Coating Machine DS 250</textarea>
                <p class="edit-name-product_text">Краткое описание:</p>
                <textarea class="edit-name-info_block">Машина для нанесения покрытий погружением в центрифугу</textarea>
            </div>
            <div class="edit-button_block">
                <button class="edit-prepared-button">Готово</button>
                <button class="edit-cancellation-button">Отмена</button>
            </div>
        </div>
    </div>
</body>
<script src="../js/script-main.js"></script>