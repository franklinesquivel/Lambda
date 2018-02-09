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
?>