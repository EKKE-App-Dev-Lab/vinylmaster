<?php 
    define('Access', TRUE);
    include "./AdditionalPHP/startSession.php";
?>

<?php
    include "connection.php";

    $email = "";
    $errCriteria = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if ((empty($_POST['email']))){
            $errCriteria = "Email megadása szükséges!";
        }else {
            $email = test_input($_POST["email"]);
            // ellenőrizzük, hogy az email megfelelő formátumú-e
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailCriteria = "Email formátum nem megfelelő";
            }
            else {
                $captcha = $_POST["g-recaptcha-response"];
                $secretkey = "6LdT9A0aAAAAAPb_m1z6qx8ryZzlAhr8xRTk-uP3";
                $url = 'https://www.google.com/recaptcha/api/siteverify?secret='.urldecode($secretkey).'&response='.urldecode($captcha).'';
                $response = file_get_contents($url);
                $responseKey = json_decode($response, TRUE);
                
                if($responseKey['success'])
                {

                } else {
                    $errCriteria = "Kérlek hitelesítsd a reCAPTCHA-t!";
                }
                
            }
        }
    } 
      
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    } 