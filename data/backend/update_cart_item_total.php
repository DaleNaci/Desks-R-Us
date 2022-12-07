<?php
    require_once("sql_runner.php");


    function update_cart_item_total($cart_id, $product_id) {
        $res = run_sql("
            SELECT PPrice
              FROM product
             WHERE ProductId = $product_id;
        ");

        $price = $res[0]["PPrice"];

        $res = run_sql("
            SELECT Quantity
              FROM cartitem
             WHERE CartId = $cart_id
                   AND ProductId = $product_id;
        ");

        $quantity = $res[0]["Quantity"];

        $price_sold = $price * $quantity;

        run_sql("
            UPDATE cartitem
               SET PriceSold = $price_sold
             WHERE CartId = $cart_id
                   AND ProductId = $product_id;
        ");
    }

    update_cart_item_total(1, 1);
?>