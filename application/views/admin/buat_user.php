<div class="row">
	<div class="col-lg-4 col-xs-12">
		<div class="card">
            <div class="card-header">
                <strong class="card-title mb-3"> Foto Profile</strong>
            </div>
            <div class="card-body">
                <div class="mx-auto d-block">
                    <img class="rounded-circle mx-auto d-block" src="<?= base_url('images/foto_profile/') ?>user.png" alt="Card image cap">
                    <h5 class="text-sm-center mt-2 mb-1"><?= $this->session->userdata('username'); ?></h5>
                    <div class="location text-sm-center">
                        <i class="fa fa-map-marker"></i> <?= $this->session->userdata('penempatan'); ?></div>
                </div>
                <hr>
                <div class="card-text text-sm-center">
              		<button class="btn btn-info" > Ubah <i class="far fa-edit"></i> </button>
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
                		<input type="text" id="text-input" name="nip" placeholder="...." class="form-control">
                		<small>Nomer Induk Pegawai</small>
                	</div>
                </div>
                <div class="row form-grup mt-2">
                	<div class="col-md-3">Nama</div>
                	<div class="col-md-9">
                		<input type="text" id="text-input" name="nama" placeholder="...." class="form-control">
                		<small>Nama Pegawai</small>
                	</div>
                </div>
                <div class="row form-grup mt-2">
                	<div class="col-md-3">Jabatan</div>
                	<div class="col-md-9">
                		<input type="text" id="text-input" name="role" placeholder="...." class="form-control">
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
                		<input type="text" id="text-input" name="no_tlpn" placeholder="...." class="form-control">
                		<small>No Telpon Pegawai</small>
                	</div>
                </div>
                <div class="row form-grup mt-2">
                	<div class="col-md-3">Kantor</div>
                	<div class="col-md-9">
                		<input type="text" id="text-input" name="kantor" placeholder="...." class="form-control">
                		<small>Kantor Pegawai</small>
                	</div>
                </div>
            </div>
            <div class="card-footer">
            	<button class="btn btn-info" > Simpan <i class="far fa-bookmark"></i> </button>
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
		                		<input id="cc-exp" name="tanggal_lahir" type="date" class="form-control cc-exp" value="" data-val-cc-exp="Please enter a valid month and year" placeholder="DD/ MM / YY">
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
		                		<input type="text" id="text-input" name="provinsi" placeholder="...." class="form-control">
		                		<small>Provinsi Tinggal Pegawai</small>
		                	</div>
		                </div>
		                <div class="row form-grup mt-2">
		                	<div class="col-md-3">Kota</div>
		                	<div class="col-md-9">
		                		<input type="text" id="text-input" name="kota" placeholder="...." class="form-control">
		                		<small>Kota Tinggal Pegawai</small>
		                	</div>
		                </div>
		            </div>
		            <div class="col-md-6">
		                <div class="row form-grup mt-2">
		                	<div class="col-md-3">Alamat</div>
		                	<div class="col-md-9">
		                		<textarea name="alamat" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea>
		                		<small>Alamat Tinggal Pegawai</small>
		                	</div>
		                </div>
		                <div class="row form-grup mt-2">
		                	<div class="col-md-3">Agama</div>
		                	<div class="col-md-9">
		                		<select name="jenis_kelamin" id="select" class="form-control">
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
		                		<select name="jenis_kelamin" id="select" class="form-control">
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
            <div class="card-footer ">
            	<button class="btn btn-info" > Simpan <i class="far fa-bookmark"></i> </button>
            </div>
        </div>
    </div>
</div>