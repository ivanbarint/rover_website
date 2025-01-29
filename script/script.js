const burgerMenu = document.querySelector('.burger-menu');
const overlay = document.querySelector('.burger-menu-navbar');

// LOADING PAGES ONCLICK

function loadPage(page) {
    window.location.href = page;
};

// GREEN COVER TRANSITION TO GET THE MENU AND THE COVER ON THE PHONE

burgerMenu.addEventListener('click', function() {
    if (overlay.style.width === '0px') {
        overlay.style.display = 'block';
        setTimeout(() => {
        overlay.style.width = '100%';
        }, 10); 
    } else {
        overlay.style.width = '0';
        setTimeout(() => {
        overlay.style.display = 'none';
        }, 300); 
    }
    });