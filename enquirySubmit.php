<?php
if (isset($_POST['btn-send'])) {
    $name = $_POST['full-name'];
    $email = $_POST['email'];
    $subject = "WEBSITE ENQUIRY NOTICE";
    $dob = "\r\n Date of Birth: " . $_POST['dob'];
    $mobileNumber = "\r\n Phone Number: " . $_POST['mobile-number'];
    $gender = "\r\n Gender: " . $_POST['gender'];
    $visastatus = "\r\n Visa Applied Before: " . $_POST['visa-status'];
    $familyContact = "\r\n Family Contact: " . $_POST['family-contact'];
    $country = "\r\n Country to Apply: " . $_POST['country'];
    $course = "\r\n Course to Study: " . $_POST['course'];
    $level = "\r\n Level: " . $_POST['level'];
    $passedDate = "\r\n Passed Date: " . $_POST['passed-date'];
    $faculty = "\r\n Faculty: " . $_POST['faculty'];
    $grade = "\r\n Grade/Percentage: " . $_POST['grade'];
    $school = "\r\n School/University: " . $_POST['school'];
    $testStatus = "\r\n Previous English Proficiency Test Status: " . $_POST['test-status'];
    $testType = "\r\n Test Type: " . $_POST['test-type'];
    $score = "\r\n Obtained Score: " . $_POST['score'];

    $mailheader = "From: " . $name . "<" . $email . ">\r\n";

    $finalmessage = "Name: " . $name . "\r\n Email = " . $email . $dob . $mobileNumber . $gender . $visastatus . $familyContact . $country . $course . $level . $passedDate . $faculty . $grade . $school . $testStatus . $testType . $score;

    $recipient = "kamal@neccedu.com";
    if (mail($recipient, $subject, $finalmessage, $mailheader)) {
        header("location:enquiry.php?success");
    }
} else {
    header("location: enquiry.php");
}
