
<!-- Modal Tambah Cabang-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Cabang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="<?= base_url('cabang/tambah_cabang') ?>" method="post">
			<div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Nama Cabang</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="text-input" name="nama" placeholder="nama" class="form-control">
                    <small class="form-text text-muted">Nama Kantor Cabang</small>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Alamat Cabang</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea name="alamat" id="textarea-input" rows="4" placeholder="alamat" class="form-control"></textarea>
                    <small class="form-text text-muted">Alamat Kantor Cabang</small>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Provinsi Cabang</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="provinsi" id="provinsi" class="form-control">
                         <option value="0">Pilih Provinsi</option>
                        	<?php foreach ($provinsi as $p): ?>
                        		<option value="<?= $p['id_prov'] ?>"><?= $p['nama'] ?></option>
                        	<?php endforeach ?>
                    </select>
                    <small class="form-text text-muted">Provinsi Kantor Cabang</small>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Kota Cabang</label>
                </div>
                <div class="col-12 col-md-9">
                    <select name="kota" id="kota" class="form-control">
                      <option value="0">pilih kota</option>
                    </select>
                    <small class="form-text text-muted">Kota Kantor Cabang</small>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">No Telpon Cabang</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="text-input" name="no_tlpn" placeholder="No telpon" class="form-control" maxlength="13">
                    <small class="form-text text-muted">No Telpon Kantor Cabang</small>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">email Cabang</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="email" id="text-input" name="email" placeholder="emai" class="form-control">
                    <small class="form-text text-muted">email Kantor Cabang</small>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Whatsapp Cabang</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="text-input" name="wa" placeholder="Whatsapp" class="form-control" maxlength="13">
                    <small class="form-text text-muted">Whatsapp Kantor Cabang</small>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Kepala Kantor Cabang</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="text-input" name="kepala_cabang" placeholder="Kepala Kantor" class="form-control">
                    <small class="form-text text-muted">Kepala Kantor Cabang</small>
                </div>
            </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- modal edit -->
<?php foreach ($cabang as $edit): ?>
    <div class="modal fade" id="exampleModalEdit<?= $edit['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Data Kantor Cabang</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           <form action="<?= base_url('cabang/ubah_cabang') ?>" method="post">
            <input type="hidden" name="id" value="<?= $edit['id']?>">
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Nama Cabang</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="nama" value="<?= $edit['nama'] ?>" class="form-control">
                        <small class="form-text text-muted">Nama Kantor Cabang</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Alamat Cabang</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="alamat" id="textarea-input" rows="4" placeholder="alamat" class="form-control"><?= $edit['alamat'] ?></textarea>
                        <small class="form-text text-muted">Alamat Kantor Cabang</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Provinsi Cabang</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="provinsi" id="provinsi" class="form-control" disabled>
                             <option value="<?= $edit['id_prov'] ?>"><?= $edit['provinsi'] ?></option>
                        </select>
                        <small class="form-text text-muted">Provinsi Kantor Cabang</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Kota Cabang</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="kota" id="kota" class="form-control" disabled>
                          <option value="<?=$edit['id_kab']?>"><?=$edit['kota']?></option>
                        </select>
                        <small class="form-text text-muted">Kota Kantor Cabang</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">No Telpon Cabang</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="no_tlpn" value="<?=$edit['no_tlpn']?>" class="form-control" maxlength="13">
                        <small class="form-text text-muted">No Telpon Kantor Cabang</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">email Cabang</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="email" id="text-input" name="email" value="<?=$edit['email']?>" class="form-control">
                        <small class="form-text text-muted">email Kantor Cabang</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Whatsapp Cabang</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="wa" value="<?=$edit['wa']?>" class="form-control" maxlength="13">
                        <small class="form-text text-muted">Whatsapp Kantor Cabang</small>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Kepala Kantor Cabang</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="kepala_cabang" value="<?=$edit['kepala']?>" class="form-control">
                        <small class="form-text text-muted">Kepala Kantor Cabang</small>
                    </div>
                </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
          </div>
        </div>
      </div>
    </div>

<?php endforeach ?>

<script type="text/javascript" src="<?= base_url('assets/'); ?>DataTables/datatables.min.js"></script>
<script>
	$(document).ready( function () {
	    $('#table_id').DataTable();
	    $('#provinsi').change(function(event){
	    	let prov = $('#provinsi').val();
	    	$.get("<?= base_url('Daerah/kabupaten/') ?>"+prov, function(data, status){
			    let kab = JSON.parse(data);
			    let html = '';
			    kab.kabupaten.forEach(function(item){
			    	html += `<option value="${item.id_kab}">${item.nama}</option>`;
			    })
			    $('#kota').html(html);
			  });
	    })
	} );
	
</script>


</body>
</html>