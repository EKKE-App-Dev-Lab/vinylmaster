

<!DOCTYPE html>
<html lang="en-MU">
<head>
    <meta charset="utf-8">
    <title>VINYLMASTER | Termékek</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    include_once 'connection.php';
    ?>

</head>

<body>


<?php

$Q_fetch_categories = "SELECT * FROM categories";

?>


<?php $page = 'products'?>



    <script>

        function display_products_by_cat_id(cat_id, cat_name){
            var xhttp;

            //AJAX
            console.log('entered ajax');
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    console.log('ready');
                    document.getElementById("result").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "category_search.php?cat_id="+cat_id, true);
            xhttp.send();
            console.log('sent');

            document.getElementById('small_title').innerHTML = 'KATEGÓRIA';
            document.getElementById('big_title').innerHTML = cat_name;

        }

        function sortby_products(sort_num){
            var xhttp;
            //AJAX
            console.log('entered ajax sortby');
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    console.log('ready sortby');
                    document.getElementById("result").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "sortby_search.php?sortby="+sort_num, true);
            xhttp.send();
            console.log('sent sortby');

            document.getElementById('small_title').innerHTML = 'ÁR SZERINT RENDEZVE';

            if(sort_num == 1){
                document.getElementById('big_title').innerHTML = 'növekvő';
            }
            else if(sort_num ==2){
                document.getElementById('big_title').innerHTML = 'csökkenő';
            }

        }

        function display_products_by_type(p_type){
            var xhttp;

            console.log('entered ajax');
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    console.log('ready');
                    document.getElementById("result").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "products_by_type_search.php?p_type="+p_type, true);
            xhttp.send();
            console.log('sent');


            if(p_type==1){
                document.getElementById('small_title').innerHTML = 'új';
            }
            else  if(p_type==2){
                document.getElementById('small_title').innerHTML = 'kiválasztott';
            }
            else  if(p_type==3){
                document.getElementById('small_title').innerHTML = 'értékesítések';
            }
            else  if(p_type==4){
                document.getElementById('small_title').innerHTML = 'best-seller';
            }

            document.getElementById('big_title').innerHTML = 'TERMÉKEK';

        }


        function display_products_by_type_second(p_type){
            var xhttp;

            console.log('entered ajax');
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    console.log('ready');
                    document.getElementById("result2").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "products_by_type_search.php?p_type="+p_type, true);
            xhttp.send();
            console.log('sent');

            if(p_type==1){
                document.getElementById('small_title2').innerHTML = 'új';
            }
            else  if(p_type==2){
                document.getElementById('small_title2').innerHTML = 'kiválasztott';
            }
            else  if(p_type==3){
                document.getElementById('small_title2').innerHTML = 'értékesítések';
            }
            else  if(p_type==4){
                document.getElementById('small_title2').innerHTML = 'best-seller';
            }
            document.getElementById('big_title2').innerHTML = 'TERMÉKEK';
        }
        display_products_by_type(2);
        display_products_by_type_second(1);
    </script>
</body>
</html>