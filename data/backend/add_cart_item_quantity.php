<?php
    require_once("sql_runner.php");


    function add_cart_item_quantity($cart_id, $product_id, $quantity) {
        run_sql("
            UPDATE cartitem
               SET quantity = quantity + $quantity
             WHERE CartId = $cart_id
                   AND ProductId = $product_id;
        ");
    }
?>