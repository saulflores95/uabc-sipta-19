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

        $sql = "SELECT `*` FROM `registro-usuarios-2019`";
        
        if($result = mysqli_query($conn,$sql)) {
            while ($row = mysqli_fetch_assoc($result)) {
                printf ("%s (%s)\n", $row["name"], $row["id"]);
            }
            mysqli_free_result($result);
		} else {
			echo "Registro!";
		}
		mysqli_close($conn);
	}
	
?>
