<?php
    if (isset($_POST["test"])) {
        $_POST["test"] = "Test_String";

        include("../backend/add_user.php");
    }
?>