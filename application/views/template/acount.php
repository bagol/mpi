<?php if ($this->session->flashdata('msg_berhasil')): ?>
    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
        <span class="badge badge-pill badge-success">Berhasil</span>
        <?= $this->session->flashdata('msg_berhasil') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
<?php endif ?>

<div class="row">
	<div class="col-lg-4 col-xs-12">
		<div class="card">
            <div class="card-header">
                <strong class="card-title mb-3"> Foto Profile</strong>
            </div>
            <div class="card-body">
                <div class="mx-auto d-block">
                    <img class="rounded mx-auto d-block" src="<?= base_url('images/foto_profile/') ?><?= $this->session->userdata('foto') ?>" alt="Card image cap">
                    <h5 class="text-sm-center mt-2 mb-1"><?= $this->session->userdata('username'); ?></h5>
                    <div class="location text-sm-center">
                        <i class="fa fa-map-marker"></i> <?= $this->session->userdata('penempatan'); ?></div>
                </div>
                <hr>
                <div class="card-text text-sm-center">
                    <button type="button" class="btn btn-info mt-2" data-toggle="modal" data-target="#exampleModalEditFoto">
                      Ubah <i class="far fa-edit"></i>
                    </button>
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
                		<input type="text" id="text-input" name="nip" value="<?= $user->nip ?>" class="form-control">
                		<small>Nomer Induk Pegawai</small>
                	</div>
                </div>
                <div class="row form-grup mt-2">
                	<div class="col-md-3">Nama</div>
                	<div class="col-md-9">
                		<input type="text" id="text-input" name="nama" value="<?= $user->username ?>" class="form-control">
                		<small>Nama Pegawai</small>
                	</div>
                </div>
                <div class="row form-grup mt-2">
                	<div class="col-md-3">Jabatan</div>
                	<div class="col-md-9">
                		<input type="text" id="text-input" name="role" value="<?= $this->session->userdata('role'); ?>" class="form-control">
                		<small>Jabatan</small>
                	</div>
                </div>
                <div class="row form-grup mt-2">
                	<div class="col-md-3">Email</div>
                	<div class="col-md-9">
                		<input type="text" id="text-input" name="email" value="<?= $user->email ?>" class="form-control">
                		<small>Email Pegawai</small>
                	</div>
                </div>
                <div class="row form-grup mt-2">
                	<div class="col-md-3">No telpon</div>
                	<div class="col-md-9">
                		<input type="text" id="text-input" name="no_tlpn" value="<?= $user->no_tlpn ?>" class="form-control">
                		<small>No Telpon Pegawai</small>
                	</div>
                </div>
                <div class="row form-grup mt-2">
                	<div class="col-md-3">Kantor</div>
                	<div class="col-md-9">
                		<input type="text" id="text-input" name="kantor" value="<?= $this->session->userdata('kantor'); ?>"  class="form-control">
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
		                		<input type="text" id="text-input" name="nama_lengkap" value="<?= $user->nama_lengkap ?>" class="form-control">
		                		<small>Nama Lengkap Pegawai</small>
		                	</div>
		                </div>
		                <div class="row form-grup mt-2">
		                	<div class="col-md-3">Jenis Kelamin</div>
		                	<div class="col-md-9">
		                		<select name="jenis_kelamin" id="select" class="form-control">
                                    <option value="1" <?= ($user->jenis_kelamin == 1 ? 'selected' : '') ?>>Laki-Laki</option>
                                    <option value="2" <?= ($user->jenis_kelamin == 2 ? 'selected' : '') ?>>Perempuan</option>
                                </select>
		                		<small>Jenis Kelamin Pegawai</small>
		                	</div>
		                </div>
		                <div class="row form-grup mt-2">
		                	<div class="col-md-3">Tanggal Lahir</div>
		                	<div class="col-md-9">
		                		<input id="cc-exp" name="tanggal_lahir" type="date" class="form-control cc-exp" value="<?= $user->tgl_lahir ?>" data-val-cc-exp="Please enter a valid month and year" placeholder="DD/ MM / YY">
		                		<small>Tanggal Lahir Pegawai</small>
		                	</div>
		                </div>
		                <div class="row form-grup mt-2">
		                	<div class="col-md-3">Tempat Lahir</div>
		                	<div class="col-md-9">
		                		<input type="text" id="text-input" name="tempat_lahir" value="<?= $user->tempat_lahir ?>" class="form-control">
		                		<small>Tempat Lahir Pegawai</small>
		                	</div>
		                </div>
		                <div class="row form-grup mt-2">
		                	<div class="col-md-3">Provinsi</div>
		                	<div class="col-md-9">
		                		<input type="text" id="text-input" name="provinsi" value="<?= $user->provinsi ?>" class="form-control">
		                		<small>Provinsi Tinggal Pegawai</small>
		                	</div>
		                </div>
		                <div class="row form-grup mt-2">
		                	<div class="col-md-3">Kota</div>
		                	<div class="col-md-9">
		                		<input type="text" id="text-input" name="kota" value="<?= $user->kota ?>" class="form-control">
		                		<small>Kota Tinggal Pegawai</small>
		                	</div>
		                </div>
		            </div>
		            <div class="col-md-6">
		                <div class="row form-grup mt-2">
		                	<div class="col-md-3">Alamat</div>
		                	<div class="col-md-9">
		                		<textarea name="alamat" id="textarea-input" rows="9" class="form-control"><?= $user->alamat ?></textarea>
		                		<small>Alamat Tinggal Pegawai</small>
		                	</div>
		                </div>
		                <div class="row form-grup mt-2">
		                	<div class="col-md-3">Agama</div>
		                	<div class="col-md-9">
		                		<select name="jenis_kelamin" id="select" class="form-control">
                                    <option value="islam" <?= ($user->agama == 'islam' ? 'selected' : '') ?>>islam</option>
                                    <option value="kristen" <?= ($user->agama == 'kristen' ? 'selected' : '') ?>>kristen</option>
                                    <option value="budha" <?= ($user->agama == 'budha' ? 'selected' : '') ?>>budha</option>
                                    <option value="hindu" <?= ($user->agama == 'hindu' ? 'selected' : '') ?>>hindu</option>
                                    <option value="konghucu" <?= ($user->agama == 'konghucu' ? 'selected' : '') ?>>konghucu</option>
                                </select>
		                		<small>Agama Pegawai</small>
		                	</div>
		                </div>
		                <div class="row form-grup mt-2">
		                	<div class="col-md-3">Status Perkawinan</div>
		                	<div class="col-md-9">
		                		<select name="jenis_kelamin" id="select" class="form-control">
                                    <option value="1" <?= ($user->status_perkawinan == 1 ? 'selected' : '') ?>>Belum Menikah</option>
                                    <option value="2" <?= ($user->status_perkawinan == 2 ? 'selected' : '') ?>>Sudah Menikah</option>
                                    <option value="3" <?= ($user->status_perkawinan == 3 ? 'selected' : '') ?>>Pernah Menikah</option>
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