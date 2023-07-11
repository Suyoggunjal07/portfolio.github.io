<?php
if (isset($_POST['submit'])) {
  $to = 'suyoggunjal09@gmail.com';
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $email\r\n";

  $success = mail($to, $subject, $message, $headers);
  
  if ($success) {
    echo "Message sent successfully.";
  } else {
    echo "Error sending message. Please try again.";
  }
}
?>
