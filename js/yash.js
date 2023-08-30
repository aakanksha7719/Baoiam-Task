
var slides = document.querySelectorAll('.slide');
var btns = document.querySelectorAll('.btn');
let currentSlide = 1;

var manualNav = function(manual){

    slides.forEach((slide) => {
        slide.classList.remove('active');
    });

    btns.forEach((btns) => {
        btns.classList.remove('active');
    });

    slides[manual].classList.add('active');
    btns[manual].classList.add('active');
}

btns.forEach((btn, i) => {  

    btn.addEventListener("click",() => {
        manualNav(i);
        currentSlide=i;

    });
});
var repeat = function(activeClass){
    let active = document.getElementsByClassName('active');
    let i=1;

    var repeater = () => {
        setTimeout(function(){
            slides[i].classList.add('active');
            btns[i].classList.add('active');

            i++;

            if(slide.length == i){
                i=1;
            }

            if(i>=slide.length ){
                return ;
            }

            repeater();

        },10000);
    }
    repeater();
}
repeat();






