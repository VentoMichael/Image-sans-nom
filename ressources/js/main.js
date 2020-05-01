// Verify js enabled
document.documentElement.classList.add('js-enabled');


let burger = document.getElementById("burger-button");

burger.addEventListener("click", (e) => {
    e.preventDefault();
    document.body.classList.toggle("open");
    burger.classList.toggle("open");
});




var slideAbout = 1;
showSlides(slideAbout);

// Next/previous controls
function plusSlides(n) {
    showSlides(slideAbout += n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideAbout = 1}
    if (n < 1) {slideAbout = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideAbout-1].style.display = "block";
    dots[slideAbout-1].className += " active";
}