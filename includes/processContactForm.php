<?php
session_start();

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['mail'];
    $message = $_POST['message'];

    $to = "andrew.webster403@hotmail.co.uk";
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

echo "<h2 class='text-xl font-bold mb-4'>Confirmation</h2>";

echo "<p class='mb-2'>Thank you for submitting your request " . (isset($fullName)) . ".</p> 
    <p class='bg-blue-500 text-white p-2 mb-4'>I will get back to you shortly.</p>";

echo "<a href='../index.php' class='text-blue-500 underline'>Click me to get back to homepage!</a>";

?>