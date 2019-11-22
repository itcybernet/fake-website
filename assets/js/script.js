// let time = 2500;
// let index = 0;

// slide();

// function slide() {
//     let i;
//     let carousel = document.getElementsByClassName("carousel-item");
//     for (i = 0; i < carousel.length; i++) {
//         carousel[i].style.display = "none";
//     }
//     index++;
//     if (index > carousel.length) {
//         index = 1;
//     }
//     carousel[index - 1].style.display = "block";
//     setTimeout(slide, time);

// }


$(document).ready(function () {
    $('.carousel').carousel({
        interval: 3000
    })

    let prod = document.getElementsByClassName('prod');
    for (i = 0; i < prod.length; i++) {
        $(prod[i]).mouseover(function () {
            $('.prod h3').show()
        })
        $('.prod').mouseout(function () {
            $('.prod h3').hide().fadeOut("slow")
        })
    }


})