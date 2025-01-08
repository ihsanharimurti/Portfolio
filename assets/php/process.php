<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["fullname"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Email content preparation
  $subject = "Contact Form Submission from $name";
  $body = "Name: $name\nEmail: $email\nMessage:\n$message";

  // Send email using PHP mail function (replace with your SMTP configuration if needed)
  if (mail("harimurti114@gmail.com", $subject, $body)) {
    echo "Your message has been sent successfully!";
  } else {
    echo "Error sending message. Please try again later.";
  }
}