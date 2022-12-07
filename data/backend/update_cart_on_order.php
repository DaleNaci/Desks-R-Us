<?php
    include_once("sql_runner.php");


    function update_cart_on_order($cart_id, $card_num, $sa_name, $date) {
        run_sql("
            UPDATE cart
               SET CardNumber = $card_num,
                   SAName = '$sa_name',
                   TDate = '$date',
                   TStatus = 'being-delivered'
             WHERE CartId = $cart_id;
        ");
    }
?>