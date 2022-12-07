<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    require_once("sql_runner.php");
    require_once("get_next_id.php");


    function create_cart() {
        $cart_id = get_next_id("cart");
        $cid = $_SESSION["cid"];

        run_sql("
            INSERT INTO cart
                 VALUES (
                         $cart_id,
                         NULL,
                         $cid,
                         NULL,
                         NULL,
                         NULL,
                         0
                        );
        ");
    }
?>