<?php require 'header.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

</head>

<body>

    <h2>Contact Me</h2>

    <form action="processContactForm.php" method="post" id="contact form">
        <label for="fullName">Full Name:</label>
        <input type="text" placeholder="Abe Sapien" id="fullName" name="fullName" required="true" />
        <br>
        <label for="email">Email:</label>
        <input type="email" placeholder="abe@bprd.com" id="email" name="email" />
        <br>
        <label for="contactreason"> Reason for contacting:</label>
        <select id="contactReason" name="contactReason">
            <option value="Option1">General Enquiry</option>
            <option value="Option2">Bug Report</option>
        </select>
        <br>
        <label for="message">Message: </label>
        <textarea placeholder="Enter message here..." id="message" name="message">
    </textarea>
        <br>
        <label for="terms">Agree with T&C:</label>
        <input type="checkbox" name="terms" id="terms" required="true">
        <br>

        <input type="submit" value="Send">
        
    </form>

    </form>

</body>

</html>