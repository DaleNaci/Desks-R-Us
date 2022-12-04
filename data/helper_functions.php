<?php
    function starts_with($s, $startString) {
        $len = strlen($startString);

        return (substr($s, 0, $len) === $startString);
    }
?>