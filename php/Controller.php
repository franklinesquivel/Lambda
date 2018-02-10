<?php

    require_once('Person.php');

    if(isset($_POST['initIncome'])) {
        if(count($_SESSION['user']['income']) > 0) {
            $c = 0;
            $aux = "<br><br><br><br>
            <table class='centered bordered'>
                <thead>
                    <th>N°</th>
                    <th>Fecha</th>
                    <th>Tipo</th>
                    <th>Descripción</th>
                    <th>Monto</th>
                </thead><tbody>";

            foreach($_SESSION['user']['income'] as $exp){
                $aux .= "
                    <tr>
                        <td>" . ++$c . "</td>
                        <td>" . $exp['date'] . "</td>
                        <td>" . $exp['type'] . "</td>
                        <td>" . $exp['description'] . "</td>
                        <td>" . $exp['amount'] . "</td>
                    </tr>
                ";
            }

            $aux .= "</tbody></table><br><br><br><br>";

            echo $aux;
        }else{
            echo -1;
        }
    }

    if(isset($_POST['addIncome'])) {
        addIncome($_POST['data']);
    }

    if(isset($_POST['expenses'])){ //Código que se ejecuta al enviar el formulario de registro de datos
		$data = 
		[
			"date" => $_POST['date'],
			"type" => $_POST['type'],
			"description" => $_POST['description'],
			"amount" => $_POST['amount']
		];
		if(addExpenses($data)){
			echo "Gasto agregado";
		}else{
			echo "Ha ocurrido un error";
		}
	}

	if(isset($_POST['tblExpenses'])){ //Solicita la tabla de gastos
		echo printTblExpenses();
    }
    
    if(isset($_POST['saveImage'])){ //Gaurdamos imagen
        $img = $_POST['chart'];
        $img = str_replace('data:image/png;base64,', '', $img);
        $img = str_replace(' ', '+', $img);
        $data = base64_decode($img);
        $file = '../images/tmp/image.png';
        $success = file_put_contents($file, $data);
    }

    if(isset($_POST['registerUser'])){ //Se ingresa la información del usuario
        setData($_POST['name'], $_POST['lastName']);
        echo "Usuario ingresado exitosamente!";
    }

    if(isset($_POST['getReportData'])) {
        $data = ["table" => getReportTable(), "data" => getChartData()];
        echo json_encode($data);
    }

    if(isset($_POST['getConvertions'])) {
        echo getConvertions();
    }
?>