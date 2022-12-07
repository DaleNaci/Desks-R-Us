<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    include_once("sql_runner.php");


    function get_current_cart_info() {
        $cid = $_SESSION["cid"];

        $res = run_sql("
            SELECT *
              FROM cart
             WHERE CID = $cid
                   AND TStatus = 'user-shopping';
        ");

        return $res;
    }
?>