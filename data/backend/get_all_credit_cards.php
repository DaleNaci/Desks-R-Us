<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    
    require_once("sql_runner.php");


    function get_all_credit_cards() {
        $cid = $_SESSION["cid"];

        $res = run_sql("
            SELECT *
              FROM creditcard AS C,
                   storedcard as S
             WHERE S.CardNumber = C.CardNumber
                   AND S.CID = $cid;
        ");

        return $res;
    }
?>