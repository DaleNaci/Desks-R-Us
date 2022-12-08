<?php
    require_once("sql_runner.php");


    function get_most_frequently_sold($starting_date, $ending_date) {
        $res = run_sql("
              SELECT P.ProductId,
                     P.PName,
                     COUNT(*) AS NumSales
                FROM cartitem as CI,
                     cart as C,
                     product as P
               WHERE C.TDate >= '$starting_date'
                     AND C.TDate <= '$ending_date'
                     AND CI.CartId = C.CartId
                     AND P.ProductId = CI.ProductId
            GROUP BY CI.ProductId
            ORDER BY NumSales DESC
               LIMIT 5;
        ");

        return $res;
    }
?>