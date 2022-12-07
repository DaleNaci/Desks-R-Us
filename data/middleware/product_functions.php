<?php
    require_once("../backend/get_all_product_info.php");
    require_once("../backend/get_all_product_ids.php");
    require_once("../backend/add_cart_item.php");
    require_once("../backend/check_for_cart.php");
    require_once("../backend/get_cart_id.php");
    require_once("../backend/get_product_price.php");
    require_once("../backend/create_cart.php");
    require_once("../backend/check_for_cart_item.php");
    require_once("../backend/add_cart_item_quantity.php");
    require_once("../backend/update_cart_item_total.php");


    if (isset($_POST["add-to-cart"])) {
        $product_ids = get_all_product_ids();

        foreach ($product_ids as $itm) {
            $product_id = $itm["ProductId"];

            if ($_POST[$product_id . "-quantity"] > 0) {
                $quantity = (double)$_POST[$product_id . "-quantity"];

                if (!check_for_cart()) {
                    create_cart();
                }

                $cart_id = (int)get_cart_id();
                $price = (double)(get_product_price($product_id)[0]["PPrice"]);
                
                if (check_for_cart_item($cart_id, $product_id)) {
                    add_cart_item_quantity($cart_id, $product_id, $quantity);
                } else {
                    add_cart_item($cart_id, $product_id, $price, $quantity);
                }

                update_cart_item_total($cart_id, $product_id);
            }
        }

        header("Location: ../frontend/product_listing.php");
    }


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