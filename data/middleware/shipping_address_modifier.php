<?php
    require_once("../backend/add_shipping_address.php");
    require_once("../backend/get_all_shipping_addresses.php");

    
    if (isset($_POST["add-shipping-address"])) {
        add_shipping_address(
            $_POST["shipping-address-name"],
            $_POST["recipient-name"],
            $_POST["street-num"],
            $_POST["street-name"],
            $_POST["zip-code"],
            $_POST["city"],
            $_POST["country"],
            $_POST["state"]
        );
    }

    function get_shipping_addresses() {
        $rtn = array();

        $sa_data = get_all_shipping_addresses();

        foreach ($sa_data as $row) {
            $arr = array(
                $row["SAName"],
                $row["RecipientName"],
                $row["SNumber"],
                $row["Street"],
                $row["Zip"],
                $row["City"],
                $row["Country"],
                $row["State"]
            );

            array_push($rtn, $arr);
        }

        return $rtn;
    }
?>