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

<nav class="navbar">
    <a class="nav-link" href="Index.php"><img src="image/Logo.png" alt="Logo" class="nav-logo"></a>
    <a class="nav-link" href="About_me.php">About me</a>
    <a class="nav-link" href="Professional_Experience.php">Professional experiences</a>
    <a class="nav-link" href="Skills.php">Skills</a>
    <a class="nav-link" href="Hobby.php">Hobby</a>
    <a class="nav-link" href="Certifications.php">Certifications</a>
    <a class="nav-link" href="Interview.php">Interview</a>
    <a class="nav-link" href="Thoughts.php">Thoughts</a>
    <a class="nav-link" href="Contact.php">Contact</a>
    <label class="lan-select" for="language-selector"><select id="language-selector" class="nav-dropdown">
        <option value="en">English</option>
        <option value="nl">Dutch</option>
    </select>
    </label>
    <button id="dark-mode-toggle" class="toggleDarkMode" onclick="toggleDarkMode()">🌙</button>
</nav>
<div class="cookies-wall" id="cookie-wall">
    <h2> cookie melding</h2>
    <p>LET OP"</p>
    <p>Lees goed voordat je de cookie accepteert, er is hierna geen weg meer terug</p>
    <p>door dit koekje te accepteren, laat je me je nier weghalen als je me niet terugbetaalt. zodat ik hem kan verkopen op de zwarte markt. 🙂</p>
    <button onclick="acceptCookies()" class="act-button"> Accepteer</button>
    <button onclick="closeCookieBanner()" class="act-button">Verwijder</button>
</div>

<div class="container-center">
    <h1 class="main-heading">Hi, Welcome to my home page</h1>
    <h2 class="second-heading">Nojan Alinaghi - Software Developer</h2>
    <p class="text-paragraph">I'm Nojan, a 27-year-old IT professional originally from Iran, currently residing in the Netherlands for the past six years.</p>
    <p class="text-paragraph">Explore my portfolio to learn more about my professional experiences, educational background, and skills.</p>
    <h3 class="third-heading"> Your Project, My Skill!</h3>
    <a href="Contact.php" class="act-button">Let’s Collaborate</a>
    <a href="Professional_Experience.php" class="act-button">Milestones</a>
</div>

</body>
</html>