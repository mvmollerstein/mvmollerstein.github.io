$(window).on("load", function () {
    const loader = document.querySelector(".loader");
    const loaderImg = document.querySelector(".loaderImg");
    setTimeout(function(){
        loaderImg.className += " hidden";
    },1500);
    setTimeout(function(){
        loader.className += " hidden";
        $('body').removeClass('no-scroll');
    },2500);
});

$(document).ready(function(){

    var url = 'assets/icons/loading.gif';
    var image = new Image();
    image.src = url;
    image.className = "loaderImg";
    $('.loader').append(image);

    const faders = document.querySelectorAll('.fade-in');
    const faders2 = document.querySelectorAll('.fade-in2');
    const sliders = document.querySelectorAll('.slide-up')
    const sliders2 = document.querySelectorAll('.slide-up2')
    const appearOptions = {
        threshold: 0,
        rootMargin: "0px 0px -100px 0px"
    };

    const appearOnScroll = new IntersectionObserver(function(entries, appearOnScroll) {
        entries.forEach(entry => {
            if (!entry.isIntersecting) {
                return;
            } else {
                entry.target.classList.add('appear');
                appearOnScroll.unobserve(entry.target);
            }
        })
    }, appearOptions);

    faders.forEach(fader => {
        appearOnScroll.observe(fader);
    });

    faders2.forEach(fader2 => {
        appearOnScroll.observe(fader2);
    });

    sliders.forEach(slider => {
        appearOnScroll.observe(slider);
    });

    sliders2.forEach(slider2 => {
        appearOnScroll.observe(slider2);
    });


    $('.menu-icon').click(function(){
        $('.menu').addClass("menu-show");
        $('body').addClass("no-scroll");
    });

    $('.close-icon').click(function(){
        $('.menu').removeClass("menu-show");
        $('body').removeClass("no-scroll");
    });

});
