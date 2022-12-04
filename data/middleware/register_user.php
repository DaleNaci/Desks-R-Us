<?php
    require_once("../backend/add_user.php");

    add_user(
        $_POST["first-name"],
        $_POST["last-name"],
        $_POST["email"],
        $_POST["address"],
        $_POST["phone-num"]
    );
?>