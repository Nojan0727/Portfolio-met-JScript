console.log("Current Path: ", window.location.pathname);
checkDarkMode();
if (window.location.pathname === "/" || window.location.pathname === "/index.html") {
    closeCookieBanner();
}
function toggleDarkMode() {
    let body = document.body;
    let darkModeButton = document.getElementById("dark-mode-toggle");
    if (body.classList.contains("dark-mode")) {
        body.classList.remove("dark-mode");
        darkModeButton.textContent= "🌙";
        localStorage.setItem("darkMode", "false");
        console.log("toggleLightMode")
    } else {
        body.classList.add("dark-mode");
        darkModeButton.textContent= "☀️";
        localStorage.setItem("darkMode", "true");
        console.log("toggleDarkMode")
    }
}
function checkDarkMode() {
    let darkModeStatus = localStorage.getItem("darkMode");
    let darkModeButton = document.getElementById("dark-mode-toggle");

    if (darkModeStatus === "true") {
        document.body.classList.add("dark-mode");
        darkModeButton.textContent = "☀️";
    } else {
        document.body.classList.remove("dark-mode");
        darkModeButton.textContent = "🌙";
    }
}
function acceptCookies() {
    document.getElementById("cookie-wall").style.display = "none";
    console.log("acceptCookies")
}
function closeCookieBanner() {
    document.getElementById("cookie-wall").style.display = "none";
    console.log("closeCookieBanner")
}






