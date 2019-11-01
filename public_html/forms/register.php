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
		$email = test_input($_POST['email']);
		$name = test_input($_POST['name']);
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
        $constancy =  test_input($_POST['constancy']);
        $confirmation_id = generateRandomString();
        $sql = "INSERT INTO `registro-usuarios-2019` (`id`, `email`, `date`, `name`, `phone`, `address`, `city`, `country`, `occupation`, `profession`, `reason`, `relation`, `found_out`, `institution`, `institution_address`, `constancy`,  `confirmation_id`) VALUES (NULL, '$email', CURRENT_TIMESTAMP, '$name', '$phone', '$address', '$city', '$country', '$occupation', '$profession', '$reason', '$relation', '$found_out', '$institution', '$institution_address', '$constancy', '$confirmation_id');";

        if(mysqli_query($conn,$sql)) {
			echo "Registro exitoso! Codigo de confirmacion: $confirmation_id";
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

    function generateRandomString($length = 5) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

?>
