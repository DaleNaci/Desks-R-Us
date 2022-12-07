<?php
    require_once("sql_runner.php");


    function add_cart_item($cart_id, $product_id, $price, $quantity) {
        $price_sold = $price * $quantity;

        run_sql("
            INSERT INTO cartitem
                 VALUES (
                         $cart_id,
                         $product_id,
                         $quantity,
                         $price_sold
                        );
        ");
    }
?>