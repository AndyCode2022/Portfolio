<h2>Confirmation</h2>

<?php
session_start();

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['mail'];
    $message = $_POST['message'];

    $to = "andrewwebster1007@gmail.com";
    $subject = "Enquiry form submission";
    $headers = "From: $email\r\n";

    // Use the PHP mail() function to send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "The form has been sent successfully.";
    } else {
        echo "There was an error sending the form.";
    }
    header("Location: ?mailsend");
}

if (isset($fullName)) {
    $fullName = $_POST['fullName'];
}

echo "<p>Thank you for submitting your request " . (isset($fullName)) . ".</p> 
    <p>I will get back to you shortly.</p>";

echo "<a href='index.php'>click me to get back to homepage!";

?>