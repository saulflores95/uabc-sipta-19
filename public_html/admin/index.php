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
		<table class="table table-striped">
			<thead class="thead-dark">
				<tr>
				<th>Nombre</th>
				<th>Correo</th>
				<th>Constancia</th>
				<th>Asistencia</th>
				<th></th>
				</tr>
			</thead>
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
						echo "<tr><td>" . $row["name"]. "</td><td>" . $row["address"] . "</td><td>" . $row["constancy"] . "</td><td class='td-checkbox'><input type='checkbox' class='' /></td></tr>";
					}
					echo "</table>";
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
		<script src="../js/bootstrap-datepicker.min.js"></script>


		<script type="text/javascript">

            $( document ).ready(function() {
            
            });
		</script>

		<script type="text/javascript">
			function formSubmit() {
				console.log('formSumbit: ', $('#frmBox').serialize());
				$.ajax({
					type: 'POST',
					url: './forms/register.php',
					data: $('#frmBox').serialize(),
					success: function(response) {
						$("#pcontainer").prepend($("</br></br><p style='color:red;'>" + response + "s</p>").fadeIn('fast'));
						$('#success').html(response)
					} 
				});
				var form = document.getElementById('frmBox').reset();
				return false;
			}
		</script>

		<script type="text/javascript">
			$(document).ready(function() {
				anchor.init();

				// Formato para telefono
				$(".phone-format").keypress(function (e) {
					if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
						return false;
					}
					var curchr = this.value.length;
					var curval = $(this).val();
					if (curchr == 3 && curval.indexOf("(") <= -1) {
						$(this).val("(" + curval + ")" + "-");
					} else if (curchr == 4 && curval.indexOf("(") > -1) {
						$(this).val(curval + ")-");
					} else if (curchr == 5 && curval.indexOf(")") > -1) {
						$(this).val(curval + "-");
					} else if (curchr == 9) {
						$(this).val(curval + "-");
						$(this).attr('maxlength', '14');
					}
				});

				$("#date").datepicker({
					format: "dd/mm/yyyy",
				});
			});

			anchor = {
				init: function() {
					$('a.anchorLink').click(function() {
						elementClick = $(this).attr('href');
						destination = $(elementClick).offset().top;
						$('html:not(:animated),body:not(:animated)').animate({ scrollTop: destination }, 1100);
						return false;
					});
				}
			};
		</script>
	</body>
</html>
