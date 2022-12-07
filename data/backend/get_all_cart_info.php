<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    
    require_once("sql_runner.php");


    function get_all_cart_info() {
        $cid = $_SESSION["cid"];

        $res = run_sql("
            SELECT *
              FROM cart
             WHERE CID = $cid;
        ");

        return $res;
    }
?>