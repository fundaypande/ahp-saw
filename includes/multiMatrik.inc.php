<?php
class Multi{

	

	function multiply($a, $b){

		print_r('masuk looo');

		$r=count($a);
		$c=count($b[0]);
		$p=count($b);

		$result=array();
		for ($i=0; $i < $r; $i++){
		    for($j=0; $j < $c; $j++){
		        $result[$i][$j] = 0;
		        for($k=0; $k < $p; $k++){
		            $result[$i][$j] += $a[$i][$k] * $b[$k][$j];
		        }
		    }
		}
		print_r($result);

	}
}
?>
