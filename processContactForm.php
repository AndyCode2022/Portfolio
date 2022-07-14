<h2>Confirmation</h2>

<?php

    $fullName = $_POST['fullName'];

    echo "<p>Thank you for submitting your request " . $fullName . ".</p> 
    <p>I will get back to you shortly.</p>";

    echo "<a href='index.php'>click me to get back to homepage!";

?>

<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailForm = $_POST['mail'];
    $message = $_POST['subject'];

    $mailTo = "andrex.webster@hotmail.co.uk";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}

?>