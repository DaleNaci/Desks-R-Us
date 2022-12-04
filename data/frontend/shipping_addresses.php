<?php
    session_start();
?>

<html>
    <head>
        <title>Desks-R-Us</title>
    </head>

    <body>
        <button type="button" id="create-shipping-address-btn">Create Shipping Address</button>
        
        <script type="text/javascript">
            document.getElementById("create-shipping-address-btn").onclick = function () {
                location.href = "create_shipping_address.html";
            }
        </script>
    </body>
</html>