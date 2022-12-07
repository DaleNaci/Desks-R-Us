<?php
    include_once("../backend/get_current_cart_info.php");


    function get_cart_data() {
        $cart_info = get_current_cart_info();
        
        return $cart_info;
    }

    
?>