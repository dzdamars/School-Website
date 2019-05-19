<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	function randomPass(){
		$kar = array('1','2','3','4','5','6','7','8','9','0');
		$max = (count($kar) -1 );
		$kar1 = $kar[rand(0,$max)];
		$kar2 = $kar[rand(0,$max)];
		$kar3 = $kar[rand(0,$max)];
		$kar4 = $kar[rand(0,$max)];
		$kar5 = $kar[rand(0,$max)];
		return $kar1.$kar2.$kar3.$kar4.$kar5;
	}

?>