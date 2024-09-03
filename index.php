<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="index.php" method="post">
        <h1>Customer Support</h1>
        <label for="">First Name:</label> <br>
        <input type="text" placeholder="First Name" name="firstName" class="name-input"> <br>
        <label for="lastName">Last Name:</label> <br>
        <input type="text" placeholder="Last Name" name="lastName" class="name-input"> <br>
        <label for="email">Email Address:</label> <br>
        <input type="text" placeholder="Email Address" name="email" class="large-input"> <br>
        <label for="subject">Subject:</label> <br>
        <input type="text" placeholder="Subject" name="subject" class="large-input"> <br>
        <label for="message">Message:</label> <br>
        <input type="text" placeholder="Your Message here..." name="message" class="message-input"><br>
        <button type="submit">Contact Us</button>
    </form>
</body>
</html>

<?php
    
    $first_name = $_POST["firstname"];
    $last_name = $_POST["lastName"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message_box = $_POST["message"];
    $mailHeader = "From:" .$first_name. "<".$email.">";

    $recipient = "tausin809@gmail.com";

    mail($recipient, $subject, $message_box, $mailHeader)
    or die("Error!");

    echo "Message sent";




?>