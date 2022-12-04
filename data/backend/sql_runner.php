<?php
    require_once("../helper_functions.php");


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

        if (starts_with(trim($sql_statement), "SELECT")) {
            $rtn = array();

            while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
                array_push($rtn, $row);
            }

            return $rtn;
        }
    }
?>