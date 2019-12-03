<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tracking Pengaduan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="<?= base_url('assets/masyarakat/') ?>bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/masyarakat/') ?>css/style.css">
</head>
<body>

		
			<div class="row">
				<div class="col-md-8 offset-2 mt-5">
				<form action="<?= base_url('Publik/cariPengaduan') ?>" method="post">
					<div class="form-group">
						<input type="text" class="form-control" name="no_pengaduan" placeholder="No Registrasi....">
						<button class="btn btn-primary form-control mt-2" >Cari</button>
					</div>
				</form>
				</div>
			</div>
			
	<!-- js -->
	<script src="<?= base_url('assets/masyarakat/') ?>js/jquery.min.js"></script>
	<script src="<?= base_url('assets/masyarakat/') ?>bootstrap/js/bootstrap.min.js"></script>
</body>
</html>