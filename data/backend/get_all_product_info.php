<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    
    require_once("sql_runner.php");


    function get_all_product_info() {
        $res = run_sql("
               SELECT P.ProductId,
                      P.PName,
                      P.PPrice,
                      P.PType,
                      P.PQuantity,
                      P.PDescription,
                      D.Drawers,
                      D.Material as Desk_Material,
                      C.Fabric,
                      C.Type,
                      B.Material as Bookcase_Material,
                      B.Shelves
                 FROM product as P
            LEFT JOIN desk as D
                   ON P.ProductId = D.ProductId
            LEFT JOIN chair as C
                   ON P.ProductId = C.ProductId
            LEFT JOIN bookcase as B
                   ON P.ProductId = B.ProductId;
        ");

        return $res;
    }
?>