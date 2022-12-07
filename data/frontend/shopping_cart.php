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