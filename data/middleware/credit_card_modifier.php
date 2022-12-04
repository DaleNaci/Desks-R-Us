<?php
    require_once("../backend/add_credit_card.php");
    require_once("../backend/get_all_credit_cards.php");

    
    if (isset($_POST["add-credit-card"])) {
        add_credit_card(
            $_POST["card-num"],
            $_POST["security-num"],
            $_POST["card-owner-name"],
            $_POST["card-type"],
            $_POST["billing-address"],
            $_POST["exp-date"]
        );

        header("Location: ../frontend/credit_card.php");
    }

    function get_credit_cards() {
        $rtn = array();

        $sa_data = get_all_credit_cards();

        foreach ($sa_data as $row) {
            $arr = array(
                $row["CardNumber"],
                $row["SecNumber"],
                $row["CardOwnerName"],
                $row["CardType"],
                $row["BillingAddress"],
                $row["ExpDate"]
            );

            array_push($rtn, $arr);
        }

        return $rtn;
    }
?>