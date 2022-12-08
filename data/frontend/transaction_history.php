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
        <input type="text" id="search-bar" onkeyup="searchTables()">
        
        <?php
            include_once("../middleware/order_history.php");

            $order_history_info = get_order_history();

            foreach ($order_history_info as $order) {
                echo "<div class='table-container'>";
                    echo "<table>";
                        echo "<tr>";
                            echo "<th>Cart ID</th>";
                            echo "<th>Card Number</th>";
                            echo "<th>Address Name</th>";
                            echo "<th>Date</th>";
                            echo "<th>Total Amount</th>";
                            echo "<th>Status</th>";
                        echo "</tr>";
                        
                        echo "<tr>";
                            echo "<td>" . $order["cart-id"] . "</td>";
                            echo "<td>" . $order["card-num"] . "</td>";
                            echo "<td>" . $order["sa-name"] . "</td>";
                            echo "<td>" . $order["date"] . "</td>";
                            echo "<td>" . $order["total-amount"] . "</td>";
                            echo "<td>" . $order["status"] . "</td>";
                        echo "</tr>";
                    echo "</table>";

                    echo "<table>";
                        echo "<tr>";
                            echo "<th>Product</th>";
                            echo "<th>Quantity</th>";
                            echo "<th>Total Price</th>";
                        echo "</tr>";

                            foreach ($order["purchase-info"] as $row) {
                                echo "<tr>";
                                    echo "<td>" . $row["product-name"] . "</td>";
                                    echo "<td>" . $row["quantity"] . "</td>";
                                    echo "<td>" . $row["total-price"] . "</td>";
                                echo "</tr>";
                            }


                    echo "</table>";
                echo "</div>";

                echo "<br><br><br>";
            }
        ?>

        <button type="button" id="back-button">Back</button>
        
        <script type="text/javascript">
            document.getElementById("back-button").onclick = function () {
                location.href = "home_screen.html";
            }

            function searchTables() {
                var search = document.getElementById('search-bar').value.toLowerCase();
                var divs = document.getElementsByClassName('table-container');

                for (var i = 0; i < divs.length; i++) {
                    var rows = divs[i].getElementsByTagName('tr');
                    var hasMatch = false;

                    for (var j = 0; j < rows.length; j++) {
                        var cells = rows[j].getElementsByTagName('td');

                        for (var k = 0; k < cells.length; k++) {
                            if (cells[k].innerHTML.toLowerCase().indexOf(search) > -1) {
                                hasMatch = true;
                                break;
                            }
                        }
                    }

                    if (hasMatch) {
                        divs[i].style.display = '';
                    } else {
                        divs[i].style.display = 'none';
                    }
                }
            }
        </script>
    </body>
</html>