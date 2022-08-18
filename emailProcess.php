<?php
if (isset($_POST['btn-send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = "Website contact us form fill notice";
    $message = $_POST['message'];

    $finalmessage = " From: " + $name + "Email: " + $email + "Message: " + $message;

    $mailheader = "From: " . $name . "<" . $email . ">\r\n";

    $recipient = "kamal@neccedu.com";
    if (mail($recipient, $subject, $finalmessage, $mailheader)) {
        header("location:index.php?success");
    }
} else {
    header("location: index.php");
}
