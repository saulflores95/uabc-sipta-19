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
		$id = test_input($_POST['id']);
		$assistance = test_input($_POST['assistance']);

        $sql = "UPDATE `registro-usuarios-2019` SET `assistance`=$assistance WHERE `id`=$id";

        if(mysqli_query($conn,$sql)) {
			echo "Assistencia actualizada exitosamente!";
		} else {
			echo "Error Assistencia no actualizada!";
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
