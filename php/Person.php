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
        $_SESSION['user']['name'] = $name;
        $_SESSION['user']['lastName'] = $lastName;
    }

    // echo var_dump($_SESSION['user']['income']);

    function addIncome($data){
        array_push($_SESSION['user']['income'], $data);
    }

    function addExpenses($data){
        if(array_push($_SESSION['user']['expenses'], $data)){
            return true;
        }else{
            return false;
        }
    }

    function printTblExpenses(){ //Tabla de gastos
        $tbl = "";
        if(count($_SESSION['user']['expenses']) > 0){
            $tbody = "";
            foreach($_SESSION['user']['expenses'] as $valor){
                $tbody .=
                "
                    <tr>
                        <td>".$valor["date"]."</td>
                        <td>".$valor["type"]."</td>
                        <td>".$valor["type"]."</td>
                        <td>".$valor["description"]."</td>
                    </tr>
                ";
            }

            $tbl = 
            "
                <table class='centered bordered'>
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Monto ($)</th>
                            <th>Tipo de Gasto</th>
                            <th>Descripción</th>
                        </tr>
                    </thead>
                    <tbody>
                        $tbody
                    </tbody>
                </table>
            ";
        }else{
            $tbl = "<h2 class='center red-text'>No existen registros de egresos!</h2>";
        }

        return $tbl;
    }

    function printPDF(){
        
    }
?>