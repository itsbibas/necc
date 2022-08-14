<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="web icon" type="image/x-icon" href="assets/img/necc.png">
    <title>NECC Educational Consultancy ||
        <?php echo $title ?> </title>
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- Custom Links & framwork -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="http://fonts.cdnfonts.com/css/maximum-impact" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">


<body>

    <div id="prenav" class="pre-nav">
        <i style="margin-right: 0.5%;" class="fa-solid fa-envelope"></i>
        <a class="contact-section rev" href="mailto:info@neccedu.com" target="_blank">info@neccedu.com</a>
        <p style="margin: 0 2% ;">|</p>
        <i style="margin-right: 0.5%;" class="fa-solid fa-phone"></i>
        <a class="contact-section rev" href="tel:+97771503394" target="_blank">+977 71-503394, 9841664444</a>
    </div>

    <div style="height: 25px;" id="pre-nav-adjustment"></div>

    <nav>
        <div class="main-logo-section">
            <a href="index.php"><img class="main-logo" src="assets/img/necc.png" alt=""></a>
        </div>

        <div id="mobile-view">
            <ul>
                <li><a class="<?php echo $currentpage == 'index' ? 'active' : '' ?>" href="index.php">Home</a></li>
                <li><a class="<?php echo $currentpage == 'whyus' ? 'active' : '' ?>" href="whyus.php">About Us</a></li>
                <li><a class="<?php echo $currentpage == 'services' ? 'active' : '' ?>" href="services.php">Services</a> </li>
                <li><a class="<?php echo $currentpage == 'blogs' ? 'active' : '' ?>" href="blogs.php">Blogs</a></li>
                <li><a class="<?php echo $currentpage == 'studyabroad' ? 'active' : '' ?>" href="study-abroad.php">Study Abroad</a></li>
                <li><a class="<?php echo $currentpage == 'enquiry' ? 'active' : '' ?>" href="enquiry.php">Enquiry</a></li>
                <li><a class="<?php echo $currentpage == 'contact' ? 'active' : '' ?>" href="contact.php">Contact</a></li>
            </ul>
        </div>
        <div class="toggle-button" id="toggle">
            <span class="bar1"></span>
            <span class="bar2"></span>
            <span class="bar3"></span>
        </div>
    </nav>

    <script src="js/main.js"></script>

    <div class="div-adjustment"></div>