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
        <button type="button" id="create-credit-card-btn">Add Credit Card</button>

        <table>
            <tr>
                <th>Card #</th>
                <th>Security #</th>
                <th>Card Owner Name</th>
                <th>Card Type</th>
                <th>Billing Address</th>
                <th>Expiration Date</th>
            </tr>
        <?php
            require_once("../middleware/credit_card_modifier.php");


            $credit_card_data = get_credit_cards();

            foreach ($credit_card_data as $row) {
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
            document.getElementById("create-credit-card-btn").onclick = function () {
                location.href = "create_credit_card.html";
            }
            document.getElementById("back-button").onclick = function () {
                location.href = "home_screen.html";
            }
        </script>
    </body>
</html>