<?php
    include_once("../backend/get_all_cart_info.php");
    include_once("../backend/get_cart_purchase_info.php");


    function get_order_history() {
        $rtn = array();

        $cart_info = get_all_cart_info();

        $arr = array();

        foreach ($cart_info as $cart) {
            $cid = $cart["CID"];

            $purchase_info = get_cart_purchase_info($cart["CartId"]);

            $p_arr = array();

            foreach ($purchase_info as $purchase) {
                $temp_arr = array(
                    "product-name" => $purchase["PName"],
                    "quantity" => $purchase["Quantity"],
                    "total-price" => $purchase["PriceSold"]
                );

                array_push($p_arr, $temp_arr);
            }

            $arr = array(
                "cart-id" => $cart["CartId"],
                "card-num" => $cart["CardNumber"],
                "sa-name" => $cart["SAName"],
                "date" => $cart["TDate"],
                "total-amount" => $cart["TotalAmount"],
                "status" => $cart["TStatus"],
                "purchase-info" => $p_arr
            );

            array_push($rtn, $arr);
        }

        return $rtn;
    }
?>