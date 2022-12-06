<html>
    <head>
        <title>Desks-R-Us</title>
        <link rel="stylesheet" href="css/main.css">
    </head>

    <body>
        <h1>Change User Info</h1>

        <div class="container">
            <form name="form" method="post" action="../middleware/user_functions.php">
                <?php
                    require_once("../middleware/user_functions.php");

                    $user_data = get_user_data();
                ?>

                <label class="label--margin-above">First Name:</label>
                <input type="text" id="first-name" value="<?php echo $user_data["first-name"]?>" name="first-name">
    
                <br>
    
                <label class="label--margin-above">Last Name:</label>
                <input type="text" id="last-name" value="<?php echo $user_data["last-name"]?>" name="last-name">
    
                <br>
    
                <label class="label--margin-above">Email:</label>
                <input type="text" id="email" value="<?php echo $user_data["email"]?>" name="email">
    
                <br>
    
                <label class="label--margin-above">Address:</label>
                <input type="text" id="address" value="<?php echo $user_data["address"]?>" name="address">
    
                <br>
    
                <label class="label--margin-above">Phone Number:</label>
                <input type="text" id="phone-num" value="<?php echo $user_data["phone-num"]?>" name="phone-num">
    
                <br>
    
                <input type="submit" name="submit" value="Submit">
                
                <input type="hidden" name="change-user-info">
            </form>

            <button type="button" id="back-button">Back</button>
        </div>

        <script type="text/javascript">
            document.getElementById("back-button").onclick = function () {
                location.href = "home_screen.html";
            }
        </script>
    </body>
</html>