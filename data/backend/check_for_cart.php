<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    require_once("sql_runner.php");


    function check_for_cart() {
        $cid = $_SESSION["cid"];

        $res = run_sql("
            SELECT *
              FROM cart
             WHERE CID = $cid;
        ");

        return !empty($res);
    }
?>