<?php

include_once 'connection.php';

$p_type = $_REQUEST['p_type'];
$Q_fetch_by_type = "SELECT * FROM products INNER JOIN product_type ON products.productID = product_type.productID WHERE product_type.typeID = '$p_type' ";
$Q_fetch_new = "SELECT * FROM products INNER JOIN product_type ON products.productID = product_type.productID WHERE product_type.typeID = 1";

$result = mysqli_query($conn, $Q_fetch_by_type);
$check = mysqli_num_rows($result);

if ($check > 0 && $p_type != 1) {

    while ($row = mysqli_fetch_assoc($result)) {
        $product_id = $row['productID'];

        echo ' <div class="" id="product__card">
                       <div class="">
                           <div class="">Kiemelt</div>
                           <a href="">
                               <img src="' . $row['boritokep'] . ' "  class=" " 
                               style="
                                   object-fit: cover;
                                   width:  232px;
                                   height: 232px;" 
                               />
                           </a>
                       </div>';

        echo ' <div class=""> ';
        $product_id = $row['productID'];

        echo '<a href="" style="text-decoration: none;">
                           <h4 class="" id="product__name">' . $row['albumcim'] . '</h4>
                           </a> ';

        echo '<span class="">HUF ' . $row['ar'] . '</span>
                           
                       </div>
                   </div> ';
    }
} else if ($p_type == 1) {
    $result_new = mysqli_query($conn, $Q_fetch_new);
    $check = mysqli_num_rows($result_new);

    if ($check > 0) {
        while ($new_row = mysqli_fetch_assoc($result_new)) {
            echo '  <div class="">
                        <img src="' . $new_row['boritokep'] . ' " class="" />
                        <div class="">
                            <a href="" class="button"> TERMÉK MEGTEKINTÉSE</a>
                        </div>
                    </div> ';
        }
    }
}
?>


