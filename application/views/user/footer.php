<div class="modal fade" id="exampleModalEditFoto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Foto Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="mx-auto d-block mb-2">
            <img class="rounded mx-auto d-block" id="preview">
        </div>
       <form enctype="multipart/form-data" action="<?= base_url('User/ubahFoto') ?>"  method="post">
			<input type="file" name="foto" accept="image/*"  onchange="tampilkanPreview(this,'preview')">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>