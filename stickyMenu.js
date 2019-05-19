window.addEventListener('DOMContentLoaded', function() {
    let nav = document.querySelector('nav');
    let hero = document.querySelector('.hero');
    let scrollPos = window.scrollY;
    let navLink = document.querySelectorAll('nav a');


    window.addEventListener('scroll', function(e) {
        scrollPos = window.scrollY;
        (scrollPos >= 515) ? nav.style.position = 'fixed': nav.style = '';
        (scrollPos >= 515) ? nav.style.top = '0': nav.style = '';
        (scrollPos >= 515) ? hero.style.marginBottom = '220px': hero.style = '';

    });

    // navLink.forEach(elm) addEventListener("click", function() {

    // });

    // setTimeout(function() {
    //     $("#main-wrapper").css("margin-left", "0");
    //     $("#main-wrapper").css("opacity", "1");
    // }, 500);
});