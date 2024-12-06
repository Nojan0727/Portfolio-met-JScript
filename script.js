console.log("Current Path: ", window.location.pathname);
checkDarkMode();
if (window.location.pathname === "/" || window.location.pathname === "/header.php") {
    closeCookieBanner();
}
document.getElementById("dark-mode-toggle").addEventListener("mouseover", toggleDarkMode)
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
function setGreeting() {
    var greetingElement = document.getElementById("greeting");
    var hours = new Date().getHours();

    if (hours >= 6 && hours < 12) {
        greetingElement.textContent = "Goedemorgen ☀️";
        console.log("Greeting set to Goedemorgen☀");
    } else
        if (hours >= 12 && hours < 18) {
        greetingElement.textContent = "Goedemiddag ☀️";
        console.log("Greeting set to Goedemiddag");
    } else
        if (hours >= 18 && hours < 24) {
        greetingElement.textContent = "Goedenavond 🌙";
        console.log("Greeting set to Goedenavond");
    } else {
        greetingElement.textContent = "Goedenacht🌙 ";
        console.log("Greeting set to Goedenacht");
    }
}
setGreeting();
function toggleMenu() {
    document.getElementById("mobile-nav").classList.toggle("show-mobile-nav");
    console.log("HamburgerMenu")
}







