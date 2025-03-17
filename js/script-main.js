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

});
// Закрыть меню
document.getElementById('clous_menu').addEventListener('click', function() {
    var pop_menu = document.querySelector('.popup-block_menu');
    pop_menu.style.display = 'none';
    document.body.style.overflow = 'auto';
});


///// Открытие формы выбора года 
document.getElementById('button-city').addEventListener('click', function() {
    var pop_location = document.querySelector('.popup-block_city');
    pop_location.style.display = 'flex';
    document.body.style.overflow = 'hidden';
});
// Закрыть формы выбора года 
document.getElementById('clous_city').addEventListener('click', function() {
    var pop_location = document.querySelector('.popup-block_city');
    pop_location.style.display = 'none';
    document.body.style.overflow = 'auto';
});


///// Открытие блока ответа на вопросы
document.querySelectorAll('.ques-plus_button').forEach(button => {
    button.addEventListener('click', () => {
        const quesBlock = button.closest('.ques-block');
        const answer = quesBlock.querySelector('.ques-floating_block');
        const isVisible = answer.style.display === 'block';

        if (isVisible) {
            answer.style.height = '0';
            answer.style.padding = '0 20px';
            setTimeout(() => {
                answer.style.display = 'none';
            }, 500); // Wait for the animation to finish before hiding the block
        } else {
            answer.style.display = 'block';
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
document.getElementById('button-inver').addEventListener('click', function() {
    var prodform = document.querySelector('.product-form_table');
    var arrowimg = document.querySelector('.arrow-img');

    if (prodform.style.height === '60px') {
        prodform.style.height = '60px';
        prodform.style.overflow = 'hidden';
        arrowimg.style.transform = 'rotate(0deg)';
    } else {
        arrowimg.style.transform = 'rotate(180deg)';
        prodform.style.height = 'auto';
        prodform.style.overflow = 'auto';
    }
});