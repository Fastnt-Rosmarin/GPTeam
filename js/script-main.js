// WIND
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
})