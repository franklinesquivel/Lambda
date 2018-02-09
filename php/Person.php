<?php
    // if(!isset($_SESSION)) {
        // session_start();
        if(!isset($_SESSION['user'])) {
            $_SESSION['user'] = [
                "name" => "",
                "lastName" => "",
                "income" => [
                    Array(
                        "date" => "Hoy",
                        "type" => "Gasolina",
                        "description" => "Pa echarle al carro jeje",
                        "amount" => 25.6
                    ),
                    Array(
                        "date" => "Ayer",
                        "type" => "Mascota",
                        "description" => "Pa la comida mijo",
                        "amount" => 7.5
                    )
                ],
                "expenses" => [],
                "logged" => false
            ];
        }
    // }

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