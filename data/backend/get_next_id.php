<?php
    require_once("sql_runner.php");


    function get_next_id($table_name) {
        $res = run_sql("SELECT COUNT(*) AS RowCount FROM $table_name");

        return $res[0]["RowCount"] + 1;
    }
?>