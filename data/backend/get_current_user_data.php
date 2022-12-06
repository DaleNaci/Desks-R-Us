<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    
    require_once("sql_runner.php");


    function get_current_user_data() {
        $cid = $_SESSION["cid"];

        $res = run_sql("
            SELECT *
              FROM customer
             WHERE CID = $cid;
        ");

        return $res[0];
    }
?>