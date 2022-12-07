<?php
    require_once("sql_runner.php");


    function check_for_cart_item($cart_id, $product_id) {
        $res = run_sql("
            SELECT *
              FROM cartitem
             WHERE CartId = $cart_id
                   AND ProductId = $product_id;
        ");

        return !empty($res);
    }
?>