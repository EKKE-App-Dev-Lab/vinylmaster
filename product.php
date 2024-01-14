<?php
define('Access', TRUE);
include_once 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>VINYLMASTER | Részletek</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>


<?php
if(isset($_GET['product_id'])){
    $product_id = $_GET['product_id'];

    $Q_get_product = "SELECT * FROM products WHERE productID = '$product_id'";

    $run_get_product = mysqli_query($conn, $Q_get_product);

    $row_product = mysqli_fetch_array($run_get_product);

    $Q_get_type_id = "SELECT * FROM product_type WHERE productID = '$product_id'";
    $run_get_type_id = mysqli_query($conn, $Q_get_type_id);
    $row_type_id = mysqli_fetch_array($run_get_type_id);

    $Q_get_cat_id = "SELECT * FROM product_category WHERE productID = '$product_id'";
    $run_get_cat_id = mysqli_query($conn, $Q_get_cat_id);
    $row_cat_id = mysqli_fetch_array($run_get_cat_id);

    $p_name = $row_product['albumcim'];
    $p_desc = $row_product['leiras'];
    $p_img = $row_product['boritokep'];
    $p_price = $row_product['ar'];
    $typeID = $row_type_id['typeID'];
    $categoryID = $row_cat_id['categoryID'];
}

else{

}
?>




</body>
</html>