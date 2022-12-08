<?php
    require_once("sql_runner.php");


    function get_biggest_spenders($starting_date, $ending_date) {
        $res = run_sql("
              SELECT CU.FName,
                     CU.LName,
                     SUM(CI.PriceSold * CI.Quantity) AS TotalSpent
                FROM cartitem as CI
                JOIN cart as C ON CI.CartId = C.CartId
                JOIN customer CU ON C.CID = CU.CID
               WHERE C.TDate >= '$starting_date'
                     AND C.TDate <= '$ending_date'
            GROUP BY CU.FName, CU.LName
            ORDER BY TotalSpent DESC
               LIMIT 10;
        ");

        return $res;
    }
?>