<?php
    require_once("sql_runner.php");


    function get_all_product_ids() {
        $res = run_sql("
            SELECT ProductId
              FROM product;
        ");

        return $res;
    }
?>