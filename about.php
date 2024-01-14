<?php 
    define('Access', TRUE);
    include "./AdditionalPHP/startSession.php";
?>

<!DOCTYPE html>
<html lang="en-MU">
    <head>
        <meta charset="utf-8">
        <title>VINYLMASTER | RÓLUNK</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--CSS File-->   
        <link rel="stylesheet" type="text/css" href="Common.css">
        <link rel="stylesheet" type="text/css" href="Atish.css">
        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/0e16635bd7.js" crossorigin="anonymous"></script>
        <!--BOXICONOK-->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <!-- Animált CSS -->
        <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    </head>

    <body>
        <?php $page = 'about';?>

        <!-- Start Google Map-->
            <?php include './Includes/GoogleMap.php';?>
        <!-- End Google Map-->


        <!-- Start Kapcsolatfelvétel -->
        <?php include './Includes/ContactUsForm.php';?>
        <!-- End Kapcsolatfelvétel-->
        

        <!--Start Hírfolyam-->
        <?php include './Includes/NewsLetter.php';?>
        <!--End Hírfolyam-->


        <!--Start Footer-->
        <?php include './Includes/Footer.php';?>
        <!--End Footer-->

        
        <!-- Start Alsó Nav -->
        <?php include './Includes/MobileBottomNav.php';?>
        <!-- End Alsó Nav -->

    </body>
</html>