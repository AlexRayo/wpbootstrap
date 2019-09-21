/* MENU */
document.getElementById("icon-menu").onclick = function () { menuPhone(); };
document.getElementsByClassName("menu-item-has-children")[0].onclick = function () { subMenu(); };

function subMenu() {
    document.getElementsByClassName("sub-menu")[0].classList.toggle("mostrar");
}
function menuPhone() {
    document.getElementById("menu").classList.toggle("mostrar");

    var line = document.getElementsByClassName("icon-line");
    line[0].classList.toggle("rotate-1");
    line[1].classList.toggle("rotate-1");
    line[2].classList.toggle("rotate-2");
}
window.onscroll = function (e) {
    console.log(window.scrollY); // Value of scroll Y in px
};

