const documentRoot = document.documentElement;

// Expire Date for Cookies
const dateObj = new Date();
dateObj.setUTCFullYear("2026");
const expireDate = dateObj.toUTCString();

/* ==== Nav Toggle ==== */
const navButton = document.getElementById("nav-toggle");
const navButtonImg = navButton.querySelector("svg");
const navButtonImgTitle = navButtonImg.querySelector("title");
const nav = document.querySelector("nav.main-nav.vertical");

function navOn() {
    navButtonImg.setAttribute("alt", "Collapse Navigation Menu");
    navButtonImgTitle.innerHTML = "Collapse Navigation Menu";
    nav.classList.add("on");
}
function navOff() {
    navButtonImg.setAttribute("alt", "View Navigation Menu");
    navButtonImgTitle.innerHTML = "View Navigation Menu";
    nav.classList.remove("on");
}

// Event Listeners
navButton.addEventListener("click", () => {
    if(!nav.classList.contains("on")) {
        navOn();
    } else {
        navOff();
    }
});
window.addEventListener("resize", () => {
    if (window.matchMedia("(min-width: 50rem)").matches) {
        navOff();
    }
});

/* ==== Color Toggle ==== */
const colorButton = document.getElementById("color-toggle");

function darkMode() {
    colorButton.setAttribute("data-toggle", "light");
    documentRoot.classList.add("dark");
    document.cookie = `color-mode=dark; expires=${expireDate}; path=/`;
}
function lightMode() {
    colorButton.setAttribute("data-toggle", "dark");
    documentRoot.classList.remove("dark");
    document.cookie = `color-mode=light; expires=${expireDate}; path=/`;
}

// Event Listeners
colorButton.addEventListener("click", () => {
    if (!documentRoot.classList.contains("dark")) {
        darkMode();
    } else {
        lightMode();
    }
})