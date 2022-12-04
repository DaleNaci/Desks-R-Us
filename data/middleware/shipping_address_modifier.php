<?php
    require_once("../backend/add_shipping_address.php");

    
    if (isset($_POST["add-shipping-address"])) {
        add_shipping_address(
            $_POST["shipping-address-name"],
            $_POST["recipient-name"],
            $_POST["street-num"],
            $_POST["zip-code"],
            $_POST["city"],
            $_POST["country"],
            $_POST["state"]
        );
    }
?>