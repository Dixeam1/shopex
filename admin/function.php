<?php  
include 'conn.php';

// Select Function Start
function select($table_name, $colums='*'){
	global $conn;
	$get_colums = '';
	if(is_array($colums)){
		$last_colum =  end($colums);
		foreach($colums as $colum){
			if($colum == $last_colum){
				$get_colums .= $colum;
			}else
			{
				$get_colums .= $colum.', ';

			}
		}
	}
	else{
		$get_colums =  $colums;
	}
	$query = "SELECT $get_colums FROM $table_name";

	$excute = mysqli_query($conn, $query);
	$result = mysqli_fetch_all($excute,MYSQLI_ASSOC);
	return $result;

}

// insert Function Start

function insert($table, $data){



	$insert = "INSERT INTO ".$table." ("; 

	foreach ($data as $key => $value) {
		
		if ($value == end($data)) {
			$insert .= " `".$key."` ";
		} else{
			$insert .= " `".$key."`,";

		}

	}
	$insert .= ") VALUES (";
	foreach ($data as $key => $value) {

		if ($value == end($data)) {
			$insert .= "'".$value."'";
		} else{
			$insert .= "'".$value."', ";

		}

	}
	$insert .= ');';
	return $insert;


}
// Update function

function update($table, $data, $Where){
	global $conn;
	$update = "UPDATE `". $table."` SET " ;
	
	foreach ($data as $key => $value) {

		if ($value == end($data)) {
			$update .= "`".$key."`='".$value. "'";
		} else{
			$update .= "`".$key."`='".$value. "',"  ;

		}
	}
	$update  .= " WHERE `id` = ".$Where; 
	// return $update;
	$excute = mysqli_query($conn, $update);
	return $excute;
	// echo $update;
}
// Delete function
function delete($table,$id){
	$delete="DELETE FROM `".$table."` WHERE id = ".$id;
	return $delete;
	// echo $delete;
}
// delete('registration', 1);
