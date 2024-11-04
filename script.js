const wrap = document.querySelector('.wrap');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnPopup = document.querySelector('.btnLogin-popup');
const iconClose = document.querySelector('.icon-close');

registerLink.addEventListener('click', ()=> {
    wrap.classList.add('active');
});

loginLink.addEventListener('click', ()=> {
    wrap.classList.remove('active');
});

btnPopup.addEventListener('click', ()=> {
    wrap.classList.add('active-popup');
});
iconClose.addEventListener('click', ()=> {
    wrap.classList.remove('active-popup');
});