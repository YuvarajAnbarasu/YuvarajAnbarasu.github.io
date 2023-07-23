<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Create and format the email content
  $to = 'anbarasuyuvaraj1@gmail.com';
  $subject = 'New message from your website';
  $email_content = "Name: $name\nEmail: $email\nMessage:\n$message";

  // Send the email
  if (mail($to, $subject, $email_content)) {
    // Email sent successfully
    echo 'Message sent successfully.';
  } else {
    // Failed to send email
    echo 'Message sending failed. Please try again later.';
  }
}
?>
