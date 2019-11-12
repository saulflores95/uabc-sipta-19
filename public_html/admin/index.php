<!DOCTYPE html>
<html lang="zxx" class="no-js">
	<head>
		<meta
			name="viewport"
			content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
		/>

		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<!-- Favicon-->
		<link rel="shortcut icon" href="../img/fav.png" />
		<!-- Author Meta -->
		<meta name="author" content="CodePixar" />
		<!-- Meta Description -->
		<meta name="description" content="" />
		<!-- Meta Keyword -->
		<meta name="keywords" content="" />
		<!-- meta character set -->
		<meta charset="UTF-8" />
		<!-- Site Title -->
		<title>SIPTA 2019</title>
		<link rel="icon" type="image/png" href="../img/icono.png" />

		<link
			href="https://fonts.googleapis.com/css?family=Poppins:100,400,300,500,600"
			rel="stylesheet"
		/>

		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="../css/linearicons.css" />
		<link rel="stylesheet" href="../css/owl.carousel.css" />
		<link rel="stylesheet" href="../css/font-awesome.min.css" />
		<link rel="stylesheet" href="../css/nice-select.css" />
		<link rel="stylesheet" href="../css/magnific-popup.css" />
		<link rel="stylesheet" href="../css/bootstrap.css" />
		<link rel="stylesheet" href="../css/main.css" />
		<link rel="stylesheet" href="../css/style.css" />
		<link rel="stylesheet" href="../css/custom.css" />
		<link rel="stylesheet" href="../css/mdb.min.css" />
		<link rel="stylesheet" href="../css/all.css" />
		<link rel="stylesheet" href="../css/datatables.min.css" />
		<link rel="stylesheet" href="../css/bootstrap-datepicker.min.css" />
	</head>
	<body>
		<a name="cero" id="cero"></a>
		<!-- Start Header Area -->
		<header class="header__menu">
			<div class="header__menu__logo">
				<a class="logo_header" href="index.php"
					><img class="header-logo" src="../img/sipta.png" alt="" />
				</a>
			</div>

			<ul class="header__menu__options">
				<li style="margin-top: 0.8rem">
					<a href="#cero" class="anchorLink header__menu__opt header__menu__opt">Inicio</a>
				</li>

				<li style="margin-top: 0.8rem">
					<a href="#uno" class="anchorLink header__menu__opt">Ponentes</a>
				</li>

				<li style="margin-top: 0.8rem">
					<a href="#dos" class="anchorLink header__menu__opt">Programa</a>
				</li>

				<li style="margin-top: 0.8rem">
					<a href="#sede" class="anchorLink header__menu__opt">Sede</a>
				</li>

				<li>
					<a href="en/index.php">
						<img src="../img/english.png" alt="english-site" height="45px" width="auto">
					</a>
				</li>
				
			</ul>
		</header>
		
		<section class="admin-section">
			<div class="container">
				<table id="tableId" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
				<thead class="black white-text">
					<tr>
						<th class="th-sm">Nombre</th>
						<th class="th-sm">Correo</th>
						<th class="th-sm">Constancia</th>
						<th class="th-sm">Codigo </th>
						<th class="th-sm">Asistencia</th>
					</tr>
				</thead>
				<tbody>
				<?php
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
									echo "<tr><td>" . $row["name"]. "</td><td>" 
										. $row["email"] . "</td><td class='text-center'>" 
										. $row["constancy"] . "</td><td class='text-center'>" 
										. $row["confirmation_id"] 
										. "</td><td class='td-checkbox'><input type='checkbox' onclick='onSelected(" . $row["id"] . ", ". $row["assistance"]. ")' name='assistance' id='assistance'" . ($row["assistance"] == 1 ? 'checked' : '') . "></td></tr>";
								}
								echo "</tbody></table>";
								mysqli_free_result($result);
							} else {
								echo "Registro!";
							}
							mysqli_close($conn);
						}
					?>
					
			</div>
		</section>

	
		<!-- End Footer Area -->

		<script src="../js/vendor/jquery-2.2.4.min.js"></script>
		<script
			src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
			integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
			crossorigin="anonymous"
		></script>
		<script src="../js/vendor/bootstrap.min.js"></script>
		<script src="../js/jquery.ajaxchimp.min.js"></script>
		<script src="../js/owl.carousel.min.js"></script>
		<script src="../js/jquery.nice-select.min.js"></script>
		<script src="../js/jquery.magnific-popup.min.js"></script>
		<script src="../js/main.js"></script>
		<script src="../js/popper.min.js"></script>
		<script src="../js/mdb.min.js"></script>
		<script src="../js/datatables.min.js"></script>
		<script src="../js/bootstrap-datepicker.min.js"></script>


		<script type="text/javascript">
			function onSelected(id, assistance) {
				if (assistance) {
					assistance = 0
				} else {
					assistance = 1
				}
				formSubmit(id, assistance)
			}

			function formSubmit(id, assistance) {
				$.ajax({
					type: 'POST',
					url: './forms/assistance.php',
					data: {id: id, assistance:assistance},
					success: function(response) {
						$("#pcontainer").prepend($("</br></br><p style='color:red;'>" + response + "s</p>").fadeIn('fast'));
						$('#success').html(response)
					} 
				});
				return false;
			}
		</script>

		<script type="text/javascript">
			$(document).ready(function () {
				$('#tableId').DataTable();
				$('.dataTables_length').addClass('bs-select');
			});
		</script>
	</body>
</html>
