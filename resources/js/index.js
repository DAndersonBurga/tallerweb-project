import { $ } from './functions.js'

let nav;
let isNavActive = false;

document.addEventListener('DOMContentLoaded', () => {


    nav = $(".nav");
    const navBar = $(".header__button");
    console.log(navBar)
    navBar.addEventListener("click", toggleNav)

    window.addEventListener("resize", resizeNav);

});

function resizeNav() {
    if (window.innerWidth > 750) {
        nav.classList.remove("nav--disabled");
        nav.classList.add("nav--active");
    } else {
        nav.classList.remove("nav--active");
        nav.classList.add("nav--disabled");
    }
}

function toggleNav() {

    console.log("Hiciste click")

    if(isNavActive) {
        nav.classList.remove("nav--active");
        nav.classList.add("nav--disabled");
        isNavActive = false;
    } else {
        nav.classList.remove("nav--disabled");
        nav.classList.add("nav--active");
        isNavActive = true;
    }
}
