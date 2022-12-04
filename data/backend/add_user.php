<?php
    require_once("sql_runner.php");
    require_once("get_next_id.php");


    function add_user($first_name, $last_name, $email, $address, $phone_num) {
        $cid = get_next_id("customer");

        run_sql("
            INSERT INTO customer
                  VALUES (
                          $cid,
                          '$first_name',
                          '$last_name',
                          'regular',
                          '$email',
                          '$address',
                          '$phone_num'
                          );
        ");
    }
?>