<?php
		include('db.php');

  	$name = $_POST['name'];
  	$email = $_POST['email'];
		$password = $_POST['password'];
  	$date_of_birth = $_POST['date_of_birth'];
  	$username = $_POST['username'];

		if($name == NULL) {
			echo "<script>document.getElementById('nameerror').innerHTML='Required';</script>";
		}else {
			echo "<script>document.getElementById('nameerror').innerHTML='';</script>";
		}
		if($email == NULL) {
			echo "<script>document.getElementById('emailerror').innerHTML='Required';</script>";
  	}else {
			echo "<script>document.getElementById('emailerror').innerHTML='';</script>";
		}
		if($date_of_birth == NULL) {
			echo "<script>document.getElementById('DOBerror').innerHTML='Required';</script>";
  	}else {
			echo "<script>document.getElementById('DOBerror').innerHTML='';</script>";
		}
		if($username == NULL) {
			echo "<script>document.getElementById('wronguser').innerHTML='Required';</script>";
  	}else {
			echo "<script>document.getElementById('wronguser').innerHTML='';</script>";
		}
		if($password == NULL) {
			echo "<script>document.getElementById('wrongpassword').innerHTML='Required';</script>";
  	}else {
			echo "<script>document.getElementById('wrongpassword').innerHTML='';</script>";
		}


		if($name == NULL || $email == NULL || $date_of_birth == NULL || $username == NULL || $password == NULL  ){
			echo "Fill the form";
		}else{
			$sql = "INSERT INTO `ajax_form` (
			`name`, 
			`email`,
			`password`,
			`date_of_birth`,
			`username`
		) VALUES (
			'" . $_POST['name'] . "',
			'" . $_POST['email'] . "',
			'" . $_POST['password'] . "',
			'" . $_POST['date_of_birth'] . "',
			'" . $_POST['username'] . "'
		)";
		$result= $conn->query($sql);
		if($result === true) {
					echo "Uploaded successfully";
		}else {
					echo "Failed!!";
		}
		
	}

?>
