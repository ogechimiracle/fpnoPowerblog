<?php

	include("../../configs/php/connect.php");

	$user = mysqli_real_escape_string($conn, $_POST['user']);
	$pass = mysqli_real_escape_string($conn, $_POST['pass']);

	if(!empty($user) && !empty($pass)){

		$sql = "SELECT * FROM  users WHERE email= '{$user}' and pass = '{$pass}' ";

		$result = $conn->query($sql);

		if($result->num_rows>0){
			echo 'success';
			$row = mysqli_fetch_assoc($result);
			session_start();

			$_SESSION['id'] = $row['email'];
			
		}
		else{

			echo "Record with this email does not exist";
		}

	}else{
		echo "username and password cant be empty";
	}

?>
