console.log("Hola Boris");


document.addEventListener('DOMContentLoaded', function () {
    let navbar = document.getElementById("navbar");
    let opener = document.getElementById("opener");
    let navItems = navbar.querySelectorAll("li");

    opener.addEventListener('click', function () {
        toggle();
    });

    navItems.forEach(function (item) {
        item.addEventListener('click', function () {
            toggle();
        });
    });

    function toggle() {
        if (window.innerWidth <= 768) {
            let computedStyle = window.getComputedStyle(navbar);
            if (computedStyle.right === "-280px") {
                navbar.style.right = "0px";
            } else {
                navbar.style.right = "-280px";
            }
        }
    }
});