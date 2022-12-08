<?php
    include("../backend/get_current_cart_view_info.php");
    include("../backend/get_current_cart_id.php");


    function get_cart_view_info() {
        $rtn = array();

        $cart_id = (int)(get_current_cart_id()[0]["CartId"]);

        $cart_item_info = get_current_cart_view_info($cart_id);
    
        foreach($cart_item_info as $row) {
            $arr = array(
                $row["PName"],
                $row["PPrice"],
                $row["Quantity"],
                $row["PriceSold"]
            );

            array_push($rtn, $arr);
        }

        return $rtn;
    }
?>