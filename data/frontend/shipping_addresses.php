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
        <button type="button" id="create-shipping-address-btn">Create Shipping Address</button>

        <table>
            <tr>
                <th>Address Name</th>
                <th>Recipient Name</th>
                <th>Street #</th>
                <th>Street Name</th>
                <th>Zip Code</th>
                <th>City</th>
                <th>Country</th>
                <th>State</th>
            </tr>
        <?php
            require_once("../middleware/shipping_address_modifier.php");


            $shipping_address_data = get_shipping_addresses();

            foreach ($shipping_address_data as $row) {
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
            document.getElementById("create-shipping-address-btn").onclick = function () {
                location.href = "create_shipping_address.html";
            }
            document.getElementById("back-button").onclick = function () {
                location.href = "home_screen.html";
            }
        </script>
    </body>
</html>