<?php
if (isset($_POST['btn-send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = "WEBSITE CONTACT US NOTICE";
    $message = $_POST['message'];

    $mailheader = "From: " . $name . "<" . $email . ">\r\n";

    $finalmessage = "Name: " . $name . "\r\n Email = " . $email . " \r\n Message = " . $message;

    $recipient = "kamal@neccedu.com";
    if (mail($recipient, $subject, $finalmessage, $mailheader)) {
        header("location:index.php?success");
    }
} else {
    header("location: index.php");
}
