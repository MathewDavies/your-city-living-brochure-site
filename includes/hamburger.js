const hamburger = document.querySelector('.hamburger');
const navList = document.querySelector('.nav-list');
const links = document.querySelectorAll('.nav-list li')

console.log("hello world");

hamburger.addEventListener('click', ()=> {
    navList.classList.toggle('open');
    links.forEach(link => {
        link.classList.toggle('fade');
    });
});