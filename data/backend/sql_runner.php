<?php
    require("../helper_functions.php");

    function run_sql($sql_statement) {
        $db_server_name = "localhost";
        $db_username = "root";
        $db_password = "";
        $db_name = "desks_r_us";

        $db = mysqli_connect($db_server_name, $db_username, $db_password, $db_name);

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
    
        $res = mysqli_query($db, $sql_statement);

        if (starts_with($sql_statement, "SELECT")) {
            return mysqli_fetch_array($res, MYSQLI_ASSOC);
        }
    }
?>