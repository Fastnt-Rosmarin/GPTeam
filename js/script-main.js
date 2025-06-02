// Получение элементов
const popup = document.querySelector('.pop-up');
const formWind = document.getElementById('windform');
const formReg = document.getElementById('regform');
const eyeClick = document.getElementById('Eaysclick');
const eyeImg = document.getElementById('openEays');
const passInput = document.querySelector('#regform input[name="pass"]');

// Подлкючение плагина
document.addEventListener('DOMContentLoaded', () => {
    const element = document.getElementById('choices-select');
    if (element) {
        const choices = new Choices(element, {
            searchEnabled: false,
            itemSelectText: '',
            placeholderValue: 'Выберите категорию'
        });
    }
});

document.addEventListener('DOMContentLoaded', () => {
    const elements = document.querySelectorAll('.admin-user-status');
    elements.forEach(element => {
        if (element) {
            const choices = new Choices(element, {
                searchEnabled: false,
                itemSelectText: '',
                placeholderValue: 'Изменить'
            });
        }
    });
});

// Универсальная функция для показа/скрытия блоков
function togglePopup(id, className, open = true) {
    const popup = document.querySelector(id);
    if (popup) {
        if (open) {
            popup.style.display = 'flex';
            popup.classList.add(className);
            // Блокируется прокрутка страницы
            document.body.style.overflow = 'hidden';
        } else {
            popup.classList.add(`close${className.slice(4)}`);
            setTimeout(() => {
                popup.style.display = 'none';
                popup.classList.remove(`close${className.slice(4)}`);
            }, 400);
            // Блокировка прокрутики страницы убирается
            document.body.style.overflow = 'auto';
        }
    }
}

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

document.getElementById('clous-end').addEventListener('click', () => {
    const popup = document.querySelector('.popup-clarification_block'); // Селектор для попапа
    if (popup) {
        popup.classList.remove('openPopUp');
        popup.classList.add('closePopUp');
        setTimeout(() => {
            popup.style.display = 'none';
            popup.classList.remove('closePopUp');
            ClearForm(); // Очищаем форму, если нужно
        }, 400);
        document.body.style.overflow = 'auto';
    }
});

document.getElementById('clous-clar').addEventListener('click', () => {
    const popup_clar = document.querySelector('.popup-clarification-delite_block'); // Селектор для попапа
    if (popup_clar) {
        popup_clar.classList.remove('openPopUp');
        popup_clar.classList.add('closePopUp');
        setTimeout(() => {
            popup_clar.style.display = 'none';
            popup_clar.classList.remove('closePopUp');
            ClearForm(); // Очищаем форму, если нужно
        }, 400);
        document.body.style.overflow = 'auto';
    }
});

// Меню, город, товар, год — универсально
[
    ['swap-menu', '.popup-block_menu', 'openPopUp', 'clous_menu'],
    ['button-city', '.popup-block_city', 'openPopUp', 'clous_city'],
    ['button-sorting', '.sorting-popup_goods', 'openPopUp', 'clous_sort'],
    ['button-sort_year', '.sorting-popup_year', 'openPopUp', 'clous_year'],
    ['button-save', '.popup-clarification_block', 'openPopUp', 'clous-cancel'],
    ['delite_button', '.popup-clarification-delite_block', 'openPopUp', 'clous-delit'],
].forEach(([openId, blockSelector, openClass, closeId]) => {
    const openButton = document.getElementById(openId);
    const closeButton = document.getElementById(closeId);

    if (openButton) {
        openButton.addEventListener('click', () => togglePopup(blockSelector, openClass, true));
    }

    if (closeButton) {
        closeButton.addEventListener('click', () => togglePopup(blockSelector, openClass, false));
    }
});

// Очистка формы (заполни свою функцию)
function ClearForm() {
    popup.querySelectorAll('input').forEach(i => i.value = '');
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

// Переключение материалов/покрытий
document.querySelectorAll('.catalog-button_product').forEach(button => {
    button.addEventListener('click', () => {
        // Сброс классов активности
        document.querySelectorAll('.catalog-button_product').forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');
        // Показываем соответствующий блок
        const id = button.id;
        document.getElementById('prod-bench').style.display = (id === 'materials-button') ? 'block' : 'none';
        document.getElementById('prod-coating').style.display = (id === 'equipment-button') ? 'block' : 'none';
        document.getElementById('prod-technology').style.display = (id === 'tehnologe-button') ? 'flex' : 'none';
    });
});

// Ответы на вопросы
document.querySelectorAll('.ques-plus_button').forEach(button => {
    button.addEventListener('click', () => {
        // Создание классов
        const block = button.closest('.ques-block');
        const answer = block.querySelector('.ques-floating_block');
        const icon = block.querySelector('.questions-img');
        const isVisible = answer.style.display === 'block';
        // Вынкция условий при нажатии на кнопку активации
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

// Открыть / закрыть форму редактирования
document.querySelectorAll('.editor_block').forEach(button => {
    button.addEventListener('click', () => {
        const form = button.parentElement.querySelector('.admin-menu-editor_block');
        if (!form) return;
        const isVisible = form.style.display === 'flex';
        document.querySelectorAll('.admin-menu-editor_block').forEach(f => {
            f.style.display = 'none';
        });
        if (!isVisible) {
            form.style.display = 'flex';
        }
    });
});

// Открытие / закрытие формы статуса
document.getElementById('button-status').addEventListener('click', () => {
    const statusBlock = document.querySelector('.admin-panel-status_block');
    statusBlock.classList.toggle('open');
});

// Функция для обновления текста ошибки
function updateErrorText(errorType) {
    const errorText = document.querySelector('.error-clar-text');
    switch (errorType) {
        case 'saveChanges':
            errorText.textContent = 'Сохранить изменения?';
            break;
        case 'unsavedChanges':
            errorText.textContent = 'Есть несохраненные изменения. Сохранить?';
            break;
        case 'connectionError':
            errorText.textContent = 'Ошибка соединения. Попробуйте снова.';
            break;
        case 'unknownError':
            errorText.textContent = 'Произошла неизвестная ошибка. Попробуйте позже.';
            break;
        default:
            errorText.textContent = 'Неизвестная ошибка.';
            break;
    }
}

// Пример использования
updateErrorText('connectionError'); // Текст изменится на "Ошибка соединения. Попробуйте снова."