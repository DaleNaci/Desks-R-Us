<?php
    require("sql_runner.php");

    function add_user() {
        run_sql("INSERT INTO test VALUES (15)");
    }
?>