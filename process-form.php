<!-- process-form.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Your email address where you want to receive the form submissions
  $to = "ghaforyfarzia@gmail.com";

  // Email subject
  $subject = "New Form Submission";

  // Email body
  $body = "Name: $name\nEmail: $email\nMessage:\n$message";

  // Additional headers
  $headers = "From: $email";

  // Send email
  mail($to, $subject, $body, $headers);

  // Redirect to a thank you page or display a thank you message
  header("Location: thank-you.html");
  exit;
}
?>
