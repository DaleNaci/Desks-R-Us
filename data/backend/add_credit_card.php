<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    
    require_once("sql_runner.php");


    function add_credit_card(
        $card_num,
        $security_num,
        $card_owner_name,
        $card_type,
        $billing_address,
        $exp_date
    ) {
        $cid = $_SESSION["cid"];

        run_sql("
            INSERT INTO creditcard
                 VALUES (
                         '$card_num',
                         '$security_num',
                         '$card_owner_name',
                         '$card_type',
                         '$billing_address',
                         '$exp_date'
                        );
        ");

        run_sql("
            INSERT INTO storedcard
                 VALUES (
                         '$card_num',
                         $cid
                        );
        ");
    }
?>