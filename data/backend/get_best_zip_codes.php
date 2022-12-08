<?php
    require_once("sql_runner.php");


    function get_best_zip_codes($starting_date, $ending_date) {
        $res = run_sql("
              SELECT SA.Zip,
                     COUNT(*) AS NumShipments
                FROM cart as C
                JOIN shipaddress SA ON C.SAName = SA.SAName
               WHERE C.TDate >= '$starting_date'
                     AND C.TDate <= '$ending_date'
            GROUP BY SA.Zip
            ORDER BY NumShipments DESC
            LIMIT 5;
        ");

        return $res;
    }
?>