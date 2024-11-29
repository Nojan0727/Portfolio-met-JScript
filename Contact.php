<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="Contact">
  <title>Contact Us</title>
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
      <a class="nav-link active" href="Contact.php">Contact</a>
   </nav>
<header class="container-center">
      <h1 class="contact-heading">Contact Me</h1>
  <form class="contact-form">
      <span class="social-links">
          <a href="https://www.linkedin.com/in/nozhan-alinaghi-31437026a/" target="_blank">
             <img src="image/Linkedin.png" alt="LinkedIn" class="link-contact-logo">
          </a>
          <a href="https://github.com/Nojan0727" target="_blank">
             <img src="image/github.png" alt="GitHub" class="link-contact-logo">
          </a>
          <a href="http://wa.me/" target="_blank">
              <img src="image/Whatsapp.png" alt="WhatsApp" class="link-contact-logo">
          </a>
      </span>

    <label for="name">Name</label>
    <input type="text" id="name" placeholder="Enter your name" required>
      <label for="last name"></label>
      <input type="text" id="last name" placeholder="Enter your last name" required>

    <label for="email">E-mail</label>
    <input type="email" id="email" placeholder="Enter your email" required>

    <label for="age">Age</label>
    <input type="number" id="age" min="3" max="100" placeholder="Enter your age" required>

    <label for="message">Message</label>
    <textarea id="message" rows="4" placeholder="Type your message here..." required></textarea>

    <input type="submit" value="Submit">
  </form>
</header>
</body>
</html>