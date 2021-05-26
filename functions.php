<?php
function get_file_array($file_name){
  	$file_array = file($file_name);
  	$result_array = array();
  	$result_array[0] = "Выберите секцию конференции из списка ...";
  	foreach($file_array as $item){
		if($item != ""){
			$item_array = explode("\t", trim($item));
			if(count($item_array) == 2){
				$division_id = 1*$item_array[0];
				$division = $item_array[1];
				$result_array[$division_id] = $division;
			}
		}
	}
	return $result_array;
  }
?>