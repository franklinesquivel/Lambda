<?php
    if(!isset($_SESSION)) {
        session_start();
        if(!isset($_SESSION['user'])) {
            $_SESSION['user'] = [
                "name" => "",
                "lastName" => "",
                "income" => [],
                "expenses" => [],
                "logged" => false
            ];
        }
    }

    if($_SESSION['user']['logged'] == false && $_SERVER['REQUEST_URI'] != "/Lambda/Register.php") {
        // header("Location: /Lambda/Register.php");
    }

    function setData($name, $lastName){

    }

    // echo var_dump($_SESSION['user']['income']);

    function addIncome($data){
        array_push($_SESSION['user']['income'], $data);
    }
?>