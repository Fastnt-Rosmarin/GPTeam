// Получение элементов
const popup = document.querySelector('.pop-up');
const formWind = document.getElementById('windform');
const formReg = document.getElementById('regform');
const eyeClick = document.getElementById('Eaysclick');
const eyeImg = document.getElementById('openEays');
const passInput = document.querySelector('#regform input[name="pass"]');

// Очистка формы (заполни свою функцию)
function ClearForm() {
    // Пример: document.querySelectorAll('input').forEach(i => i.value = '');
}

// Универсальная функция для показа/скрытия блоков
function togglePopup(id, className, open = true) {
    const popup = document.querySelector(id);
    if (popup) {
        if (open) {
            popup.style.display = 'flex';
            popup.classList.add(className);
            document.body.style.overflow = 'hidden';
        } else {
            popup.classList.add(`close${className.slice(4)}`);
            setTimeout(() => {
                popup.style.display = 'none';
                popup.classList.remove(`close${className.slice(4)}`);
            }, 400);
            document.body.style.overflow = 'auto';
        }
    }
}

// Открытие/закрытие формы входа и регистрации
document.getElementById('open-end').addEventListener('click', () => {
    popup.style.display = 'flex';
    popup.classList.add('openPop');
    document.body.style.overflow = 'hidden';
    formWind.style.display = 'flex';
    formReg.style.display = 'none';
    ClearForm();
});

document.getElementById('open-regist').addEventListener('click', () => {
    formWind.style.display = 'none';
    formReg.style.display = 'flex';
    ClearForm();
});

document.getElementById('form-end').addEventListener('click', () => {
    formWind.style.display = 'flex';
    formReg.style.display = 'none';
    ClearForm();
});

// Переключение видимости пароля
eyeClick.addEventListener('click', () => {
    if (passInput.type === 'password') {
        passInput.type = 'text';
        eyeImg.src = '../img/Eyse.svg';
    } else {
        passInput.type = 'password';
        eyeImg.src = '../img/eaysclouse.svg';
    }
});

// Закрытие форм
document.querySelectorAll('.clous-end').forEach(btn => {
    btn.addEventListener('click', () => {
        popup.classList.remove('openPop');
        popup.classList.add('closePop');
        setTimeout(() => {
            popup.style.display = 'none';
            popup.classList.remove('closePop');
            ClearForm();
        }, 400);
        document.body.style.overflow = 'auto';
    });
});

// Переключение материалов/покрытий
document.querySelectorAll('.catalog-button_product').forEach(button => {
    button.addEventListener('click', () => {
        // Сброс классов активности
        document.querySelectorAll('.catalog-button_product').forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');

        // Показываем соответствующий блок
        const id = button.id;
        document.getElementById('prod-bench').style.display = (id === 'materials-button') ? 'flex' : 'none';
        document.getElementById('prod-coating').style.display = (id === 'equipment-button') ? 'flex' : 'none';
        document.getElementById('prod-technology').style.display = (id === 'tehnologe-button') ? 'flex' : 'none';
    });
});


// Ответы на вопросы
document.querySelectorAll('.ques-plus_button').forEach(button => {
    button.addEventListener('click', () => {
        const block = button.closest('.ques-block');
        const answer = block.querySelector('.ques-floating_block');
        const icon = block.querySelector('.questions-img');
        const isVisible = answer.style.display === 'block';

        if (isVisible) {
            answer.style.height = '0';
            answer.style.padding = '0 20px';
            icon.src = '../img/plus_icon.svg';
            setTimeout(() => (answer.style.display = 'none'), 500);
        } else {
            answer.style.display = 'block';
            icon.src = '../img/minus_icon.svg';
            setTimeout(() => {
                answer.style.height = 'auto';
                answer.style.padding = '20px';
            }, 10);
        }
    });
});

// Меню, город, товар, год — универсально
[
    ['swap-menu', '.popup-block_menu', 'openMenu', 'clous_menu'],
    ['button-city', '.popup-block_city', 'openCity', 'clous_city'],
    ['button-sorting', '.sorting-popup_goods', 'openGoods', 'clous_sort'],
    ['button-sort_year', '.sorting-popup_year', 'openYear', 'clous_year'],
].forEach(([openId, blockSelector, openClass, closeId]) => {
    document.getElementById(openId).addEventListener('click', () => togglePopup(blockSelector, openClass, true));
    document.getElementById(closeId).addEventListener('click', () => togglePopup(blockSelector, openClass, false));
});