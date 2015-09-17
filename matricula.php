<?php

$Grado= $_POST['grado'];

$arrayprimero = array('A', 'B', 'C');
$arraysegunddo = array('A', 'C');
$arrRecorrer;

$Primero= $_POST['primero']
$arrayprimA = array('Danzas', 'Teatro', 'Dibujo');
$arrayprimB = array('Danzas','Musica');
$arrayprimC = array('Teatro','Dibujo' ,'Musica');

$arraysegA = array('Teatro', 'Dibujo');
$arraysegC = array('Teatro','Dibujo');

$curso= array('Dibujo','Teatro','Musica','Danzas')

$Selccion= "<strong>Seleccione la clase: </strong>";

	if($Grado== 'Primero'){
		$arrRecorrer=$arrayprimero;

		$valorbase='valorbase';
		$total= $valorbase + 35000;


		if ($arrayprimero == 'A'){
			$arrRecorrer=$arrayprimA;

			if ($curso== 'Danzas') {
				$total= $total+($valorbase*0.2);
				echo $total;

			}else if ()


		}else if($arrayprimero == 'B'){
			$arrRecorrer=$arrayprimB;

		}else if ($arrayprimero=='C'){
			$arrRecorrer=$arrayprimC;
		}



	}else if ($Grado== 'Segundo'){
		$arrRecorrer=$arraysegunddo;

		$valorbase='valorbase';
		$total= $valorbase + 70000;
		echo $total;

		if($arraysegunddo== 'A'){

		}

	}

?>