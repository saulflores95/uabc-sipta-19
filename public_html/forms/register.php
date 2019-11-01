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
		$email ="tests";  //test_input($_POST['email']);
		$name = "tests"; //test_input($_POST['name']);
		$phone =  "tests"; //test_input($_POST['phone']);
		$address = "tests"; // test_input($_POST['address']);
		$city = "tests"; // test_input($_POST['city']);
		$country = "tests"; // test_input($_POST['country']);
		$occupation ="tests";   // test_input($_POST['occupation']);
		$profession = "tests"; // test_input($_POST['profession']);
		$reason = "tests"; // test_input($_POST['reason']);
		$relation = "tests"; //  test_input($_POST['relation']);
		$found_out =  "tests"; // test_input($_POST['found_out']);
		$institution =  "tests"; // test_input($_POST['institution']);
		$institution_address = "tests"; // test_input($_POST['institution_address']);
		$constancy =  "tests"; //test_input($_POST['constancy']);
		//$sql="INSERT INTO registro-usuarios-2019(email, date, name, phone, address, city, country, occupation, profession, reason, relation, found_out, institution, institution_address, constancy)VALUES('$email','$name','$phone','$address','$city','$country','$occupation','$profession','$reason','$relation','$found_out','$institution','$institution_address')";
        $sql = "INSERT INTO `registro-usuarios-2019` (`id`, `email`, `date`, `name`, `phone`, `address`, `city`, `country`, `occupation`, `profession`, `reason`, `relation`, `found_out`, `institution`, `institution_address`, `constancy`) VALUES (NULL, 'test@gmail.com', CURRENT_TIMESTAMP, 'sadfds', 'fsdfadsf', 'sdfdasf', 'safdasfads', 'asdfdaf', 'safadsf', 'sadfsd', 'asf', 'asf', 'asdfsda', 'sdfsadf', 'sadfads', 'asdfafd');";
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
