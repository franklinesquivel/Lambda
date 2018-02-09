<?php
    if(!isset($_SESSION)) {
        session_start();
        if(!isset($_SESSION['user'])) {
            $_SESSION['user'] = new Array(){
                "name" => "",
                "lastName" => "",
                "income" => [],
                "expenses" => []
            }
        }
    }

    function setData($name, $lastName){
        
    }
?>