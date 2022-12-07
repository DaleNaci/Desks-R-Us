<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    include_once("sql_runner.php");


    function get_cart_id() {
        $cid = $_SESSION["cid"];

        $res = run_sql("
            SELECT CartId
              FROM cart
             WHERE CID = $cid;
        ");

        return $res;
    }
?>