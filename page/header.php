<div class="header">
    <div class="head-block">
        <a href="tel:8 927 211 66 50">
            <p class="number-text">8 927 211 66</p>
        </a>
        <div class="logo-compony_block">
            <a href="../index.php"><img class="logo_company" src="../img/logo.svg" alt="" /></a>
            <a href="../index.php"><img class="logo_company" src="../img/logo-effco.svg" alt="" /></a>
        </div>
        <button id="swap-menu" type="button">
            <img class="swap-menu_img" src="../img/menu.svg" alt="" />
        </button>
    </div>
    <div class="search">
        <div class="sear-block">
            <img class="sear-img" src="../img/magnifier.svg" alt="" />
            <input class="search-engine" id="" type="search" placeholder="Поиск по сайту">
        </div>
        <button class="location" id="button-city" type="button">
            <img class="locat-img" src="../img/cursor.svg" alt="" />
            <p class="loca-city_text">Тольятти</p>
        </button>
    </div>
    <div class="auto-adap_block">
        <div class="auth-block">
            <div class="le-auto_block">
                <p class="text-auth">Личный кабинет</p>
                <p class="intro-text">Авторизируйтесь в личном кабинете чтобы получить больше доступа к нашему сайту!</p>
                <button class="entrance-bottom" id="open-end" type="button">
                    <p class="ent-text">Войти</p>
                </button>
            </div>
            <img class="ri-auto_img" src="../img/castle.svg" alt="" />
        </div>
    </div>
    <div class="adap-cookies-block">
        <div class="cookies-block">
            <p class="cookies-text">Мы используем c͟o͟o͟k͟i͟e͟s͟ для вашего полного комфорта!</p>
            <button class="cookies-button">Окей</button>
        </div>
    </div>
</div>
<!-- Меню -->
<div class="popup-block_menu">
    <div class="block_menu">
        <div class="up-block_menu">
            <div class="block-menu-logo_img">
                <img class="menu-logo_img" src="../img/logo.svg" alt="">
            </div>
            <a href="tel:8 927 211 66 50">
                <p class="menu-text_num">8 927 211 66</p>
            </a>
            <button id="clous_menu" type="button"><img class="close-menu" src="../img/white-cross.svg" alt=""></button>
        </div>
        <div class="botton-block_menu">
            <a href="#" class="text-bot_menu" type="button" id="open-end">Войти</a>
            <a href="#" class="text-bot_menu" id="">Главная</a>
            <a href="#" class="text-bot_menu" id="">О нас</a>
            <a href="#" class="text-bot_menu" id="">Новости</a>
            <a href="#" class="text-bot_menu" id="">Каталог</a>
            <a href="#" class="text-bot_menu" id="">Технология</a>
            <a href="#" class="text-bot_menu" id="">Закладки</a>
            <a href="#" class="text-bot_menu" id="">Контакты</a>
        </div>
    </div>
</div>
<!-- Выбор города -->
<div class="popup-block_city">
    <div class="block_city">
        <div class="up-block_city">
            <p>Ваш город</p>
            <button class="clous-botton_city" id="clous_city" type="button"><img class="clous-city" src="../img/cross-grey.svg" alt="" /></button>
        </div>
        <div class="botton-block_city">
            <div class="sear-block">
                <img class="sear-img" src="../img/magnifier.svg" alt="" />
                <input class="city-engine" id="" type="search" placeholder="Найти город">
            </div>
            <div class="form-block_city">
                <div class="list-text_city">
                    <div class="block-text_city" id="">
                        <a class="text-city" href="">Тольятти</a>
                        <img src="" alt="">
                    </div>
                    <div class="block-text_city" id="">
                        <a class="text-city" href="">Москва</a>
                        <img src="" alt="">
                    </div>
                    <div class="block-text_city" id="">
                        <a class="text-city" href="">Самара</a>
                        <img src="" alt="">
                    </div>
                    <div class="block-text_city" id="">
                        <a class="text-city" href="">Уфа</a>
                        <img src="" alt="">
                    </div>
                    <div class="block-text_city" id="">
                        <a class="text-city" href="">Омск</a>
                        <img src="" alt="">
                    </div>
                    <div class="block-text_city" id="">
                        <a class="text-city" href="">Саратов</a>
                        <img src="" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Формы авторизации и регистрации -->
<div class="pop-up">
    <!-- Вход -->
    <form action="" class="wind" id="windform" method="POST">
        <div class="t-but">
            <p>Войти в систему</p>
            <button class="clous-end" type="button"><img src="../img/cross.svg" alt="" /></button>
        </div>
        <div class="winform_poli">
            <div class="poli_block">
                <input class="poli-block_input" type="text" name="email" id="email" placeholder="Введите Email или телефон" />
                <p class="poli_error" id="er_email">ffff</p>
            </div>
            <div class="poli_block">
                <input class="poli-block_input" type="password" name="pass" id="pass" placeholder="Введите ваш пароль" />
                <p class="poli_error" id="er_pass"></p>
            </div>
            <p class="pass-reco_text"> <a class="pass-reco_text" id="pass-reco_link" href="">Забыли пароль? </a>Ничего страшного мы поможем его<br />востановить!</p>
            <button type="submit" class="button_auth" onclick="">Войти</button>
            <div class="text-but_transition">
                <button id="open-regist" type="button">
                    <p>Регистрация</p>
                </button>
            </div>
        </div>
    </form>
    <!-- Регистрация -->
    <form action="" class="regist" id="regform" method="POST">
        <div class="t-but">
            <p>Регистрация</p>
            <button class="clous-end" type="button"><img src="../img/cross.svg" alt="" /></button>
        </div>
        <div class="regform_poli">
            <div class="poli_block">
                <input class="poli-block_input" type="text" name="FIO" id="FIO" placeholder="Введите ФИО" />
                <p class="poli_error" id="er_fio"></p>
            </div>
            <div class="poli_block">
                <input class="poli-block_input" type="text" name="number" id="number" placeholder="Введите номер телефона" />
                <p class="poli_error" id="er_number"></p>
            </div>
            <div class="poli_block">
                <input class="poli-block_input" type="text" name="email" id="email" placeholder="Введите Email" />
                <p class="poli_error" id="er_emailreg"></p>
            </div>
            <div class="poli_block">
                <div class="password-input">
                    <input class="repeat_pass" type="password" name="pass" id="pass" placeholder="Введите пароль" />
                    <a href="#" id="Eaysclick"><img class="eays" id="openEays" src="../img/eaysclouse.svg" alt="" /></a>
                </div>
                <p class="poli_error" id="er_passreg"></p>
            </div>
            <div class="poli_block">
                <input class="poli-block_input" type="password" name="repepass" id="repepass" placeholder="Повторите ваш пароля" />
                <p class="poli_error" id="er_repepassreg"></p>
            </div>
            <button type="submit" class="button_auth" onclick="">Зарегистрироваться</button>
            <div class="text-but_transition">
                <button id="form-end" type="button">
                    <p>Войти</p>
                </button>
            </div>
        </div>
    </form>
</div>