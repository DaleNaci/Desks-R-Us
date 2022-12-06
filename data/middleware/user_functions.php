<?php
    require_once("../backend/add_user.php");
    require_once("../backend/get_current_user_data.php");
    require_once("../backend/update_user_info.php");

    
    if (isset($_POST["register-user"])) {
        add_user(
            $_POST["first-name"],
            $_POST["last-name"],
            $_POST["email"],
            $_POST["address"],
            $_POST["phone-num"]
        );

        header("Location: ../frontend/home_screen.html");
    }


    if (isset($_POST["change-user-info"])) {
        update_user_info(
            $_POST["first-name"],
            $_POST["last-name"],
            $_POST["email"],
            $_POST["address"],
            $_POST["phone-num"]
        );
        
        header("Location: ../frontend/change_user_info.php");
    }


    function get_user_data() {
        $user_data = get_current_user_data();

        $rtn = array(
            "first-name" => $user_data["FName"],
            "last-name" => $user_data["LName"],
            "email" => $user_data["Email"],
            "address" => $user_data["Address"],
            "phone-num" => $user_data["Phone"]
        );

        return $rtn;
    }
?>