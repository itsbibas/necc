<?php
if (isset($_POST['btn-send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = "WEBSITE CONTACT US NOTICE";
    $message = $_POST['message'];

    $mailheader = "From: " . $name . "<" . $email . ">\r\n";

    $recipient = "kamal@neccedu.com";
    if (mail($recipient, $subject, $message, $mailheader)) {
        header("location:index.php?success");
    }
} else {
    header("location: index.php");
}
