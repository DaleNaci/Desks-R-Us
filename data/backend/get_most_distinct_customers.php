<?php
    require_once("sql_runner.php");


    function get_most_distinct_customers($starting_date, $ending_date) {
        $res = run_sql("
              SELECT CI.ProductId,
                     P.PName,
                     COUNT(DISTINCT C.CID) AS NumCustomers
                FROM cartitem as CI
                JOIN product AS P ON CI.ProductId = P.ProductId
                JOIN cart C ON CI.CartId = C.CartId
               WHERE C.TDate >= '$starting_date'
                     AND C.TDate <= '$ending_date'
            GROUP BY CI.ProductId, P.PName
            ORDER BY NumCustomers DESC;
        ");

        return $res;
    }
?>