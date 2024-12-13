<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nojan's Portfolio</title>
    <link rel="stylesheet" href="main.css">
    <script defer src="script.js"></script>
</head>
<body class="body-background">
<button class="hamburger-menu" onclick="toggleMenu()">Hamburger</button>

<nav class="navbar" id="myDIV">
    <a class="nav-link" href="index.php"><img src="partials/image/Logo.png" alt="Logo" class="nav-logo"></a>
    <a class="nav-link" href="about_me.php">About me</a>
    <a class="nav-link" href="professional_Experience.php">Professional experiences</a>
    <a class="nav-link" href="skills.php">Skills</a>
    <a class="nav-link" href="hobby.php">Hobby</a>
    <div id="greeting" class="greeting-message">Welkom!</div>
    <a class="nav-link" href="certifications.php">Certifications</a>
    <a class="nav-link" href="interview.php">Interview</a>
    <a class="nav-link" href="thoughts.php">Thoughts</a>
    <a class="nav-link" href="contact.php">Contact</a>
    <button id="dark-mode-toggle" class="toggleDarkMode">🌙</button>
</nav>
<nav class="mobile-nav" id="mobile-nav">
    <ul>
        <li><a class="nav-link" href="about_me.php">About me</a></li>
        <li><a class="nav-link" href="professional_Experience.php">Professional experiences</a></li>
        <li><a class="nav-link" href="skills.php">Skills</a></li>
        <li><a class="nav-link" href="hobby.php">Hobby</a></li>
        <li><a class="nav-link" href="certifications.php">Certifications</a></li>
        <li><a class="nav-link" href="interview.php">Interview</a></li>
        <li><a class="nav-link" href="thoughts.php">Thoughts</a></li>
        <li><a class="nav-link" href="contact.php">Contact</a></li>
    </ul>
</nav>