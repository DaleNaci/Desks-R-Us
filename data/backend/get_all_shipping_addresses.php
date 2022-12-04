<?php
    session_start();
    
    require_once("sql_runner.php");


    function get_all_shipping_addresses() {
        $cid = $_SESSION["cid"];

        $res = run_sql("
            SELECT *
              FROM shipaddress
             WHERE CID = $cid;
        ");

        return $res;
    }
?>