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
    <!-- Каталог -->
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
            <div class="admin-adding-products-block">
                <a class="admin-button_adding" id="adding-button" href="creation-product.php">
                    <img src="../img/plus-admin_icon.svg" alt="" class="plus-img">
                    <p class="adding-prod_text">
                        Добавить товар
                    </p>
                </a>
            </div>
            <div class="prod-bench_adap" id="prod-bench">
                <div class="products-v">
                    <?php include('products-bench.php'); ?>
                    <?php include('products-bench.php'); ?>
                    <?php include('products-bench.php'); ?>
                    <?php include('products-bench.php'); ?>
                    <?php include('products-bench.php'); ?>
                </div>
            </div>
            <div class="prod-bench_adap" id="prod-coating">
                <div class="products-v_pocr">
                    <?php include('products-coating.php'); ?>
                    <?php include('products-coating.php'); ?>
                    <?php include('products-coating.php'); ?>
                    <?php include('products-coating.php'); ?>
                    <?php include('products-coating.php'); ?>
                </div>
            </div>
            <div class="product_technology" id="prod-technology">
                <div class="technol_use">
                    <p class="technol_bold-text">
                        Технология исполнения Effco
                    </p>
                    <div class="technol-text_block">
                        <p class="technol_thin-text">
                            Компоненты погружены в раствор покрытия, содержащий цинк и алюминиевые хлопья, что обеспечивает равномерное покрытие. Затем покрытие отверждается в печи, создавая прочный защитный слой, защищающий от коррозии и суровых условий окружающей среды.
                        </p>
                        <p class="technol_thin-blue-text">
                            Этот процесс обеспечивает точное и равномерное нанесение без риска водородного охрупчивания, обеспечивая превосходную защиту по сравнению с традиционными методами.
                        </p>
                    </div>
                </div>
                <p class="technol_bold-text text-tech_indent">Как наносится корундовое покрытие ECOMET?</p>
                <div class="technol-coating_block">
                    <img src="../img/barrel.svg" alt="" class="barrel-img">
                    <p class="technol_thin-text">
                        Покрытие из цинковых чешуек наносится неэлектролитическим способом, обычно с использованием таких методов, как погружение-отжим, напыление на рейке или распыление.
                    </p>
                </div>
                <div class="stages-technol_block">
                    <div class="stage-number_block">1</div>
                    <div class="stage-text_block">
                        <p class="technol_bold-text">
                            Соответствие отраслевым стандартам
                        </p>
                        <p class="technol_thin-text">
                            Корунд ECOMET соответствует международным стандартам, таким как ISO 10683 для резьбовых крепежных деталей и EN 13858 для деталей без резьбы, обеспечивая надежность и стабильность в любом применении.
                        </p>
                    </div>
                </div>
                <div class="stages-technol_block">
                    <div class="stage-number_block">2</div>
                    <div class="stage-text_block">
                        <p class="technol_bold-text">
                            Универсальность во всех отраслях
                        </p>
                        <p class="technol_thin-text">
                            ECOMET Корунд идеально подходит для автомобильных деталей, промышленного крепежа, топливных баков и многого другого. Будь то дорожное использование, тяжелая техника или морская среда, он обеспечивает длительную защиту, продлевая срок службы компонентов и снижая потребность в техническом обслуживании
                        </p>
                    </div>
                </div>
                <img src="../img/group.svg" alt="" class="waves-img">
                <div class="technol-new-coating_block">
                    <p class="coating_bold_blue-text">
                        Новейшее покрытие ECOMET Корунд
                    </p>
                    <p class="coating_thin_blue-text">
                        Превосходная защита от коррозии является стратегическим преимуществом, и в Effco мы расширяем границы возможного, представляя ECOMET Корунд, современное покрытие из цинковых чешуек, разработанное для обеспечения непревзойденной защиты и долговечности в самых сложных условиях.
                    </p>
                </div>
                <img src="../img/group.svg" alt="" class="waves-img">
                <p class="technol_bold-text text-tech_indent">
                    Революция в защите от коррозии!
                </p>
                <p class="technol_thin-text technol-coating_block">
                    В Effco мы знаем, что долговечность является ключевым фактором. Корунд ECOMET обеспечивает исключительную коррозионную стойкость, которая длится от 1 000 до 6 500 часов в условиях испытаний в нейтральном солевом тумане. Наносимый слоями толщиной 6 микрон с использованием двухступенчатого процесса погружения и отжима, он обеспечивает комплексную защиту от окружающей среды и химических факторов. Покрытие травится с толщиной всего 1 микрон каждые 400 часов, что доказывает его упругость
                </p>
                <img src="../img/ecomet_corundum.svg" alt="" class="ecomet-cor">
                <p class="technol_bold-text text-tech_indent">
                    Где применяются корундовые цинковые чешуйчатые покрытия ECOMET?
                </p>
                <p class="technol_thin-text technol-coating_block">
                    Цинковые чешуйчатые покрытия стали предпочтительным выбором для защиты от коррозии в различных отраслях промышленности. Они обычно используются в таких секторах, как:
                </p>
                <div class="technol-application_block">
                    <div class="technol-block_animation">
                        <div class="tech-app-img_block">
                            <img src="../img/auto.svg" alt="" class="application-img">
                            <p class="appalitcation-text">
                                Автомобиль
                            </p>
                        </div>
                        <div class="tech-app-img_block">
                            <img src="../img/mill.svg" alt="" class="application-img">
                            <p class="appalitcation-text">
                                Возобновляемая<br>энергия
                            </p>
                        </div>
                        <div class="tech-app-img_block">
                            <img src="../img/truck.svg" alt="" class="application-img">
                            <p class="appalitcation-text">
                                Тяжелый транспорт
                            </p>
                        </div>
                        <div class="tech-app-img_block">
                            <img src="../img/motherboard.svg" alt="" class="application-img">
                            <p class="appalitcation-text">
                                Электроника
                            </p>
                        </div>
                        <div class="tech-app-img_block">
                            <img src="../img/railway.svg" alt="" class="application-img">
                            <p class="appalitcation-text">
                                Железнодорожный<br>транспорт
                            </p>
                        </div>
                    </div>
                </div>
                <div class="technol-basic-appli_block">
                    <div class="frame_block"></div>
                    <div class="basic-app_block">
                        <p class="technol_bold-text">Базовое покрытие</p>
                        <p class="technol_thin-text">
                            Базовое покрытие является жизненно важным защитным слоем, наносимым непосредственно на металлическую поверхность в системе покрытия. Он содержит цинковые хлопья, обеспечивающие катодную защиту, жертвуя собой для защиты металла от коррозии. Этот слой защищает от влаги, кислорода и химических веществ, предотвращая ржавчину и деградацию. Техника нанесения базового покрытия может варьироваться в зависимости от формы компонента и его использования. В целом, это основа устойчивой к коррозии и функциональной системы покрытий.
                        </p>
                    </div>
                    <div class="black_block"></div>
                    <div class="dark-blue_block"></div>
                </div>
                <div class="technol-basic-appli_block">
                    <div class="frame_block"></div>
                    <div class="basic-app_block">
                        <p class="technol_bold-text">Финишное покрытие</p>
                        <p class="technol_thin-text">
                            Финишное покрытие — это последний слой, наносимый поверх базового покрытия для повышения долговечности и функциональности за счет дополнительной защиты от износа, ультрафиолетового излучения, химических веществ и влаги. Кроме того, он играет решающую роль в улучшении внешнего вида системы покрытия, предлагая широкий спектр вариантов цвета, блеска и отделки. Он не только обеспечивает дополнительную защиту, но и значительно продлевает срок службы и производительность системы покрытий, что делает ее основным компонентом для любого успешного нанесения покрытия.
                        </p>
                    </div>
                    <div class="black_block"></div>
                    <div class="dark-blue_block"></div>
                </div>
                <p class="technol_bold-text technol-coating_block">
                    С цинковым чешуйчатым покрытием вы не просто покрываете свои компоненты; Вы вооружаете их щитом, который устойчив к самым суровым условиям, от соленой воды до высокой влажности и экстремальных температур.
                </p>
                <div class="technol-plus_block">
                    <div class="plus_block">Улучшенная <br> визуальная <br> привлекательность</div>
                    <div class="plus_block">Увеличенный срок <br> службы компонентов</div>
                    <div class="plus_block">Превосходная <br>коррозионная <br>стойкость</div>
                    <div class="plus_block">Снижение затрат на <br>техническое <br> обслуживание</div>
                </div>
                <p class="technol_bold-text text-tech_indent">
                    В чем ECOMET Корунд превосходит традиционные покрытия?
                </p>
                <div class="technol-text-plus_block">
                    <p class="technol_thin-text">
                        Традиционные покрытия, такие как цинкование и горячее цинкование, могут быть неровными и толстыми, а также подвержены риску водородного охрупчивания, которое ослабляет высокопрочные крепления
                    </p>
                    <p class="technol_thin-text">
                        Корунд ECOMET имеет более тонкий и точный слой, обеспечивая лучшую коррозионную стойкость и избегая этих недостатков. Его цинковое чешуйчатое покрытие остается проводящим, обеспечивая непрерывную защиту даже при повреждении. Кроме того, процесс является экологически чистым, не содержит кислот и загрязняющих веществ.
                    </p>
                    <p class="technol_thin-text">
                        Долгосрочная защита с помощью корунда ECOMET <br>
                        Корунд ECOMET обладает непревзойденной коррозионной стойкостью, со скоростью коррозии всего 0,02-0,03 микрон в год. Выдерживая до 6 500 часов испытаний в солевом тумане, он предназначен для защиты компонентов от экстремальных температур, химических веществ и влажности, обеспечивая длительный срок службы.
                    </p>
                </div>
            </div>
            <?php include('application.php'); ?>
            <?php include('maps.php'); ?>
            <?php include('footer.php'); ?>
        </div>
    </div>
</body>
<script src="../js/script-main.js"></script>