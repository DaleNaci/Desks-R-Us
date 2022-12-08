<?php
    require_once("sql_runner.php");


    function get_average_per_type($starting_date, $ending_date) {
        $res = run_sql("
              SELECT P.PType,
                     AVG(CI.PriceSold / CI.Quantity) AS AvgPrice
                FROM cartitem CI
                JOIN product P ON CI.ProductId = P.ProductId
                JOIN cart c ON CI.CartId = C.CartId
               WHERE P.PType IN ('desk', 'chair', 'bookcase')
                     AND C.TDate >= '$starting_date'
                     AND C.TDate <= '$ending_date'
            GROUP BY P.PType;
        ");

        return $res;
    }
?>