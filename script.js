// scripts.js
const headermenu = document.querySelector('.headerbutton');
const navicon = document.querySelector('.navicon');
const naviconIcon = navicon.querySelector('i');

navicon.addEventListener('click', () => {
    headermenu.classList.toggle('showmenu');
    
    // Toggle between menu and close icons
    if (naviconIcon.textContent === 'menu') {
        naviconIcon.textContent = 'close';
    } else {
        naviconIcon.textContent = 'menu';
    }
});