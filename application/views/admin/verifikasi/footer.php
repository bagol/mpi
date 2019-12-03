<!-- Modal Tambah Cabang-->
<div class="modal fade" id="exampleModalVerif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Verifikasi Pengaduan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<form action="<?= base_url('Pengaduan/ubahStatus') ?>" method="post">
				<div class="row form-group">
	                <div class="col col-md-3">
	                    <label for="text-input" class=" form-control-label">Status</label>
	                </div>
	                <div class="col-12 col-md-9">
	                    <select name="status_pengaduan" id="" class="form-control">
	                    	<option value="1">Belum Diverifikasi</option>
	                    	<option value="3">Verifikasi</option>
	                    	<option value="24">Selesai</option>
	                    </select>
	                    <small class="form-text text-muted">Status pengaduan </small>
	                </div>
	            </div>
	            <div class="row form-group">
	                <div class="col col-md-3">
	                    <label for="text-input" class=" form-control-label">Ringkasan</label>
	                </div>
	                <div class="col-12 col-md-9">
	                    <textarea name="ringkasan" id="ringkasna" cols="30" rows="6" class="form-control"></textarea>
	                    <small class="form-text text-muted">Ringkasan</small>
	                </div>
	            </div>
      </div>
      <div class="modal-footer">
      	<input type="hidden" name="id_pengaduan" value="<?= $pengaduan->id_pengaduan ?>">
      	<input type="hidden" name="nama_pelapor" value="<?= $pengaduan->nama ?>">
      	<input type="hidden" name="email" value="<?= $pengaduan->email ?>">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
	let dokumen = {		
		identitas 	: 'invalid',
		uraian		: 'invalid',
		dokumen		: 'invalid'
	}
	$('#identitas_valid').on('click',function(){
	  	dokumen.identitas = 'valid'
	    $('#identitas_valid').attr('disabled',true)
	    $('#identitas_invalid').attr('disabled',true)
	})
	$('#identitas_invalid').on('click',function(){
		dokumen.identitas = 'invalid'
	    $('#identitas_valid').attr('disabled',true)
	    $('#identitas_invalid').attr('disabled',true)
	})
	$('#uraian_valid').on('click',function(){
		dokumen.uraian = 'valid'
	    $('#uraian_valid').attr('disabled',true)
	    $('#uraian_invalid').attr('disabled',true)
	})
	$('#uraian_invalid').on('click',function(){
		dokumen.uraian = 'invalid'
	    $('#uraian_valid').attr('disabled',true)
	    $('#uraian_invalid').attr('disabled',true)
	})
	$('#dokumen_valid').on('click',function(){
		dokumen.dokumen = 'valid'
	    $('#dokumen_valid').attr('disabled',true)
	    $('#dokumen_invalid').attr('disabled',true)
	})
	$('#dokumen_invalid').on('click',function(){
		dokumen.dokumen = 'invalid'
	    $('#dokumen_valid').attr('disabled',true)
	    $('#dokumen_invalid').attr('disabled',true)
	})
	$('#verif').on('click',function(){
		$('#ringkasna').val(function(){
			let html = '====== Validasi Dokumen ======\n';
			for(const [key,value] of Object.entries(dokumen)){
			html += key+' '+value+ '\n'
		}
		return html;
		})
				
	})

	
	
</script>