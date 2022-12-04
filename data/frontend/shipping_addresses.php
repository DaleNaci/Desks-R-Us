<?php
    session_start();
?>

<html>
    <head>
        <title>Desks-R-Us</title>
    </head>

    <body>
        <button type="button" id="add-shipping-address-btn">Add Shipping Address</button>
        
        <script type="text/javascript">
            document.getElementById("add-shipping-address-btn").onclick = function () {
                location.href = "add_shipping_address.html";
            }
        </script>
    </body>
</html>