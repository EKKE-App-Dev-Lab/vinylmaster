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
?>