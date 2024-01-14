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


<div class="container mx-auto mt-0 pt-0 ">
    <div class="row continue-shop-div text-center">
        <a href="products.php" class="button continue" id="cat-but" >Folytatás</a>
    </div>
    <div class="row">
        <div class="col-md mt-4 mx-auto ">
            <img src="<?php echo $p_img;?>" class="product-image" />
        </div>
        <div class="col mt-4">
            <h1><?php echo $p_name;?></h1>
            <h2>HUF <?php echo $p_price;?></h2>
            <!-- INPUT MENNYISÉG -->
            <form id="form-pd" method="POST" action="product.php?action=add&product_id=<?php echo $product_id; ?>">
                <div class="box my-4">
                    <label class="subtitle" style="margin-left: 2.7rem;
                                margin-bottom: .8rem; font-weight: 700; color: grey; ">Mennyiség</label><br>
                    <input type="number" value="1" min="1" max="100" name= "input_quantity" id= "input_quantity" class="input-quantity mx-2 p-3 px-4">
                    <input type="hidden" name="name" value="<?php echo $p_name;?>" />
                    <input type="hidden" class="show_id" name="productID_id" value="<?php echo $product_id;?>" />
                    <input type="hidden" name="price" value="<?php echo $p_price;?>" /> <br>
                    <input type="submit" name="add-to-cart" id="add-to-cart-btn" value="Kosárba" class="btn btn-primary btn-lg my-4 button" />

                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="product-description my-3">
            <div class="description">
                <h2>leírás</h2>
            </div>
            <div class="para_details py-2 px-4 my-3 ">
                <p>
                    <?php echo $p_desc;?>
                </p>
            </div>
        </div>
    </div>
</div>

</body>
</html>