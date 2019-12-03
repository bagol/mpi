<div class="row">
    <?php if ($this->session->flashdata('msg_berhasil')): ?>
        <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
            <span class="badge badge-pill badge-success">Berhasil</span>
            <?= $this->session->flashdata('msg_berhasil') ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
    <?php endif ?>
	<div class="col-lg-4 col-xs-12">
		<div class="card">
            <div class="card-header">
                <strong class="card-title mb-3"> Foto Profile</strong>
            </div>
            <div class="card-body">
                <div class="mx-auto d-block">
                    <img id="preview" width="250px" height="250px" class="rounded mx-auto d-block" src="<?= base_url('images/foto_profile/') ?>user.png" alt="Card image cap">
                <hr>
                </div>
                 <form enctype="multipart/form-data" action="<?= base_url('User/tambahUser')?>" method="post">
                <div class="card-text text-sm-center">
              		<input type="file" style="width: 250px;" name="foto" accept="image/*"  onchange="tampilkanPreview(this,'preview')">
                </div>
            </div>
        </div>
	</div>

	<div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Data Pegawai</strong>
            </div>
            <div class="card-body">
                <div class="row form-grup mt-2">
                	<div class="col-md-3">NIP</div>
                	<div class="col-md-9">
                		<input type="text" id="nip" maxlength="16" name="nip" placeholder="NIP paling panjang 16 Digit" class="form-control">
                		<small>Nomer Induk Pegawai</small>
                	</div>
                </div>
                <div class="row form-grup mt-2">
                	<div class="col-md-3">Nama Panggilan</div>
                	<div class="col-md-9">
                		<input type="text" id="text-input" name="nama" placeholder="...." class="form-control">
                		<small>Nama Panggilan Pegawai</small>
                	</div>
                </div>
                <div class="row form-grup mt-2">
                	<div class="col-md-3">Jabatan</div>
                	<div class="col-md-9">
                		<select name="role" id="select" class="form-control">
                            <option >Pilih Jabatan</option>
                            <?php foreach ($role as $jabatan): ?>
                                <option value="<?= $jabatan['id'] ?>"><?= $jabatan['nama'] ?> - <?= $jabatan['penempatan'] ?></option>
                            <?php endforeach ?>
                        </select>
                		<small>Jabatan</small>
                	</div>
                </div>
                <div class="row form-grup mt-2">
                	<div class="col-md-3">Email</div>
                	<div class="col-md-9">
                		<input type="text" id="text-input" name="email" placeholder="...." class="form-control">
                		<small>Email Pegawai</small>
                	</div>
                </div>
                <div class="row form-grup mt-2">
                	<div class="col-md-3">No telpon</div>
                	<div class="col-md-9">
                		<input type="text" id="text-input" maxlength="13" name="no_tlpn" placeholder="...." class="form-control">
                		<small>No Telpon Pegawai</small>
                	</div>
                </div>
                <div class="row form-grup mt-2">
                	<div class="col-md-3">Kantor</div>
                	<div class="col-md-9">
                		<select name="kantor" id="select" class="form-control">
                            <option >Pilih Kantor</option>
                            <?php foreach ($cabang as $kantor): ?>
                                <option value="<?= $kantor['id'] ?>"><?= $kantor['nama'] ?> </option>
                            <?php endforeach ?>
                        </select>
                		<small>Kantor Pegawai</small>
                	</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
	<div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Data Pribadi Pegawai</strong>
            </div>
            <div class="card-body">
                <form method="post">
                <div class="row">
                	<div class="col-md-6">
                		<div class="row form-grup mt-2">
		                	<div class="col-md-3">Nama Lengkap</div>
		                	<div class="col-md-9">
		                		<input type="text" id="text-input" name="nama_lengkap" placeholder="...." class="form-control">
		                		<small>Nama Lengkap Pegawai</small>
		                	</div>
		                </div>
		                <div class="row form-grup mt-2">
		                	<div class="col-md-3">Jenis Kelamin</div>
		                	<div class="col-md-9">
		                		<select name="jenis_kelamin" id="select" class="form-control">
                                    <option value="1">Laki-Laki</option>
                                    <option value="2">Perempuan</option>
                                </select>
		                		<small>Jenis Kelamin Pegawai</small>
		                	</div>
		                </div>
		                <div class="row form-grup mt-2">
		                	<div class="col-md-3">Tanggal Lahir</div>
		                	<div class="col-md-9">
		                		<input id="cc-exp" name="tgl_lahir" type="date" class="form-control cc-exp" value="" data-val-cc-exp="Please enter a valid month and year" placeholder="DD/ MM / YY">
		                		<small>Tanggal Lahir Pegawai</small>
		                	</div>
		                </div>
		                <div class="row form-grup mt-2">
		                	<div class="col-md-3">Tempat Lahir</div>
		                	<div class="col-md-9">
		                		<input type="text" id="text-input" name="tempat_lahir" placeholder="...." class="form-control">
		                		<small>Tempat Lahir Pegawai</small>
		                	</div>
		                </div>
		                <div class="row form-grup mt-2">
		                	<div class="col-md-3">Provinsi</div>
		                	<div class="col-md-9">
		                		 <select name="provinsi" id="provinsi" class="form-control" >
                                    <option>-- Pilih Provinsi --</option>
                                    <?php foreach ($provinsi as $prov): ?>
                                        <option value="<?= $prov['id_prov'] ?>"><?= $prov['nama'] ?></option>   
                                    <?php endforeach ?>
                                </select>
		                		<small>Provinsi Tinggal Pegawai</small>
		                	</div>
		                </div>
		                <div class="row form-grup mt-2">
		                	<div class="col-md-3">Kota</div>
		                	<div class="col-md-9">
		                		<select id="kota" name="kota" class="form-control">
                                     <option>-- Pilih Kota --</option>           
                                </select>
		                		<small>Kota Tinggal Pegawai</small>
		                	</div>
		                </div>
		            </div>
		            <div class="col-md-6">
		                <div class="row form-grup mt-2">
		                	<div class="col-md-3">Alamat</div>
		                	<div class="col-md-9">
		                		<textarea name="alamat" id="textarea-input" rows="9" placeholder="Alamat" class="form-control"></textarea>
		                		<small>Alamat Tinggal Pegawai</small>
		                	</div>
		                </div>
		                <div class="row form-grup mt-2">
		                	<div class="col-md-3">Agama</div>
		                	<div class="col-md-9">
		                		<select name="agama" id="select" class="form-control">
                                    <option value="islam">islam</option>
                                    <option value="kristen">kristen</option>
                                    <option value="budha">budha</option>
                                    <option value="hindu">hindu</option>
                                    <option value="konghucu">konghucu</option>
                                </select>
		                		<small>Agama Pegawai</small>
		                	</div>
		                </div>
		                <div class="row form-grup mt-2">
		                	<div class="col-md-3">Status Perkawinan</div>
		                	<div class="col-md-9">
		                		<select name="status_perkawinan" id="select" class="form-control">
                                    <option value="1">Belum Menikah</option>
                                    <option value="2">Sudah Menikah</option>
                                    <option value="3">Pernah Menikah</option>
                                </select>
		                		<small>Setatus Perkawinan Pegawai</small>
		                	</div>
		                </div>
                	</div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-info" id="user" > Simpan <i class="far fa-bookmark"></i> </button>
             </form>   
            </div>
        </div>
    </div>
</div>