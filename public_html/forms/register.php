<?php
    //require('db.php');
    $host = "65.99.205.123"; 
    $user = "siptacom_saul";
    $password = "Sipta2019";
    $database = "siptacom_sipta_2019";

    $conn = mysqli_connect ($host, $user, $password, $database);
	$status = "";
	if(!$conn) {
		die("Could not connect: ".mysqli_connect_error());
	} else {
		$email =test_input($_POST['email']);
		$name =test_input($_POST['name']);
		$phone = test_input($_POST['phone']);
		$address = test_input($_POST['address']);
		$city = test_input($_POST['city']);
		$country = test_input($_POST['country']);
		$occupation = test_input($_POST['occupation']);
		$profession = test_input($_POST['profession']);
		$reason = test_input($_POST['reason']);
		$relation = test_input($_POST['relation']);
		$found_out = test_input($_POST['found_out']);
		$institution = test_input($_POST['institution']);
		$institution_address = test_input($_POST['institution_address']);
		$constancy = "test";
		$sql="INSERT INTO registro-usuarios-2019(email, date, name, phone, address, city, country, occupation, profession, reason, relation, found_out, institution, institution_address, constancy)VALUES('$email','$name','$phone','$address','$city','$country','$occupation','$profession','$reason','$relation','$found_out','$institution','$institution_address')";
		if(mysqli_query($conn,$sql)) {
			echo "Registro exitoso!";
		} else {
			echo "Registro fallido!";
		}
		mysqli_close($conn);
	}
	function test_input($data) {
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}
?>
