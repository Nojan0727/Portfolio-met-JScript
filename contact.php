<?php require "partials/header.php" ?>
<header class="container-center">
      <h1 class="contact-heading">Contact Me</h1>
  <form class="contact-form">
      <span class="social-links">
          <a href="https://www.linkedin.com/in/nozhan-alinaghi-31437026a/" target="_blank">
             <img src="partials/image/Linkedin.png" alt="LinkedIn" class="link-contact-logo">
          </a>
          <a href="https://github.com/Nojan0727" target="_blank">
             <img src="partials/image/github.png" alt="GitHub" class="link-contact-logo">
          </a>
          <a href="http://wa.me/" target="_blank">
              <img src="partials/image/Whatsapp.png" alt="WhatsApp" class="link-contact-logo">
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