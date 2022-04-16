
<!doctype html>
<html lang="en">
  <head>
  	<title>Halaman Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?=base_url('assets/login-form/') ?>css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(assets/img/hotel.jpg);">
		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-6 text-center mb-5">
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-md-6 col-lg-4">
							<div class="login-wrap p-0">
						<h3 class="mb-4 text-center">Buat akun baru !! </h3>
		      	<form action="<?= base_url('Login/proses_daftar')?>" class="signin-form" method="post">
		      		<div class="form-group">
		      			<input type="text" class="form-control" name="username" placeholder="Username" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" name="password" class="form-control" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form">
	              <input  type="text" name="no_hp" class="form-control" placeholder="No hp" required>
	            </div>
                <br>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Simpan</button>
	            </div>
	          </form>
		      </div>
				</div>
			</div>
		</div>
	</section>

  <script src="<?=base_url('assets/login-form/') ?>js/jquery.min.js"></script>
  <script src="<?=base_url('assets/login-form/') ?>js/popper.js"></script>
  <script src="<?=base_url('assets/login-form/') ?>js/bootstrap.min.js"></script>
  <script src="<?=base_url('assets/login-form/') ?>js/main.js"></script>

	</body>
</html>

