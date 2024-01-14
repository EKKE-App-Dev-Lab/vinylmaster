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
    // leellenőrzi, hogy csak betűket és spacet tartalmaz-e
    if (!preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
        $fnameErr = "Csak betű és szóköz engedélyezett";
    }

    //VEZETÉKNÉV VALIDÁLÁSA
    $lname = test_input($_POST["lname"]);
    // leellenőrzi, hogy csak betűket és spacet tartalmaz-e
    if (!preg_match("/^[a-zA-Z-' ]*$/", $lname)) {
        $lnameErr = "Csak betű és szóköz engedélyezett";
    }

    //EMAIL VALIDÁLÁSA
    $email = test_input($_POST["email"]);
    // ellenőrzi a formátumot
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Érvénytelen email cím formátum";
    }

    //CÍM VALIDÁLÁSA
    $address = test_input($_POST["address_checkout"]);
    // Ellenőrizze, hogy a cím számmal kezdődik-e, azt követik-e betűk, tartalmaz-e szóközt, kötőjelet és vesszőt.
    if (!preg_match("/^[0-9a-zA-Z\s,-]+$/", $address)) {
        $addressErr = "Érvénytelen cím";
    }

    //VÁROS VALIDÁLÁSA
    $city = test_input($_POST["city"]);
    // ellenőrzi, hogy city == options
    if ($city == "Port Louis" || $city == "Curepipe" || $city == "Vacoas" || $city == "Quatre Bornes" || $city == "Rose Hill" || $city == "Flic En Flac" || $city == "Phoenix") {
        //valid
    } else {
        $cityErr = "Érvénytelen város";
    }

    //IRÁNYÍTÓSZÁM VALIDÁLÁSA
    $zip = test_input($_POST["zip"]);
    // ellenőrzi, hogy az irányítószám pontosan 5 számjegyet tartalmaz.
    if (!preg_match("/^[0-9]{5}/", $zip)) {
        $zipErr = "Érvénytelen irányítószám";
    }

    //FIZETÉSI METÓDUS VALIDÁLÁSA
    $paymentMethod = test_input($_POST["paymentMethod"]);

    //REGEX KÁRTYATÍPUS ALAPJÁN
    $cardtype = array(
        "visa" => "/^4[0-9]{15}$/",
        // "mastercard" => "/^5[1-5][0-9]{14}$/"

    );

    //HITELKÁRTYA NÉV ÉRVÉNYESSÉGELLENŐRZÉS
    $ccname = test_input($_POST["ccname"]);
    // Ellenőrzi, hogy a hitelkártya név csak betűket és szóközöket tartalmaz-e.
    if (!preg_match("/^[a-zA-Z-' ]*$/", $ccname)) {
        $ccnameErr = "Csak betű és szóköz engedélyezett";
    }

    //HITELKÁRTYASZÁM VALIDÁLÁSA
    $ccnum = test_input($_POST["ccnum"]);
    // ellenprzi, hogy a hitelkártyaszám illeszkedik-e a kártyatípusnak megfelelő regexbe
    if (!preg_match($cardtype['visa'], $ccnum)) {
        $ccnumErr = "Érvénytelen kártyaszám
          <br>
          Elnézést! Jelenleg a rendszerünk a VISA és MasterCard kártyákat támogatja.";
    }

    //HITELKÁRTYA LEJÁRATI DÁTUM VALIDÁLÁSA
    if (empty($_POST["ccexp_m"]) || empty($_POST["ccexp_y"])) {
        $ccexpErr = "Kérlek add meg a lejárati dátumot";
    } else {
        $ccexp_m = test_input($_POST["ccexp_m"]);
        $ccexp_y = test_input($_POST["ccexp_y"]);
        //VALIDÁLJA A HÓNAPOT
        if ((int)$ccexp_m > 0 && (int)$ccexp_m < 13) {
            //VALIDÁLJA AZ ÉVET
            if ((int)$ccexp_y > 1900 && (int)$ccexp_y < 4000) {
                $expired_check = \DateTime::createFromFormat('my', $ccexp_m . $ccexp_y);
                $month_now = date('m');
                $year_now = date('y');
                $now = new \DateTime();

                //ELLENŐRZI, HOGY LEJÁRT-E A KÁRTYA
                if ($year_now < (int)$ccexp_y) {
                } else if ($year_now == (int)$ccexp_y) {
                    if ($month_now < (int)$ccexp_m) {
                    } else {
                        $ccexpErr = "A kártya már lejárt";
                    }
                } else {
                    $ccexpErr = "A kártya már lejárt.";
                }
            } else {
                $ccexpErr = "Érvénytelen év";
            }
        } else {
            $ccexpErr = "Érvénytelen lejárati dátum";
        }
    }


    //HITELKÁRTYA CVV VALIDÁLÁSA
    $cccvv = test_input($_POST["cccvv"]);
    if (preg_match("/^[0-9]{3,4}$/", $cccvv)) {
    } else {
        $cccvvErr = "Érvénytelen CVV";
    }
    if ($fnameErr == "" && $lnameErr == "" && $emailErr == "" && $addressErr == "" && $countryErr == "" && $cityErr == "" && $zipErr == "" && $paymentMethodErr == "" && $ccnameErr == "" && $ccnumErr == "" && $ccexpErr == "" && $cccvvErr == "") {
        $validated = true;
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
            <!-- SZÁMLÁZÁSI CÍM  -->
            <div class="col-md-7 col-lg-8">

                <h4 class="mb-3 border-bottom-pink">Számlázási cím</h4>


                <form action=
                      "
            <?php
                      if ($validated) {
                          echo 'ThankYouCheckout.php';
                          $validated = false;
                      } else {
                          echo htmlspecialchars($_SERVER["PHP_SELF"]);
                      }

                      ?>"
                      class="needs-validation" method="POST">
                    <div class="row g-3">


                        <!--  KERESZTNÉV MEGADÁSA  -->
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">Keresztnév</label>
                            <input type="text" class="form-control" name="fname" id="firstName" placeholder=""
                                   value="<?php echo $fname; ?>" required>
                            <div class="invalid-feedback">
                                Érvényes keresztnév szükséges.
                            </div>
                            <span class="error"><?php echo $fnameErr; ?></span>
                        </div>


                        <!-- VEZETÉKNÉV MEGADÁSA -->
                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">Vezetéknév</label>
                            <input type="text" class="form-control" name="lname" id="lastName" placeholder=""
                                   value="<?php echo $lname; ?>" required>
                            <div class="invalid-feedback">
                                Érvényes vezetéknév szükséges.
                            </div>
                            <span class="error"><?php echo $lnameErr; ?></span>
                        </div>
                    </div>
    </main>
</div>


<script src="checkout/bootstrap.bundle.min.js"></script>
<script src="checkout/form-validation.js"></script>

</body>
</html>
