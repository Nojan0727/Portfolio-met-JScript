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
    console.log('IgnoredCookieBanner')
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
function startCountdown() {
    var targetDate = new Date("2024-12-31T23:59:59").getTime();
    var timer = setInterval(function () {
        var now = new Date().getTime();
        var timeLeft = targetDate - now;
        var countdownElement = document.getElementById("countdown-timer");

        if (timeLeft > 0) {
            var days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
            var hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);
            countdownElement.textContent = `${days}d ${hours}h ${minutes}m ${seconds}s`;
            console.log("Countdown: " + countdownElement.textContent);
        } else {
            countdownElement.textContent = "We are now accepting customers!";
            console.log("Countdown completed!");
            clearInterval(timer);
        }
    }, 1000);
}

startCountdown();







