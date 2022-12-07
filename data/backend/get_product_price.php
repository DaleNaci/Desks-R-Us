<?php
    include_once("sql_runner.php");

    function get_product_price($product_id) {
        $res = run_sql("
            SELECT PPrice
              FROM product
             WHERE ProductId = $product_id;
        ");

        return $res;
    }
?>