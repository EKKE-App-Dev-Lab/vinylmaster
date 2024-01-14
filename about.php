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

        <!--Start Navigációs Sáv-->
        <?php include './Includes/MobileNavBar.php';?>
        <!--End Navigációs Sáv-->


        <!--Start Navigációs Sáv @media 1200px-->
        <?php include './Includes/PcNavBar.php';?>
        <!--End Navigációs Sáv @media 1200px-->


        <!--Start Fejléc-->
        <div class="about-us-header">
            <div class="banner-group">
                <div class="banner"></div>
            </div>
            
            <div class="about-us-subtitle">
                <span>RÓLUNK</span>
            </div>
        </div>
        <!--End Fejléc-->


        <!--Start Mester Info-->
        <div class="baker-info-group">
            <div class="baker-info-container">
                <div class="baker-info-text">
                    <div class="baker-info-title">
                        <span>Mesterünk</span>
                    </div>
        
                    <div class="baker-name">
                        <span>KONNER SÁRA</span>
                    </div>
        
                    <div class="baker-description">
                        <p>“Madonna - Erotica, The Rolling Stones - Promotional, Rolling Stones - Their Satanic Majesties Request, Dark - Dark Round The Edges, The Bread And Beer - LP, The Quarrymen,Sex Pistols - God Save The Queen. Ez csak pár lemez, a legsikeresebbek közül.”</p>
                    </div>
        
                    <div class="baker-signature">
                        <div class="signature-photo"></div>
                    </div>
        
                    <div class="baker-position">
                        <span>CEO - VINYLMASTER Bakelit Lemezbolt</span>
                    </div>
                </div>
                
                <div class="baker-photo-group">
                    <div class="baker-photo"></div>
                </div>
            </div>
        </div>
        <!--End Mester Info-->
        

        <!--Start Kitüntetések-->
        <div class="award-section">
            <div class="award-title">
                <span>Kitüntetéseink</span>
            </div>

            <div class="subtitle">
                <h2>DÍJNYERTES</h2>
            </div>

            <div class="award-badge-container">
                <div class="award-badge-group">
                    <div class="badge badge1">
                        <div class="badge-photo-group">
                            <div class="badge-photo"></div>
                        </div>
                        
                        <div class="badge-info">
                            <span class="badge-title">A ÉV LEMEZBOLTJA</span>
                            <span class="badge-date">2010-2011</span>
                            <p class="badge-description">Legtöbb eladott minőségi bakelit lemez Magyarországon!</p>
                        </div>
                    </div>
                </div>
    
                <div class="award-badge-group">
                    <div class="badge badge2">
                        <div class="badge-photo-group">
                            <div class="badge-photo"></div>
                        </div>
                        
                        <div class="badge-info">
                            <span class="badge-title">A ÉV LEMEZBOLTJA</span>
                            <span class="badge-date">2015-2016</span>
                            <p class="badge-description">Legtöbb eladott minőségi bakelit lemez Magyarországon!</p>
                        </div>
                    </div>
                </div>
    
                <div class="award-badge-group">
                    <div class="badge badge3">
                        <div class="badge-photo-group">
                            <div class="badge-photo"></div>
                        </div>
                        
                        <div class="badge-info">
                            <span class="badge-title">AZ ÉV BAKELIT LEMEZ KÉSZÍTŐJE</span>
                            <span class="badge-date">2019-2020</span>
                            <p class="badge-description">Legtöbb minőségi bakelit lemez elkészítését és forgalomba helyezését végezte Magyarországon 2019-ben!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Kitüntetések-->



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