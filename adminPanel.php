<?php
    include "./AdditionalPHP/startSession.php";
    include "./AdditionalPHP/checkAccess.php";

    $uname = $_SESSION['uname'];
    
    include "connection.php";

    $sql = "SELECT * FROM user WHERE uname='$uname'";
    $result= mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
    }

    $uname = $row['uname'];
    $password = $row['pass'];
    $fname = $row['fname'];
    $lname = $row['lname'];
    $email = $row['email'];
    $address = $row['address'];
    $phone = $row['phone'];
    $description = $row['description'];

    $titleName = strtoupper($fname);

    include "./AdditionalPHP/updateProfile.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST['sendMail'])){
            if(!empty($_POST['message'])) {

                $message = test_input($_POST['message']);
                
                $sql = "SELECT email FROM user WHERE isSubscribed = 1";
                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) > 0)
                {
                    $emailArray = Array();

                    while ($row =  mysqli_fetch_assoc($result)) {
                        $emailArray[] =  $row['email'];
                    }

                    $to = "asd.asd@gmail.com";
                    if(isset($_POST['subject']))
                    {
                        $subject = test_input($_POST['subject']);
                    }
                    $msg = $message;
                    $headers = "From: asd.asd@gmail.com \r\n";
                    $headers .= "Bcc: " . implode(",", $emailArray) . "\r\n";
                    $headers .= "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                    mail($to, $subject, $msg, $headers);
                    // megakadályozza a levelek újabb elküldését minden oldalfrissítés alkalmával.
                    header("location: $_SERVER[PHP_SELF]");
                }
            }
        }
    }
?>