$(document).ready(function () {
    $('.carousel').carousel({
        interval: 3000
    });


    $('.link-produk').mouseenter(function () {
            $(this).addClass('active');
        })
        .mouseleave(function () {
            $(this).removeClass('active');
        });


    $(window).scroll(function () {
        let scrol = $(this).scrollTop();

        if (scrol > $('.hidden').offset().top - 400) {

            let hide = document.getElementsByClassName('hidden');

            for (let i = 0; i < hide.length; i++) {
                setTimeout(() => {
                    $('.hidden').eq(i).addClass('show');
                }, 100 * (i));

            }
        }
    });

    // burger
    $('.navbar-toggler').click(function () {
        $('.menu-mob').toggleClass('toggle');
    });
    $('.search').click(function () {
        $('.form-control ').toggleClass('form-active');
    })
});