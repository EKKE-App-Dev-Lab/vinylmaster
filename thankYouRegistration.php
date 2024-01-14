<?php
    include "./AdditionalPHP/startSession.php";
    
    if(isset($_COOKIE['thankYouCookie'])){
        define('Access', TRUE);
    }
    else {
        echo 'Access Denied!';
    }
?>

