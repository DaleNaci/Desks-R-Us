<?php
    require("sql_builders.php");
    require("sql_runner.php");

    run_sql(build_insert_statement("test", "hi"));
?>