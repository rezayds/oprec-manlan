<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Manajemen Lanjut - Login to Admin</title>
		<link
			href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
			rel="stylesheet">
			<!-- Custom styles for this template-->
			<link href="<?php echo base_url('assets/') ?>css/sb-admin-2.min.css" rel="stylesheet">
		</head>
		<body class="bg-gradient-primary">
			<div class="container">
				
				<!-- Outer Row -->
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<div class="card o-hidden border-0 shadow-lg my-5">
							<div class="card-body p-0">
								<div class="p-5">
									<div class="text-center">
										<h1 class="h4 text-gray-900 mb-4">Login Oprec Admin</h1>
									</div>
									<?= $this->session->flashdata('message') ?>
									<form class="user" action="<?= base_url('superuser/login') ?>" method="POST">
										<div class="form-group">
											<input type="text" name="username" class="form-control form-control-user" id="username" placeholder="Enter Username...">
											<?= form_error('username', '<small class="text-danger pl-2">', '</small>');?>
										</div>
										<div class="form-group">
											<input type="password" name="password" class="form-control form-control-user" id="password" placeholder="Enter Password...">
											<?= form_error('password', '<small class="text-danger pl-2">', '</small>');?>
										</div>
										<button name="submit" class="btn btn-primary btn-user btn-block" type="submit">Login</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>

		<!-- Bootstrap core JavaScript-->
		<script src="<?php echo base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
		<script src="<?php echo base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- Core plugin JavaScript-->
		<script src="<?php echo base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>
		<!-- Custom scripts for all pages-->
		<script src="<?php echo base_url('assets/') ?>js/sb-admin-2.min.js"></script>
	</body>
</html>