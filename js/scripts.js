'use strict';

const mobileNav = document.querySelector('ul');
const burgerIcon = document.querySelector('.burger');


burgerIcon.addEventListener('click', function(){
    mobileNav.classList.toggle('active');
    burgerIcon.classList.toggle('active');

})

// po kliknięciu przerzuca na odpowiednią stronę i burger się chowa

document.querySelectorAll(".link").forEach(n => n.addEventListener("click", () => {
    mobileNav.classList.remove("active");
    burgerIcon.classList.remove("active"); 
}) )