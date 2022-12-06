<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    require_once("sql_runner.php");


    function update_user_info($first_name, $last_name, $email, $address, $phone_num) {
        $cid = $_SESSION["cid"];

        run_sql("
            UPDATE customer
               SET FName = '$first_name',
                   LName = '$last_name',
                   Email = '$email',
                   Address = '$address',
                   Phone = $phone_num
             WHERE CID = $cid;
        ");
    }
?>