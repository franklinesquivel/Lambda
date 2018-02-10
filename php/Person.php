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

    function checkSession() {
        if($_SESSION['user']['logged'] == false && $_SERVER['REQUEST_URI'] != "/Lambda/Register.php") {
            header("Location: /Lambda/Register.php");
        }
    }

    function setData($name, $lastName){
        $_SESSION['user']['name'] = $name;
        $_SESSION['user']['lastName'] = $lastName;
        $_SESSION['user']['logged'] = true;
    }

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

    // function printPDF(){
        
    function getReportTable() {
        $total = 0;
        $aux = "
            <table class='centered bordered'>
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Tipo</th>
                        <th>Descripción</th>
                        <th>Monto</th>
                    </tr>
                    <tr>
                        <th colspan='4' class='color-primary white-text'>Ingresos</th>
                    </tr>
                </thead><tbody>
        ";
        
        if(count($_SESSION['user']['income']) > 0) {
            foreach($_SESSION['user']['income'] as $in) {
                $aux .= "
                    <tr>
                        <td>" . $in['date'] . "</td>
                        <td>" . $in['type'] . "</td>
                        <td>" . $in['description'] . "</td>
                        <td>$" . $in['amount'] . "</td>
                    </tr>
                ";
                $total += $in['amount'];
            }
        }else{
            $aux .= "<tr><th colspan='4' class='center red-text'>No hay ingresos registrados...</th></tr>";
        }
        $aux .= "<tr><th colspan='2' class='center'>Total</th><th colspan='2' class='green-text center'>$" . $total . "</th></tr>";

        $aux .= "<tr>
                <th colspan='4' class='center color-primary white-text'>Gastos</th>
            </tr>";

        $total = 0;
        if(count($_SESSION['user']['expenses']) > 0) {
            foreach($_SESSION['user']['expenses'] as $ex) {
                $aux .= "
                    <tr>
                        <td>" . $ex['date'] . "</td>
                        <td>" . $ex['type'] . "</td>
                        <td>" . $ex['description'] . "</td>
                        <td>$" . $ex['amount'] . "</td>
                    </tr>
                ";
                $total += $ex['amount'];
            }
        }else{
            $aux .= "<tr><th colspan='4' class='center red-text'>No hay gastos registrados...</th></tr>";
        }
        $aux .= "<tr><th colspan='2' class='center'>Total</th><th colspan='2' class='green-text center'>$" . $total . "</th></tr>";
        
        return $aux . "</tbody></table><br><br><br>";
    }

    function getChartData() {
        $totalAux = 0;
        $in = $_SESSION['user']['income'];
        $ex = $_SESSION['user']['expenses'];
        $aux = [];

        if(count($in) > 0) {
            foreach($in as $i) {
                $totalAux += $i['amount'];
            }
        }

        $aux['total']['all'] = $totalAux;
        $aux['total']['in'] = $totalAux;
        $totalAux = 0;

        if(count($ex) > 0) {
            foreach($ex as $i) {
                $totalAux += $i['amount'];
            }
        }

        $aux['total']['all'] += $totalAux;
        $aux['total']['ex'] = $totalAux;

        return $aux;
    }

    function getUserIncome() {
        $totalAux = 0;
        $in = $_SESSION['user']['income'];

        if(count($in) > 0) {
            foreach($in as $i) {
                $totalAux += $i['amount'];
            }
        }

        return $totalAux;
    }

    function dolarToPesoMx($d){
        return $d * 18.86;
    }

    function dolarToEuro($d){
        return $d * 0.81;
    }

    function dolarToLempira($d){
        return $d * 23.46;
    }

    function dolarToQuetzal($d){
        return $d * 7.34;
    }

    function dolarToYen($d){
        return $d * 108.84;
    }

    function dolarToFrancoSuizo($d){
        return $d * 0.94;
    }

    function getConvertions() {
        $aux = "
        <table class='centered bordered'>
            <thead>
                <th>Moneda</th>
                <th>Cantidad</th>
            </thead>
            <tbody>
                <tr>
                    <td>Dólares</td>
                    <td>$" . number_format(getUserIncome(), 2) . "</td>
                </tr>
                <tr>
                    <td>Pesos Mexicano</td>
                    <td>$" . number_format(dolarToPesoMx(getUserIncome()), 2) . "</td>
                </tr>
                <tr>
                    <td>Euros</td>
                    <td>€" . number_format(dolarToEuro(getUserIncome()), 2) . "</td>
                </tr>
                <tr>
                    <td>Lempiras</td>
                    <td>L" . number_format(dolarToLempira(getUserIncome()), 2) . "</td>
                </tr>
                <tr>
                    <td>Quetzales</td>
                    <td>Q" . number_format(dolarToQuetzal(getUserIncome()), 2) . "</td>
                </tr>
                <tr>
                    <td>Yenes Japoneses</td>
                    <td>¥" . number_format(dolarToYen(getUserIncome()), 2) . "</td>
                </tr>
                <tr>
                    <td>Francos Suizos</td>
                    <td>Fr. " . number_format(dolarToFrancoSuizo(getUserIncome()), 2) . "</td>
                </tr>
            </tbody>
        </table>";

        return $aux;
    }
?>