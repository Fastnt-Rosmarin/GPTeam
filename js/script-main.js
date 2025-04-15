///// WIND
let formwind = document.getElementById('windform');
let er_email = document.getElementById('er_email');
let er_pass = document.getElementById('er_pass');
// REG
let formreg = document.getElementById('regform');
let er_fio = document.getElementById('er_fio');
let er_number = document.getElementById('er_number');
let er_emailreg = document.getElementById('er_emailreg');
let er_passreg = document.getElementById('er_passreg');
var clickEays = document.getElementById('Eaysclick');
var imgEays = document.getElementById('openEays');
// Ввойти в форму входа 
// Открытие
document.getElementById('open-end').addEventListener('click', function() {
    var popup = document.querySelector('.pop-up');
    popup.style.display = 'flex';
    if (formreg.style.display == 'flex') {
        formreg.style.display = 'none';
        formwind.style.display = 'flex';
        ClearForm();
    }
    document.body.style.overflow = 'hidden';
    popup.classList.add('openPop');
});
// Перейти к форме регистрации
document.getElementById('open-regist').addEventListener('click', function() {
    formreg.style.display = 'flex';
    formwind.style.display = 'none';
    ClearForm();
});
// Перейти к форме входа
document.getElementById('form-end').addEventListener('click', function() {
    formreg.style.display = 'none';
    formwind.style.display = 'flex';
    ClearForm();
});
// КДК
clickEays.addEventListener('click', function() {
    if (formreg.pass.type == 'password') {
        formreg.pass.type = 'text';
        imgEays.src = '../img/Eyse.svg'
    } else {
        formreg.pass.type = 'password';
        imgEays.src = '../img/eaysclouse.svg'
    }
});
// Закрытие
const closeBtn = document.querySelectorAll('.clous-end')
closeBtn.forEach(btn => {
    btn.addEventListener('click', function() {
        var popup = document.querySelector('.pop-up');
        popup.classList.remove('openPop');
        popup.classList.add('closePop');

        setTimeout(function() {
            popup.style.display = 'none';
            popup.classList.remove('closePop');
            ClearForm();
        }, 400);

        document.body.style.overflow = 'auto';
    });
});


///// Открытие меню
document.getElementById('swap-menu').addEventListener('click', function() {
    var pop_menu = document.querySelector('.popup-block_menu');
    pop_menu.style.display = 'flex';
    document.body.style.overflow = 'hidden';
    pop_menu.classList.add('openMenu');

});
// Закрыть меню
document.getElementById('clous_menu').addEventListener('click', function() {
    var pop_menu = document.querySelector('.popup-block_menu');
    pop_menu.classList.add('closeMenu');
    setTimeout(function() {
        pop_menu.style.display = 'none';
        pop_menu.classList.remove('closeMenu');
    }, 400);
    document.body.style.overflow = 'auto';
});


///// Открытие формы выбора года 
document.getElementById('button-city').addEventListener('click', function() {
    var pop_location = document.querySelector('.popup-block_city');
    pop_location.style.display = 'flex';
    document.body.style.overflow = 'hidden';
    pop_location.classList.add('openCity');
});
// Закрыть формы выбора года 
document.getElementById('clous_city').addEventListener('click', function() {
    var pop_location = document.querySelector('.popup-block_city');
    pop_location.classList.add('openCity');
    pop_location.style.display = 'none';
    document.body.style.overflow = 'auto';
});


///// Открытие блока ответа на вопросы
document.querySelectorAll('.ques-plus_button').forEach(button => {
    button.addEventListener('click', () => {
        const quesBlock = button.closest('.ques-block');
        const answer = quesBlock.querySelector('.ques-floating_block');
        const imgques = quesBlock.querySelector('.questions-img'); // Select the image inside the same ques-block
        const isVisible = answer.style.display === 'block';

        if (isVisible) {
            answer.style.height = '0';
            answer.style.padding = '0 20px';
            imgques.src = '../img/plus_icon.svg';
            setTimeout(() => {
                answer.style.display = 'none';
                imgques.src = '../img/plus_icon.svg';
            }, 500);
        } else {
            answer.style.display = 'block';
            imgques.src = '../img/minus_icon.svg';
            setTimeout(() => {
                answer.style.height = 'auto';
                answer.style.padding = '20px';
            }, 10);
        }
    });
});



///// Раскрытие каталог товаров
document.getElementById('button-arrow').addEventListener('click', function() {
    var prodblock = document.querySelector('.products-block_bench');
    var arrowimg = document.querySelector('.arrow-img');

    if (prodblock.style.display === 'flex') {
        prodblock.style.display = 'none';
        arrowimg.style.transform = 'rotate(0deg)';
    } else {
        arrowimg.style.transform = 'rotate(180deg)';
        prodblock.style.display = 'flex';
        prodblock.style.height = 'auto';
        prodblock.style.gap = '15px';
    }
});


///// Раскрытие каталог товаров
document.getElementById('toggle-btn').addEventListener('click', function() {
    var itemList = document.querySelector('.items-table');
    var iconArrow = document.querySelector('.icon-arrow');

    if (itemList.style.display === 'flex') {
        itemList.style.display = 'none';
        iconArrow.style.transform = 'rotate(0deg)';
    } else {
        iconArrow.style.transform = 'rotate(180deg)';
        itemList.style.display = 'flex';
        itemList.style.gap = '15px';
    }
});