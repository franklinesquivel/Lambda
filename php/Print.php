<?php
    require('mpdf60/mpdf.php');
    $mpdf=new mPDF('utf-8','A4','','' ,5, 5, 5, 5, 5, 5); 
    
    $mpdf->WriteHTML(file_get_contents('pdf.css'), 1);
    $mpdf->WriteHTML(getForm());
    $mpdf->Output("lambda.pdf", "D");

    function getForm(){
        if(!isset($_SESSION)){
            session_start();
        }
        $form = "";

        //Datos del usuario
        // if($_SESSION['logged']){
            //Se muesta usuario
            $form .= "
            <br>
                <div class='PDF_header'>
                    <div class='logo_cont'>
                        <img class='logo' src='../images/android-desktop.png'>
                        <h2>Lambda Company</h2>
                    </div>
                    <div class='title'>
		                <h3>Ingresos vs Egresos</h3>
				    </div>
                </div>
                <br>
                <h3>Datos del Usuario</h3>
                <ul>
                    <li><b>Nombre:</b> ".$_SESSION['user']['name']."</li>
                    <li><b>Apellido:</b> ".$_SESSION['user']['lastName']."</li>
                </ul>
                <br>
            ";

            //INICIO TABLA DE INGRESOS
            if(count($_SESSION['user']['income']) > 0) {
                $c = 0;
                $form .= "
                <h3 class='table'>Tabla de Ingresos</h3>
                <table>
                    <tr>
                        <th >N°</th>
                        <th >Fecha</th>
                        <th >Tipo</th>
                        <th >Descripción</th>
                        <th >Monto</th>
                    </tr>";
                foreach($_SESSION['user']['income'] as $exp){
                    $form .= "
                        <tr>
                            <td>" . ++$c . "</td>
                            <td>" . $exp['date'] . "</td>
                            <td>" . $exp['type'] . "</td>
                            <td>" . $exp['description'] . "</td>
                            <td> $" . $exp['amount'] . "</td>
                        </tr>
                    ";
                }
                $form .= "</table>";
            }else{
                $form .= "<center><h3>No se han encontrado Ingresos</h3></center>";
            }
            // FIN TABLA DE INGRESOS

            //INICIO TABLA DE EGRESOS
            if(count($_SESSION['user']['expenses']) > 0){
                $c = 0;
                $form .= 
                "
                    <br>
                    <h3  class='table'>Tabla de Egresos</h3>
                    <table>
                        <tr>
                            <th> N°</th>
                            <th >Fecha</th>
                            <th >Tipo</th>
                            <th >Descripción</th>
                            <th>Monto</th>
                        </tr>
                ";
                foreach($_SESSION['user']['expenses'] as $valor){
                    $form .=
                    "
                        <tr>
                            <td>" . ++$c . "</td>
                            <td>".$valor["date"]."</td>
                            <td>".$valor["type"]."</td>
                            <td>".$valor["description"]."</td>
                            <td> $".$valor["amount"]."</td>
                        </tr>
                    ";
                }
                        
                $form .="
                    </table>
                ";
            }else{
                $form .= "<center><h3>No se han encontrado Egresos</h3></center>";
            }
            //FIN TABLA DE EGRESOS

            //Se muestra la gráfica
            $form .= "
                <br><h3 class='table'>Gráfico</h3>
                <div class='img'><img class='chart' src='image.png'></img></div>
            ";
        // }else{
        //     $form = "<";
        // }

        

        return $form;
    }


?>