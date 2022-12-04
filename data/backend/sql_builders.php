<?php
    function build_insert_statement($table_name, ...$row_data) {
        $statement = "INSERT INTO $table_name VALUES (";

        foreach ($row_data as $cell) {
            if (is_string($cell)) {
                $statement .= "'$cell'";
            } else {
                $statement .= $cell;
            }
        }

        $statement .= ");";

        return $statement;
    }
?>