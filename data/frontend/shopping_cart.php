<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
?>

<html>
    <head>
        <title>Desks-R-Us</title>
    </head>

    <body>
        <table>
            <tr>
                <th>Product</th>
                <th>Unit Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
            </tr>
        <?php
            require_once("../middleware/cart_item_functions.php");


            $cart_item_data = get_cart_view_info();

            foreach ($cart_item_data as $row) {
                echo "<tr>";
            
                foreach ($row as $item) {
                    echo "<td>" . $item . "</td>";
                }

                echo "</tr>";
            }
        ?>
        </table>

        <form name="form" method="post" action="../middleware/cart_functions.php">
            <label for="credit-card-num">Choose a Credit Card:</label>
            <select name="credit-card-num" id="credit-card-num">
                <?php
                    require_once("../middleware/credit_card_modifier.php");


                    $credit_card_nums = get_credit_card_nums();

                    foreach ($credit_card_nums as $num) {
                        echo "<option value='" . $num . "'>" . $num . "</label>";
                    }
                ?>
            </select>
            
            <br>

            <label for="shipping-address-name">Choose a Shipping Address:</label>
            <select name="shipping-address-name" id="shipping-address-name">
                <?php
                    require_once("../middleware/shipping_address_modifier.php");


                    $shipping_address_names = get_shipping_address_names();

                    foreach ($shipping_address_names as $name) {
                        echo "<option value='" . $name . "'>" . $name . "</label>";
                    }
                ?>
            </select>
            
            <br>

            <input type="submit" name="submit" value="Confirm Order">

            <input type="hidden" name="confirm-order">
        </form>

        <button type="button" id="back-button">Back</button>
        
        <script type="text/javascript">
            document.getElementById("back-button").onclick = function () {
                location.href = "product_listing.php";
            }
        </script>
    </body>
</html>