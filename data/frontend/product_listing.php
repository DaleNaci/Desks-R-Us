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
        <button type="button" id="view-shopping-cart-btn">View Shopping Cart</button>

        <form name="form" method="post" action="../middleware/product_functions.php">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Type</th>
                    <th>Current Stock</th>
                    <th>Description</th>
                    <th>OtherInfo</th>
                </tr>
            <?php
                require_once("../middleware/product_functions.php");


                $product_data = get_product_info();

                for ($i = 0; $i < count($product_data); $i++) {
                    $row = $product_data[$i];

                    echo "<tr>";

                    for ($j = 0; $j < 6; $j++) {
                        echo "<td>" . $row[$j] . "</td>";
                    }

                    echo "<td><input type='number' name='" . $row[6] . "-quantity'></td>";

                    echo "</tr>";
                }
            ?>
            </table>

            <input type="submit" name="submit" value="Submit">

            <input type="hidden" name="add-to-cart">
        </form>


        <button type="button" id="back-button">Back</button>
        
        <script type="text/javascript">
            document.getElementById("view-shopping-cart-btn").onclick = function () {
                location.href = "shopping_cart.php";
            }
            document.getElementById("back-button").onclick = function () {
                location.href = "home_screen.html";
            }
        </script>
    </body>
</html>