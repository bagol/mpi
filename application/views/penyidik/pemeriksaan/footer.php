<!-- Modal Tambah Cabang-->
<div class="modal fade" id="exampleModalPriksa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Verifikasi Pengaduan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<form action="<?= base_url('Penyidik/priksa') ?>" method="post">
				<div class="row form-group">
	                <div class="col col-md-3">
	                    <label for="text-input" class=" form-control-label">Status</label>
	                </div>
	                <div class="col-12 col-md-9">
	                    <select name="status_pengaduan" id="" class="form-control">
	                    	<?php foreach ($status as $s):?>
	                    		<?php if (((int)$s['id'] % 2) == 0): ?>
	                    			<option value="<?= $s['id'] ?>"><?= $s['nama'] ?></option>
	                    		<?php endif ?>
	                    	<?php endforeach ?>
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
</script>