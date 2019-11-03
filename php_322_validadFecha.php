<?php 
//array con los meses

validarFecha(00,01,2019);




function validarFecha($d,$m,$a) {
	$diasMes=['0'=>'31','1'=>'28','2'=>'31','3'=>'30','4'=>'31','5'=>'30','6'=>'31','7'=>'31','8'=>'30','9'=>'31','10'=>'30','11'=>'31'];
	$mes=$m-1;
	$tmp=$diasMes[0][1];
	echo $tmp;
	echo $mes;

	//comprabar si el dia es correcto
	if ($d<1 || $d>$diasMes[$mes][1]) {
		echo "dia incorrecto";
		$bDia=false;
	} else {
		$bDia=true;
		echo "dia correcto";
	}
	


}





 ?>