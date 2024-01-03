<?php

	$array1 = array(1, 2, 3, 3, 8, 9);
	$array2 = array(8, 9, 4, 5, 6, 7, 1);

	$array = array();

	foreach ($array1 as $value1) {
	 	$array[$value1] = $value1;
	}

	foreach($array2 AS $value2){
		$array[$value2] = $value2;
	}

	for($j = 0; $j < count($array); $j ++) {
	    for($i = 0; $i < count($array)-1; $i ++){

	        if($array[$i] > $array[$i+1]) {
	            $temp = $array[$i+1];
	            $array[$i+1]=$array[$i];
	            $array[$i]=$temp;
	        }       
	    }
	}

	print_r($array);
	die;

	// $array4 = array();
	// while($i <= count($array3)){

	// 	foreach($array3 AS $key => $value){

	// 		if(isset($array4)){

	// 			$array4[$value] = $value;
	// 			break;

	// 		} else {
				

	// 		}
	// 		// $last_element_of_array = $array4 ? $array4[-1] : $last_element_of_array.append();
	// 		// print_r($last_element_of_array);
	// 	}

	// 	print_r($array4);

	// 	$i++;
	// }

?>