<!-- form.php -->

<?php

if (isset($_POST['submit'])) {
  // Get the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];

  // Set the recipient email address
  $to = 'cybrisk.solutions@gmail.com';

  // Set the email subject
  $subject = 'New Form Submission';

  // Construct the message
  $message = "Name: $name\n";
  $message .= "Email: $email\n";
  $message .= "Mobile: $mobile\n";

  // Send the email
  mail($to, $subject, $message);

  // Redirect to the thank you page
  header('Location: thanks.html');
  exit;
}

?>
