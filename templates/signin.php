<?php
session_start();
include "../assets/css.php";
include "../assets/js.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<title>Listrik Pintar</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="../assets/images/icon listrik pintar.png" type="image/x-icon">

	<!-- prism css -->
	<link rel="stylesheet" href="../assets/css/plugins/prism-coy.css">
	<!-- vendor css -->
	<link rel="stylesheet" href="../assets/css/style.css">

</head>

<body onload="loadalert()">
	<!-- [ auth-signin ] start -->
	<div class="auth-wrapper">
		<div class="auth-content">
			<div class="card">
				<div class="row align-items-center text-center">
					<div class="col-md-12">
						<div class="card-body">
							<img src="../assets/images/Logo Listrik Pintar Vector Biru.png" alt="" class="img-fluid mb-4" style="height: 100px">
							<h4 class="mb-3 f-w-400">Signin</h4>
							<form action="../controller/proses_login.php" method="POST">
								<div class="form-group mb-3">
									<label class="floating-label" for="Email">Email</label>
									<input type="text" name="username" class="form-control" id="Email" placeholder="">
								</div>
								<div class="form-group mb-4">
									<label class="floating-label" for="Password">Password</label>
									<input type="password" name="password" class="form-control" id="Password" placeholder="">
								</div>
								<div class="custom-control custom-checkbox text-left mb-4 mt-2">
									<input type="checkbox" class="custom-control-input" id="customCheck1">
									<label class="custom-control-label" for="customCheck1">Save credentials.</label>
								</div>
								<button class="btn btn-block btn-primary mb-4">Signin</button>
							</form>
							<p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password.html" class="f-w-400">Reset</a></p>
							<p class="mb-0 text-muted">Don’t have an account? <a href="signupx	" class="f-w-400">Signup</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- [ auth-signin ] end -->

	<script type="text/javascript">
		function loadalert() {
			swal("Website khusus member !", "Silahkan login dulu !", "warning");
		}
	</script>

	<!-- Required Js -->
	<script src="../assets/js/vendor-all.min.js"></script>
	<script src="../assets/js/plugins/bootstrap.min.js"></script>
	<script src="../assets/js/ripple.js"></script>
	<script src="../assets/js/pcoded.min.js"></script>

	<!-- prism Js -->
	<script src="../assets/js/plugins/prism.js"></script>

</body>

</html>