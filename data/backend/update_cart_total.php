<?php
    require_once("sql_runner.php");


    function update_cart_total($cart_id) {
        $res = run_sql("
            SELECT PriceSold
              FROM cartitem
             WHERE CartId = $cart_id;
        ");

        $total = 0.0;
        
        foreach($res as $row) {
            $total += (double)$row["PriceSold"];
        }

        run_sql("
            UPDATE cart
               SET TotalAmount = $total
             WHERE CartId = $cart_id;
        ");
    }
?>