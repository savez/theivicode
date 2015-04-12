<?php
	error_reporting(0);
	$mappatura = array(
		'a' => '5',
		'b' => '6',
		'c' => '7',
		'd' => '8',
		'e' => '9',
		'f' => 'A',
		'g' => 'B',
		'h' => 'C',
		'i' => 'D',
		'l' => 'E',
		'm' => 'F',
		'n' => '0',
		'o' => '1',
		'p' => '2',
		'q' => '3',
		'r' => '4',
		's' => '56',
		't' => '57',
		'u' => '58',
		'v' => '59',
		'z' => '5A'
	);

	$msg = $_POST['messaggio'];
	$msgArray = str_split($msg);
	$frase = '';
	foreach($msgArray as $v){
		if(ctype_alnum($v)){
			$frase .= $mappatura[strtolower($v)].' ';
		}else if($v == ' '){
			$frase .= ' - ';
		}else if(!ctype_alnum($v)){
			$frase .= $v.' ';
		}
	}

	echo trim($frase);

?>