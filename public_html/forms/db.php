
<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$host = "65.99.205.123"; 
$user = "siptacom_saul";
$password = "Sipta2019";
$database = "siptacom_sipta_2019";

$con = mysqli_connect ($host, $user, $password, $database);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>