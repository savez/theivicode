<?php
	error_reporting(0);
	$mappatura = array(
		'5' => 'a',
		'6' => 'b',
		'7' => 'c',
		'8' => 'd',
		'9' => 'e',
		'A' => 'f',
		'B' => 'g',
		'C' => 'h',
		'D' => 'i',
		'E' => 'l',
		'F' => 'm',
		'0' => 'n',
		'1' => 'o',
		'2' => 'p',
		'3' => 'q',
		'4' => 'r',
		'56' => 's',
		'57' => 't',
		'58' => 'u',
		'59' => 'v',
		'5A' => 'z',
	);

	$msg = $_POST['messaggio'];
	$msgArray = explode(" ",$msg);

	$frase = '';
	foreach($msgArray as $v){
		if(ctype_alnum($v)){
			$foo = strtoupper($v);
			if($foo != 'A' && $foo != 'B' && $foo != 'C' && $foo != 'D' && $foo != 'E' && $foo != 'F' && $foo != '5A'){
				$foo = intval($foo);
			}
			$frase .= $mappatura[$foo];
		}else if($v == '-'){
			$frase .= ' ';
		}else if(!ctype_alnum($v)){
			$frase .= $v;
		}
	}

	echo trim($frase);

?>