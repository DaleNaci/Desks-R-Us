<?php
    include_once("sql_runner.php");


    function get_current_cart_view_info() {
        $res = run_sql("
            SELECT P.PName, P.PPrice, C.Quantity, C.PriceSold
              FROM product as P,
                   cartitem as C
             WHERE P.ProductId = C.ProductId;
        ");

        return $res;
    }
?>