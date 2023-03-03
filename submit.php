<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>

<?php
	function inpvalidate($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;}

	if (isset($_POST['submit'])) {
			$fields = ['firstname','lastname','email','password','address1','address2','eircode'];

			foreach($fields as $field){
					if(!empty($_POST[$field])) {
							$field = validate_input($_POST[$field]);
					}
			}

	}
	
	$servername = "10.140.42.235";
    $username = "KJ";
	$password = "password";
	$port = 3307;
	$database = "";

	$connection = mysqli_connect($servername,$username,$password, $database, $port);

	if (mysqli_connect_errno()) {
			echo "Failed to connect to mySQL: " . mysqli_connect_error();
			exit();
	}else {
			$sql = "INSERT INTO DETAILS (firstname. lastname, email, password, address1, address2, eircode) VALUES(firstname, lastname, ";
	}

	if (mysqli_query($conn, $sql)){
			echo("Data added sucesfully");
	} else {
			echo("Unable to add data at this time" . mysqli_errno($conn)


	$sql = "CREATE DATABASE IF NOT EXISTS kj_database";
	if (mysqli_query($connection, $sql)){
			echo "Database created succesfully";
	} else {
			echo "Error creating database:" . mysqli_error($connection);
	}

	mysqli_close($conn);
?>

</body>
</html>
