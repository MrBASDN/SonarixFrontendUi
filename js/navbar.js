// Theme Toggle
const toggleButton = document.getElementById("theme-toggle");
const currentTheme = localStorage.getItem("theme") || "light";

document.body.setAttribute("data-theme", currentTheme);

toggleButton.addEventListener("click", () => {
    const newTheme =
        document.body.getAttribute("data-theme") === "dark" ? "light" : "dark";
    document.body.setAttribute("data-theme", newTheme);
    localStorage.setItem("theme", newTheme);
});

const menuToggle = document.getElementById("menu");
const menuItemList = document.getElementById("navbarItems");
const cartToggle = document.getElementById("cart");
const cartItemList = document.getElementById("cartSection");
const cartClose = document.getElementById("cartClose");
const searchContainer = document.getElementById("searchContainer");
const searchOpen = document.getElementById("search");
const searchClose = document.getElementById("searchClose");
const searchBar = document.getElementById("searchBar");

menuToggle.addEventListener("click", (event) => {
    event.stopPropagation();
    toggleMenu(menuItemList);
});

cartToggle.addEventListener("click", (event) => {
    event.stopPropagation();
    toggleMenu(cartItemList);
});

cartClose.addEventListener("click", (event) => {
    event.stopPropagation();
    cartItemList.setAttribute("data-menu", "closed");
});

searchOpen.addEventListener("click", (event) => {
    event.stopPropagation();
    searchContainer.setAttribute("data-menu", "open");
});

searchClose.addEventListener("click", (event) => {
    event.stopPropagation();
    searchContainer.setAttribute("data-menu", "closed");
});

function toggleMenu(itemList) {
    if (itemList.getAttribute("data-menu") === "open") {
        itemList.setAttribute("data-menu", "closed");
    } else {
        itemList.setAttribute("data-menu", "open");
    }
}

function handleClickOutside(event) {
    if (!menuItemList.contains(event.target) && menuItemList.getAttribute("data-menu") === "open") {
        menuItemList.setAttribute("data-menu", "closed");
    }  
    if (!searchClose.contains(event.target) && !searchBar.contains(event.target) && searchContainer.getAttribute("data-menu") === "open") {
        searchContainer.setAttribute("data-menu", "closed");
    }
}

document.addEventListener('click', handleClickOutside);
