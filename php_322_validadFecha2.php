<?php 
//array con los meses

$correcta=validarFecha(30,02,2019);
	
if ($correcta) {
	echo "fecha correcta";
} else {
	echo "fecha incorrecta";
}

function validarFecha($d,$m,$a) {
	if (!is_numeric($d) || !is_numeric($m) || !is_numeric($a)) {
		return false;
	}
	switch ($m) {
		//meses con 31 dias
		case '1':
		case '3':
		case '5':	
		case '7':
		case '8':
		case '10':
		case '12':
			if ($d<1 || $d>31) {
				return false;
			}
			break;
		//meses con 30 dias
		case '4':
		case '6':
		case '9':	
		case '11':
			if ($d<1 || $d>30) {
				return false;
			}
			break;
		case '2':
		//mes 28 y 29 dias
		if ($a%400==0) {
			if ($d<0 || $d>29){
				return false;
			}
		} else if ($a%100==0) {
					if ($d<0 || $d>28) {
					return false;
				}
		} else if ($a%4==0) {
					if ($d<0 || $d>29) {
						return false;
					}
				} else {
					if ($d<0 || $d>28) {
						return false;
					}
				}

			break;
		default:
			return false;
			break;
	}
	return true;
}

?>