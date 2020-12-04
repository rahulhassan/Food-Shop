<?php	
	$servername="localhost";
	$db_username="root";
	$db_password="";
	$db_name="p_inventory";
	
	function execute($query){
		global $servername,$db_username,$db_password,$db_name;
		$conn = mysqli_connect($servername,$db_username,$db_password,$db_name);
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		mysqli_query($conn,$query);
	}
	function get($query){
		global $servername,$db_username,$db_password,$db_name;
		$conn = mysqli_connect($servername,$db_username,$db_password,$db_name);
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		$result = mysqli_query($conn,$query);
		$data=array();
		if( $result && mysqli_num_rows($result) > 0){
			while($row=mysqli_fetch_assoc($result)){
				$data[] = $row;
			}
		}
		return $data;
		
	}
	
	
	
?>