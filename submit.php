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
	$database = "kj_database";

	$connection = mysqli_connect($servername,$username,$password, $database, $port);

	//Create Database
	$sql = "CREATE DATABASE IF NOT EXISTS kj_database";
	if (mysqli_query($connection, $sql)) {
		echo "Database created succesfully";}

	else{echo "Error creating database:" . mysqli_error($connection);}


	//Create Table
	$sql = "CREATE TABLE IF NOT EXISTS details (
				id INT AUTO_INCREMENT PRIMARY KEY,
				firstname CHAR(64),
				lastname CHAR(64),
				email CHAR(300),
				gender ENUM ('male', 'female','other')DEFAULT 'Other',
				password CHAR(64),
				address1 CHAR(64),
				address2 CHAR(64),
				eircode CHAR(7)
			)";

	if (mysqli_query($connection, $sql)){
			echo("Table Created Succesfully");}
	else {	
			echo("Table not created <br/>");}

	//Insert Data Into Table
	if (mysqli_connect_errno()) {
			echo "Failed to connect to mySQL: " . mysqli_connect_error();
			exit();}

	else {	$sql = "INSERT INTO details (firstname. lastname, email, password, address1, address2, eircode) VALUES(firstname, lastname, email, password, address1, address2, eircode)";}

	if (mysqli_query($connection, $sql)){
			
			echo("Data added sucesfully");}

	else {
			echo("Unable to add data at this time" . mysqli_errno($connection));}

	mysqli_close($connection);
?>

</body>
</html>
