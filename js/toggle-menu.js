const $toggleMenu = document.getElementById("toggle-menu");
const $menu = document.getElementById("menu");

$toggleMenu.addEventListener("click", () => {
    $menu.classList.toggle("menu--show");
})

window.addEventListener("resize", () => {
    if ($menu.classList.contains("menu--show")) {
        $menu.classList.remove("menu--show");
    }
})
