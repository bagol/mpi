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
			<table class="table display bg-light">
				<thead>
					<tr>
						<th>ID Pengaduan</th>
						<th>Nama Instansi Terlapor</th>
						<th>Status Pengaduan</th>
						<th>Uraian</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?= $pengaduan->id ?></td>
						<td><?= $pengaduan->nama_instansi ?></td>
						<td><?= status($pengaduan->status_pengaduan) ?></td>
						<td><?= $pengaduan->ringkasan ?></td>
					</tr>
				</tbody>
			</table>

			<a href="<?= base_url('publik/tracking') ?>" class="btn btn-primary"> Kembali</a>
			</div>
			<div class="col-md-1"></div>
		</div>
		
	<!-- js -->
	<script src="<?= base_url('assets/masyarakat/') ?>js/jquery.min.js"></script>
	<script src="<?= base_url('assets/masyarakat/') ?>bootstrap/js/bootstrap.min.js"></script>
</body>
</html>