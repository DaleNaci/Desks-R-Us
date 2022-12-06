<?php
    require_once("../backend/get_all_product_info.php");


    function get_product_info() {
        $rtn = array();

        $sa_data = get_all_product_info();

        foreach ($sa_data as $row) {
            $arr = array(
                $row["PName"],
                $row["PPrice"],
                $row["PType"],
                $row["PQuantity"],
                $row["PDescription"]
            );

            $other_info = "";

            if ($row["Drawers"] != "") {
                $other_info = $row["Drawers"] . ", " . $row["Desk_Material"];
            } else if ($row["Fabric"] != "") {
                $other_info = $row["Fabric"] . ", " . $row["Type"];
            } else if ($row["Shelves"] != "") {
                $other_info = $row["Bookcase_Material"] . ", " . $row["Shelves"];
            }

            array_push($arr, $other_info);
            array_push($arr, $row["ProductId"]);

            array_push($rtn, $arr);
        }

        return $rtn;
    }
?>