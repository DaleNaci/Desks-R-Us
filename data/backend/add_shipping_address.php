<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    
    require_once("sql_runner.php");


    function add_shipping_address(
        $shipping_address_name,
        $recipient_name,
        $street_num,
        $street_name,
        $zip_code,
        $city,
        $country,
        $state
    ) {
        $cid = $_SESSION["cid"];

        run_sql("
            INSERT INTO shipaddress
                 VALUES (
                         '$shipping_address_name',
                         $cid,
                         '$recipient_name',
                         $street_num,
                         '$street_name',
                         '$zip_code',
                         '$city',
                         '$country',
                         '$state'
                        );
        ");
    }
?>