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
<div class="row mt-3">	
	<div class="col-md-6">
		<div class="card">
            <div class="card-header">
                <strong class="card-title">Verifikasi Pengaduan</strong>
            </div>
            <div class="card-body">
                <table>
                	<tr>
                		<td>Nama</td>
                		<td> : </td>
                		<td><?= $pengaduan->nama ?></td>
                	</tr>
                	<tr>
                		<td>Jenis kelamin</td>
                		<td> : </td>
                		<td><?= ($pengaduan->jenis_kelamin == 1 ? 'Laki-Laki' : 'Perempuan') ?></td>
                	</tr>
                	<tr>
                		<td>Warga Negara</td>
                		<td> : </td>
                		<td><?= $pengaduan->warganegara ?></td>
                	</tr>
                	<tr>
                		<td>Email</td>
                		<td> : </td>
                		<td><?= $pengaduan->email ?></td>
                	</tr>
                	<tr>
                		<td>No Telpon</td>
                		<td> : </td>
                		<td><?= $pengaduan->no_tlpn ?></td>
                	</tr>
                	<tr>
                		<td>Status Perkawinan</td>
                		<td> : </td>
                		<td><?php  
                            if($pengaduan->status_perkawinan == 1 ){echo 'Belum Menikah';}
                            if($pengaduan->status_perkawinan == 2 ){echo 'Sudah Menikah';}
                            if($pengaduan->status_perkawinan == 3 ){echo 'Pernah Menikah';}
                        ?>
                        </td>
                	</tr>
                	<tr>
                		<td>Nomer Identitas</td>
                		<td> : </td>
                		<td><?= $pengaduan->NIK ?></td>
                	</tr>
                	<tr>
                		<td>Pekerjaan</td>
                		<td> : </td>
                		<td><?php foreach ($pekerjaans as $pekerjaan): ?>
                            <?= ($pengaduan->pekerjaan == $pekerjaan['id'] ? $pekerjaan['nama'] : '') ?>
                        <?php endforeach ?></td>
                	</tr>
                	<tr>
                		<td>Alamat</td>
                		<td> : </td>
                		<td><?= $pengaduan->Alamat ?></td>
                	</tr>
                	<tr>
                		<td>Provinsi</td>
                		<td> : </td>
                		<td><?= provinsi($pengaduan->provinsi_pelapor) ?></td>
                	</tr>
                	<tr>
                		<td>Katagori Pelapor</td>
                		<td style="width:15px;"> : </td>
                		<td><?= $pengaduan->pelapor_kategori ?></td>
                	</tr>
                </table>
            </div>
        </div>
	</div>
	<div class="col-md-6">
		<div class="card">
            <div class="card-header">
                <strong class="card-title">Verifikasi Pengaduan</strong>
            </div>
            <div class="card-body">
                <table>
                	<tr>
                		<td>Kelasifikasi Instansi</td>
                		<td style="width:15px;"> : </td>
                		<td><?= $pengaduan->instansi_kategori ?></td>
                	</tr>
                	<tr>
                		<td>Nama Instansi Terlapor</td>
                		<td> : </td>
                		<td><?= $pengaduan->nama_instansi ?></td>
                	</tr>
                	<tr>
                		<td>Sudah Lapor</td>
                		<td > : </td>
                		<td><?= ($pengaduan->pernah_lapor == 1 ? 'sudah' : 'belum') ?></td>
                	</tr>
                	<tr>
                		<td>Upaya Lapor Terakhir</td>
                		<td > : </td>
                		<td> <?= $pengaduan->trakhir_melapor ?></td>
                	</tr>
                	<tr>
                		<td>Melapor Melalui </td>
                		<td > : </td>
                		<td><?= $pengaduan->lapor_melalui ?></td>
                	</tr>
                	<tr>
                		<td>Melapor Kepada</td>
                		<td > : </td>
                		<td> <?= $pengaduan->kepada_siapa ?></td>
                	</tr>
                	<tr>
                		<td>Alamat Terlapor</td>
                		<td > : </td>
                		<td><?= $pengaduan->alamat_terlapor ?></td>
                	</tr>
                	<tr>
                		<td>Provinsi Instansi Terlapor</td>
                		<td > : </td>
                		<td><?= provinsi($pengaduan->provinsi_terlapor) ?></td>
                	</tr>
                	<tr>
                		<td>Privasi</td>
                		<td > : </td>
                		<td><?= ($pengaduan->privasi == 1 ? 'sembunyikan' : 'tampilka') ?></td>
                	</tr>
                	<tr>
                		<td>Harapan Pelapor</td>
                		<td > : </td>
                		<td><?= $pengaduan->harapan ?></td>
                	</tr>
                </table>
            </div>
        </div>
	</div>
</div>

<!-- js -->
    <script src="<?= base_url('assets/masyarakat/') ?>js/jquery.min.js"></script>
    <script src="<?= base_url('assets/masyarakat/') ?>bootstrap/js/bootstrap.min.js"></script>
</body>
</html>