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
        } else {
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
                    $sql = "SELECT * FROM user WHERE email='$email'";
                    $result= mysqli_query($conn, $sql);

                    if(mysqli_num_rows($result) === 1){
                        $row = mysqli_fetch_assoc($result);

                        $uname = $row['uname'];

                        $alphas = range('A', 'Z');
                        $numbers = range(0,26);
                        $symbols = array('@', '#', '$', '%');

                        $newPassword = "";
                        $passLength = rand(8,20);

                        for($i = 0; $i <= $passLength; $i++)
                        {
                            $a = $alphas[rand(0,25)];
                            $n = $numbers[rand(0,25)];
                            $s = $symbols[rand(0,3)];

                            $newPassword .= $a . $n . $s;
                        }

                        $to = $row['email'];
                        $subject = "Jelszó visszaállítása";
                        $message = "Username: <b>$uname</b><br>Jelszó: <b>$newPassword</b><br><br><b>Belépés után egyből változtasd meg a jelszavad.</b>";
                        $headers = "From: malako.cakeshop@gmail.com \r\n";
                        $headers .= "MIME-Version: 1.0" . "\r\n";
                        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                        mail($to, $subject, $message, $headers);

                        $passHash = password_hash($newPassword, PASSWORD_BCRYPT);

                        $sql = "UPDATE user SET pass='$passHash' WHERE uname='$uname'";

                        if(mysqli_query($conn, $sql)){
                            setcookie("resetPassword","resetMailSent");
                            header('location: passwordResetPage.php');
                        }
                    } else {
                        $errCriteria = "A felhasználói fiók nem található!";
                    }
                    
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
?>