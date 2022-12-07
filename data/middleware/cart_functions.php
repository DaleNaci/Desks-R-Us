<?php
    include_once("../backend/update_cart_on_order.php");
    include_once("../backend/get_current_cart_id.php");


    if (isset($_POST["confirm-order"])) {
        $card_num = $_POST["credit-card-num"];
        $shipping_address_name = $_POST["shipping-address-name"];

        $cart_id = get_current_cart_id()[0]["CartId"];

        $current_date = date("Y-m-d");

        update_cart_on_order($cart_id, $card_num, $shipping_address_name, $current_date);

        header("Location: ../frontend/transaction_history.php");
    }
?>