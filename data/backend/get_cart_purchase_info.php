<?php
    require_once("sql_runner.php");


    function get_cart_purchase_info($cart_id) {
        $res = run_sql("
            SELECT *
              FROM cartitem as C,
                   product as P
             WHERE C.ProductId = P.ProductId
                   AND C.CartId = $cart_id;
        ");

        return $res;
    }
?>