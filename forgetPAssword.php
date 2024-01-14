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
        }
    } 
      
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    } 