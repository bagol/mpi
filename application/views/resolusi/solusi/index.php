<?php if ($this->session->flashdata('msg_berhasil')): ?>
    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
        <span class="badge badge-pill badge-success">Berhasil</span>
        <?= $this->session->flashdata('msg_berhasil') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
<?php endif ?>
<?php if ($this->session->flashdata('msg_gagal')): ?>
    <div class="sufee-alert alert with-close alert-warning alert-dismissible fade show">
        <span class="badge badge-pill badge-warning">Berhasil</span>
        <?= $this->session->flashdata('msg_gagal') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
<?php endif ?>

<div class="row mt-3">	
	<div class="col-md-6">
		<div class="card">
            <div class="card-header">
                <strong class="card-title">Priksa Pengaduan</strong>
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
                    <tr>
                        <td>Status Pengaduan</td>
                        <td> : </td>
                        <td><span class="badge badge-pill badge-secondary"><?= status($pengaduan->status_pengaduan); ?></span></td>
                    </tr>
                </table>
            </div>
        </div>
	</div>
	<div class="col-md-12">
		<div class="card">
            <div class="card-header">
                <strong class="card-title">Dokumen Pengaduan</strong>
            </div>
            <div class="card-body">
            	<div class="row">
            		<div class="col-sm-4 ">
            			Foto Identitas
            			<img src="<?= base_url('images/foto_identitas/') ?><?= $pengaduan->gambar_nik?>" style="width:350px; height: 200px;" class="mb-2">
            		</div>
            		<div class="col-sm-4">
            			Foto Uraian Kejadian
            			<img src="<?= base_url('images/foto_uraian/') ?><?= $pengaduan->uraian?>" style="width:350px; height: 200px;" class="mb-2">
					</div>
            		<div class="col-sm-4">
            			Foto Dokumen Pendukung
            			<img src="<?= base_url('images/foto_dokumen/') ?><?= $pengaduan->dokumen_bukti?>" style="width:350px; height: 200px;" class="mb-2">
            		</div>
            	</div>
            </div>
            <div class="card-footer">
            	<button class="btn btn-info" id="verif" data-toggle="modal" data-target="#exampleModalPriksa">Priksa <i class="fa fa-check-square"></i></button>
            </div>
        </div>
	</div>
</div>