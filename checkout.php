<?php
define('Access', TRUE);

include "./AdditionalPHP/startSession.php";
include_once 'connection.php';

$validated = false;

// változók definiálása és beállitása üres értékre
$fname = $lname = $email = $address = $country = $city = $zip = $paymentMethod = $ccname = $ccnum = $ccexp_m = $ccexp_y = $cccvv = "";
$fnameErr = $lnameErr = $emailErr = $addressErr = $countryErr = $cityErr = $zipErr = $paymentMethodErr = $ccnameErr = $ccnumErr = $ccexpErr = $cccvvErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //KERESZTNÉV VALIDÁLÁSA
    $fname = test_input($_POST["fname"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
        $fnameErr = "Csak betű és szóköz engedélyezett";
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>VINYLMASTER | Pénztár</title>

    <link href="checkout/bootstrap.min.css" rel="stylesheet">
    <link href="checkout/form-validation.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <main>

        <!-- CÍM -->
        <div class="py-5 text-center">
            <h1 class="business-name">VINYLMASTER</h1>
            <h2>Rendelési összesítő</h2>
        </div>

        <!-- KOSARAM  -->
        <div class="row g-3">
            <div class="col-md-5 col-lg-4 order-md-last">

                <!-- KOSARAD / KOSÁR ÉRTÉK -->
                <h4 class="d-flex justify-content-between align-items-center my-cart mb-3">
                    <span class="text-muted">Kosarad</span>
                    <!-- //KÁRTYA SZÁM -->
                    <span class="badge cart-number bg-pink rounded-pill"><?php if (isset($_SESSION['item_quantity'])) {
                            echo $_SESSION['item_quantity'];
                        } else {
                            echo "0";
                        } ?></span>
                </h4>

                <!-- KOSÁRBAN LÉVŐ ELEMEK + VÉGÖSSZEG -->
                <ul class="list-group mb-3">
                    <?php
                    foreach ($_SESSION['shopping_cart'] as $key => $product) {
                        $Q_fetch__all_products = "SELECT * FROM products";
                        $result_product = mysqli_query($conn, $Q_fetch__all_products);

                        while ($product_row = mysqli_fetch_assoc($result_product)) {
                            if ($product_row['productID'] == $product['id']) {
                                ?>


                                <!-- TERMÉK 1  -->
                                <li class="list-group-item d-flex justify-content-between lh-sm linen-rows">
                                    <div>
                                        <h6 class="my-0"><?php echo $product_row['albumcim']; ?></h6>
                                        <small class="text-muted">x <?php echo $product['quantity']; ?> db</small>
                                    </div>
                                    <span class="text-muted price-tag">HUF <?php echo number_format(($product['quantity'] * $product_row['ar']), 2); ?></span>
                                </li>

                                <?php
                            }
                        }

                    }//end foreach
                    ?>

                    <!-- VÉGÖSSZEG -->
                    <li class="list-group-item d-flex justify-content-between total-row">
                        <span>Végösszeg (HUF)</span>
                        <strong class="price-tag">HUF <?php echo number_format($_SESSION['total_price'], 2); ?></strong>
                    </li>
                </ul>

            </div>
        </div>
    </main>
</div>


<script src="checkout/bootstrap.bundle.min.js"></script>
<script src="checkout/form-validation.js"></script>

</body>
</html>
