var typed = new Typed(".typing", {
    strings: ["","Have fun on my website","Find out more about me"],
    typeSpeed: 100,
    backSpeed: 90,
    loop: true,
});

var nav = document.querySelector('nav');

window.addEventListener('scroll', function(){
    if(window.pageYOffset > 500){
        nav.classList.add('bg-dark', 'shadow')
    } else {
        nav.classList.remove('bg-dark', 'shadow')
    }
})