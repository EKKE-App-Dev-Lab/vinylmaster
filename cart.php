<?php
define('Access', TRUE);

//SESSION START
include "./AdditionalPHP/startSession.php";

//KAPCSOLÓDÁS AZ ADATBÁZISHOZ : VINYLMASTER
include_once 'connection.php';
?>

<?php
//Törlés gomb
//A törlés gomb ugyanazt az oldalt tölti be, de további információt ad az URL-ben
//cart.php?action=delete&product_id=<?php echo ...
//leellenőrzi, hogy az URL tartalmaz-e action=delete
if(filter_input(INPUT_GET, 'action') == 'delete'){
    //loop az összes termék a bevásárló kosárban session-tömbben amíg az id nem egyezik a url-vel
    foreach($_SESSION['shopping_cart'] as $key => $product){

        //Ellenőrzi, hogy az URL-ben található termék azonosítója (amikor a törlés gombra kattintanak) egyezik-e eggyel a bevásárló kosár session tömbjéből
        if($product['id'] == filter_input(INPUT_GET, 'product_id')){
            //törli az elemet a session tömbből
            unset($_SESSION['shopping_cart'][$key]);
        }
    }

    //session tömb kulcsainak visszaállítása, hogy egyezzenek a $product_ids számokat tartalmazó tömb kulcsaival
    $_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']);

    //SOR TÖRLÉSE A CARTITEM TÁBLÁBÓL
    $Q_delete_cartitem = 'DELETE FROM cartitem WHERE productID = '.filter_input(INPUT_GET, 'product_id');
    $run_delete_cartitem = mysqli_query($conn, $Q_delete_cartitem);

}
?>

<html>
<head>
    <meta charset="utf-8">
    <title>VINYLMASTER | Részletek</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--========== PHP KAPCSOLAT LÉTREHOZÁSA AZ ADATBÁZIOSSAL: VINYLMASTER ==========-->
    <?php

    include_once 'numOfItemsInCart.php';
    ?>

    <!--========== CSS FILES ==========-->
    <link rel="stylesheet" type="text/css" href="Common.css">
    <link rel="stylesheet" type="text/css" href="Sanjana.css">

    <link href="jquery.nice-number.css" rel="stylesheet">
    <!--========== JQUERY CDN ==========-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script src="jquery.nice-number.js"> </script>
    <script type="text/javascript">
        $(function(){
            $('input[type="number"]').niceNumber();
        });
    </script>
</head>
</html>
