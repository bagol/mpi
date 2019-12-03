<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Halaman Pengaduan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="<?= base_url('assets/masyarakat/') ?>smartWizard/css/smart_wizard.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/masyarakat/') ?>smartWizard/css/smart_wizard_theme_circles.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/masyarakat/') ?>bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/masyarakat/') ?>css/style.css">
</head>
<body>
    <?php if ($this->session->flashdata('msg_berhasil')): ?>
        <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
            <span class="badge badge-pill badge-success">Berhasil</span>
            <?= $this->session->flashdata('msg_berhasil') ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
    <?php endif ?>
	<div class="container rounded">
		<h1 class="text-center head-text rounded">Laporan Pengaduan masyarakat terkait Maladministrasi</h1>
         <form action="<?= base_url('Publik/buatPengaduan')?>" enctype="multipart/form-data" method="post">
		<div id="smartwizard" class="wrapper">
            <ul>
                <li><a href="#step-1">Step 1<br /><small>Data Sosial Pelapor</small></a></li>
                <li><a href="#step-2">Step 2<br /><small>Data Identitas Pelapor</small></a></li>
                <li><a href="#step-3">Step 3<br /><small>Data Pengaduan</small></a></li>
                <li><a href="#step-4">Step 4<br /><small>Data Pengaduans</small></a></li>
                <li><a href="#step-5">Step 5<br /><small>Upload Dokumen Pelengkap</small></a></li>
            </ul>
           
            <div>
                <div id="step-1" class="">
                	<br>
                    <h2 >Step 1 Content</h2>
                    <div class="row px-2">
                    	<div class="col-md-6">
                    		<!-- nama -->
                    		<div class="form-grup">
                    			<label for="nama">Nama</label>
                    			<input type="text" name="nama" class="form-control">
                    		</div>
							<!-- Jenis Kelamin -->
							<div class="form-grup">
                    			<label for="jenis_kelamin">Jenis Kelamin</label>
                    			<select name="jenis_kelamin" class="form-control">
                    				<option value="1">Laki-Laki</option>
                    				<option value="2">Perempuan</option>
                    			</select>
                    		</div>
                    		<!-- warga negara -->
                    		<div class="form-grup">
                    			<label for="warganegara">Pelapor Adalah</label>
                    			<select name="warganegara" class="form-control">
                    				<option value="WNI">WNI</option>
                    				<option value="Penduduk">Penduduk</option>
                    			</select>
                    		</div>
                    	</div>
                    	<div class="col-md-6">
                    		<!-- Email -->
                    		<div class="form-grup">
                    			<label for="email">Email</label>
                    			<input type="email" name="email" class="form-control">
                    		</div>
                    		<!-- No Telpon -->
                    		<div class="form-grup">
                    			<label for="no Telpon">No Telpon</label>
                    			<input type="text" name="no_tlpn" class="form-control">
                    		</div>
                    		<!-- Status Perkawianan -->
                    		<div class="form-grup">
                    			<label for="status Perkawinan">Status Perkawinan </label>
                    			<select name="status_perkawinan" id="" class="form-control">
                    				<option value="1">Belum Menikah</option>
                    				<option value="2">Sudah Menikah</option>
                    				<option value="3">Pernah Menikah</option>
                    			</select>
                    		</div>
                    	</div>
                    </div>
                </div>
                <div id="step-2" class="">
                	<br>
                    <h2>Step 2 Content</h2>
                    <div class="row px-2">
                    	<div class="col-md-6">
                    		<!-- nomor identitas -->
                    		<div class="form-grup">
                    			<label for="nik">Nomor Identitas KTP/Pasport/SIM</label>
                    			<input type="text" name="nik" class="form-control">
                    		</div>
                    		<!-- gambar identitas -->
                    		<label for="">Unggah Identitas</label>
                    		<div class="custom-file">

                    			<input type="File" name="gambar_nik" id="nip" class="custom-file-input">
                    			<label class="custom-file-label nip" for="gamabr_nik">Pilih Gambar...</label>
                                <small>Ukuran gambar tidak boleh Lebih Dari 1MB</small>
                    		</div>
                    		<!-- Pekerjaan -->
                    		<div class="form-grup">
                    			<label for="Pekerjaan">Pekerjaan </label>
                    			<select name="pekerjaan" id="" class="form-control">
                                    <?php foreach ($pekerjaan as $k): ?>
                                       <option value="<?= $k['id']  ?>"> <?= $k['nama']?></option> 
                                    <?php endforeach ?>
                    			</select>
                    		</div>
                    	</div>
                    	<div class="col-md-6">
                    		<!-- alamat -->
                    		<div class="form-grup">
                    			<label for="Alamat">Alamat </label>
                    			<input type="text" name="alamat" class="form-control">
                    		</div>
                    		<!-- provinsi -->
                    		<div class="form-grup">
                    			<label for="provinsi">Provinsi</label>
                    			<select name="provinsi" id="" class="form-control">
                                    <?php foreach ($provinsi as $p): ?>
                                       <option value="<?= $p['id_prov']  ?>"> <?= $p['nama']?></option> 
                                    <?php endforeach ?>
                    			</select>
                    		</div>
                    		<!-- Kategori Pelapor -->
                    		<div class="form-grup">
                    			<label for="Kategori Pelapor">Kategori Pelapor</label>
                    			<select name="kategori_pelapor" id="" class="form-control">
                                    <?php foreach ($kategori_pelapor as $kp): ?>
                                       <option value="<?= $kp['id']  ?>"> <?= $kp['nama']?></option> 
                                    <?php endforeach ?>
                    			</select>
                    		</div>
                    		
                    	</div>
                    </div>
                </div>
                <div id="step-3" class="">
                	<br>
                    <h2>Step 3 Content</h2>
                    <div class="row">
                    	<div class="col-md-6">
                    		<!-- Klasifikasi Instansi Terlapor -->
                    		<div class="form-grup">
                    			<label for="Kelasifikasi Instansi terlapor">Kelasifikasi Instansi terlapor</label>
                    			<select name="instansi_terlapor" id="" class="form-control">
                                    <?php foreach ($instansi as $i): ?>
                                       <option value="<?= $i['id']  ?>"> <?=  $i['nama']?></option> 
                                    <?php endforeach ?>
                    			</select>
                    		</div>
                    		<!-- nama Instansi terlapor -->
                    		<div class="form-grup">
                    			<label for="Nama Instansi Terlapor">Nama Instansi Terlapor</label>
                    			<input type="text" name="nama_instansi" class="form-control">
                    		</div>
                    		<!-- Pernah Lapor -->
                    		<div class="form-grup">
                    			<label for="pernah melapor  ">Apa anda sudah pernah melapor keluhan anda pada instansi terlapor ?</label>
                    			<div class="row">
                    				<div class="col-sm-3">
                    					<div class="form-check">
								          <input class="form-check-input" type="radio" name="pernah_lapor"  value="1" >
								          <label class="form-check-label" for="gridRadios1">
								           Ya,Sudah
								          </label>
								        </div>
                    				</div>
                    				<div class="col-sm-3">
                    					 <div class="form-check">
								          <input class="form-check-input" type="radio" name="pernah_lapor"  value="2">
								          <label class="form-check-label" for="gridRadios2">
								            Belum
								          </label>
								        </div>
                    				</div>
                    			</div>
                    		</div>
                    	</div>
                    	<div class="col-md-6">
                    		<!-- Upaya Pelapor -->
                    		<div class="form-grup">
                    			<label for="upaya">Kapan Upaya terkhir yang disampaikan kepada Terlapor ?</label>
                    			<input type="date" name="trakhir_melapor" class="form-control">
                    		</div>
							<!-- Lapor Melalui -->
                    		<div class="form-grup">
                    			<label for="lapor_melalui">Melapor Melalui</label>
                    			<select name="lapor_melalui" id="" class="form-control">
                    				<option value="Surat">Surat</option>
                    				<option value="Datang Langsung">Datang Langsung</option>
                    				<option value="Email">Email</option>
                    				<option value="Telepon">Telepon</option>
                    			</select>
                    		</div>
                    		<!-- Melapor Kepada -->
                    		<div class="form-grup">
                    			<label for="Melapor Kepada">Melapor Kepada</label>
                    			<input type="text" name="Kepada_siapa" class="form-control">
                    		</div>
                    	</div>
                    </div>
                </div>
                <div id="step-4" class="">
                	<br>
                    <h2>Step 4 Content</h2>
                    <div class="row">
                    	<div class="col-md-6">
                    		<!-- Alamat Terlapor -->
                    		<div class="form-grup">
                    			<label for="Alamat Terlapor">Alamat Terlapor</label>
                    			<input type="text" name="alamat_terlapor" class="form-control">
                    		</div>
                    		<!-- Provinsi Terlapor-->
                    		<div class="form-grup">
                    			<label for="provinsi">Provinsi</label>
                    			<select name="provinsi_terlapor" id="" class="form-control">
                                    <?php foreach ($provinsi as $p): ?>
                                       <option value="<?= $p['id_prov']  ?>"> <?= $p['nama']?></option> 
                                    <?php endforeach ?>
                    			</select>
                    		</div>
                    		<!-- Rahasiakan Data Pelapor -->
                    		<div class="form-group">
							<label>Privasi</label>
							  <div class="form-check">
							    <input class="form-check-input" type="checkbox"  name="privasi" value="1">
							    <label class="form-check-label" for="gridCheck1">
							      Rahasiakan Data Pelapor
							    </label>
							  </div>
							</div>
                    	</div>
                    	<div class="col-md-6">
                    		<div class="form-grup">
                    			<label for="Harapan">Harapan Pelapor</label>
                    			<textarea name="harapan" id="" cols="30" rows="6" class="form-control"></textarea>
                    		</div>
                    	</div>
                    </div>
                </div>
                <div id="step-5" class="">
                	<br>
                    <h2>Step 5 Content</h2>
					<div class="row">
						<div class="col-md-12 px-4">
							<label for="Uraian peristiwa"> Uraian Peristiwa,Tindakan atau keputusan yang dilaporkan</label>
							<div class="custom-file">
							  <input type="file" class="custom-file-input" id="uraian" name="uraian" lang="id">
							  <label class="custom-file-label uraian" for="customFileLang">Uraian Pristiwa...</label>
                              <small>Ukuran gambar tidak boleh Lebih Dari 1MB</small>
							</div>
							<label for="Bukti Dokumen ">Bukti-bukti dokumen atau foto terkait peristiwa yang dilaporkan</label>
							<div class="custom-file">
							  <input type="file" class="custom-file-input" id="dokumen" name="dokumen" lang="id">
							  <label class="custom-file-label dokumen" for="customFileLang">Dokumen Pendukung</label>
                              <small>Ukuran gambar tidak boleh Lebih Dari 1MB</small>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>




	</div>
	<!-- js -->
	<script src="<?= base_url('assets/masyarakat/') ?>js/jquery.min.js"></script>
	<script src="<?= base_url('assets/masyarakat/') ?>bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= base_url('assets/masyarakat/') ?>smartWizard/js/jquery.smartWizard.min.js"></script>

	<!-- custom smart wizard -->
	<script type="text/javascript">
        $(document).ready(function(){

            // Step show event
            $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection, stepPosition) {
               //alert("You are on step "+stepNumber+" now");
               if(stepPosition === 'first'){
                   $("#prev-btn").addClass('disabled');
               }else if(stepPosition === 'final'){
                   $("#next-btn").addClass('disabled');
               }else{
                   $("#prev-btn").removeClass('disabled');
                   $("#next-btn").removeClass('disabled');
               }
            });

            // Toolbar extra buttons
            var btnFinish = $('<button type="submit"></button>').text('Finish')
                                             .addClass('btn btn-info')
                                             .on('click', function(){ });
            var btnCancel = $('<button></button>').text('Cancel')
                                             .addClass('btn btn-danger')
                                             .on('click', function(){ $('#smartwizard').smartWizard("reset"); });


            // Smart Wizard
           $('#smartwizard').smartWizard({
                    selected: 0,
                    theme: 'circles',
                    transitionEffect:'fade',
                    toolbarSettings: {toolbarPosition: 'bottom',
                                      toolbarExtraButtons: [btnFinish, btnCancel]
                                    }
                 });

           $('#dokumen').on('change',function(){
               $('.dokumen').html($(this).val())
           })
           $('#uraian').on('change',function(){
               $('.uraian').html($(this).val())
           })
           $('#nip').on('change',function(){
               $('.nip').html($(this).val())
           })
        })
    </script>
</body>
</html>