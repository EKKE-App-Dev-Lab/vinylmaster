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
