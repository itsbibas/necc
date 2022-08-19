// loader animation (delay)
setTimeout(function () {
    $('.loader_bg').fadeToggle();
}, 2000);

// for mobile view toggle
const ul = document.getElementById('mobile-view');
const toogle = document.getElementById('toggle');
toogle.onclick = function () {
    ul.classList.toggle('opened');
    toogle.classList.toggle('open');
}
function toggleMobileMenu(menu) {
    menu.classList.toggle('open');
}

// for prenav hiding and unhiding when page is scrolled
const prenav = document.getElementById('prenav');
const prenavadj = document.getElementById('pre-nav-adjustment');
let lastScrollY = window.scrollY;

window.addEventListener("scroll", () => {
    if (lastScrollY < window.scrollY) {
        prenav.classList.add('pre-nav-hidden');
        prenavadj.classList.add('pre-nav-adj-hidden');
    }
    else {
        prenav.classList.remove('pre-nav-hidden');
        prenavadj.classList.remove('pre-nav-adj-hidden');
    }
    lastScrollY = window.scrollY;
});

// page animation when scrolled or viewed
window.addEventListener('scroll', () => {
    var reveal = document.querySelectorAll('.rev')
    for (var i = 0; i < reveal.length; i++) {
        var windowheight = window.innerHeight;
        var revealtop = reveal[i].getBoundingClientRect().top;
        var revealpoint = 200;

        if (revealtop < windowheight - revealpoint)
            reveal[i].classList.add('rev-active');
        else
            reveal[i].classList.remove('rev-active');
    }
});

// owl carousel script
$('.carousel').owlCarousel({
    margin: 20,
    loop: true,
    autoplay: true,
    autoplayTimeOut: 2000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
            nav: false
        },
        600: {
            items: 2,
            nav: false
        },
        1000: {
            items: 3,
            nav: false
        }
    }
});


/* css encrypt method */

// var head = document.getElementsByTagName('head');
// var link = document.createElement('link');
// link.rel = 'stylesheet';
// link.type = 'text/css';
// link.href = '/style.css';
// head.appendChild(link);



// form validations

const form = document.querySelector("form"),
        nextBtn = form.querySelector(".nextBtn"),
        backBtn = form.querySelector(".backBtn"),
        allInput = form.querySelectorAll(".first input");


nextBtn.addEventListener("click", ()=> {
    allInput.forEach(input => {
        if(input.value != ""){
            form.classList.add('secActive');
        }else{
            form.classList.remove('secActive');
        }
    })
})

backBtn.addEventListener("click", () => form.classList.remove('secActive'));
