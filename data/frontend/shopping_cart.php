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
        <button type="button" id="confirm-order-btn">Confirm Order</button>

        <table>
            <tr>
                <th>Product</th>
                <th>Unit Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
            </tr>
        <?php
            require_once("../middleware/cart_functions.php");
            require_once("../middleware/cart_item_functions.php");


            $cart_data = get_cart_data();
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

        <form name="form" method="post" action="../middleware/user_functions.php">
            <label for="credit-card">Choose a Credit Card:</label>
            <select name="credit-card" id="credit-card">
                <?php
                    require_once("../middleware/credit_card_modifier.php");


                    $credit_card_nums = get_credit_card_nums();

                    foreach ($credit_card_nums as $num) {
                        echo "<option value='" . $num . "'>" . $num . "</label>";
                    }
                ?>
            </select>
            
            <br>

            <label for="shipping-address">Choose a Shipping Address:</label>
            <select name="shipping-address" id="shipping-address">
                <?php
                    require_once("../middleware/shipping_address_modifier.php");


                    $shipping_address_names = get_shipping_address_names();

                    foreach ($shipping_address_names as $name) {
                        echo "<option value='" . $name . "'>" . $name . "</label>";
                    }
                ?>
            </select>
        </form>

        <button type="button" id="back-button">Back</button>
        
        <script type="text/javascript">
            document.getElementById("confirm-order-btn").onclick = function () {
                location.href = "order_view.html";
            }
            document.getElementById("back-button").onclick = function () {
                location.href = "product_listing.php";
            }
        </script>
    </body>
</html>