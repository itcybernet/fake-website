// $(function () {

//     $(".toggle").click(function () {
//         $(".toggle").toggleClass("active");
//         $(".collapse").toggleClass("collaps");
//     });

// });

const menu = document.querySelector("#toggle");
const menuCollapse = document.querySelector(".collapse");

function toggler() {
    menu.addEventListener("click", function () {
        menu.classList.toggle("active");
        menuCollapse.classList.toggle("collaps");

    });
};
toggler();