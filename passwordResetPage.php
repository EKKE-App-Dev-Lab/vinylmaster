<?php
    include "./AdditionalPHP/startSession.php";
    
    if(isset($_COOKIE['resetPassword'])){
        define('Access', TRUE);
    }
    else {
        echo 'Access Denied!';
    }
?>