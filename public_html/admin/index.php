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
		
		<section class="">
			
		</section>

		<footer class="section-gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<img class="logo2" src="../img/alumbra.png" alt="" />
						<img class="logo2" src="../img/uabc.png" />
						<img class="logo2" src="../img/hsm.png" />
					</div>
				</div>
				<div
					class="footer-bottom d-flex justify-content-between align-items-center flex-wrap"
				>
					<p class="footer-text m-0">
						&copy; 2019 todos los derechos reservados. Por: 
						<a href="https://www.linkedin.com/in/omar-osuna/" target="_blank" style="color: white; font-weight: bold;">Omar Alonso Osuna Angulo</a>
					</p>
						<div class="footer-social d-flex align-items-center">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
					</div>
				</div>
			</div>
		</footer>
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
                console.log( "ready!" );
                $.ajax({
					type: 'POST',
					url: '../forms/getUsers.php',
					data: '',
					success: function(response) {
						console.log(response)
					} 
				});
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
