<!-- Ubah Foto Profile -->
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

<!-- Ubah Password -->
<div class="modal fade" id="exampleModalUbahPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Foto Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= base_url('User/ubahPassword') ?>" method="post">
        <div class="row form-grup mt-2">
            <div class="col-md-3">Password Lama</div>
            <div class="col-md-9">
                <input type="password" id="pass_lama" name="pass_lama"  class="form-control"> 
                <input type="checkbox" id="pas_lama" > Lihat Passord lama
            </div>
        </div>
        <div class="row form-grup mt-2">
            <div class="col-md-3">Password Baru</div>
            <div class="col-md-9">
                <input type="password" id="pass_baru" name="pass_baru" class="form-control">
                <input type="checkbox" id="pas_baru" > Lihat Passord baru
            </div>
        </div>
        <div class="row form-grup mt-2">
            <div class="col-md-3">Verifikasi Password Baru</div>
            <div class="col-md-9">
                <input type="password" id="pass_baru_verif" name="pass_baru_verif" class="form-control">
                <input type="checkbox" id="pas_baru_verif" > Lihat Passord verifikasi <br>
                <div id="pesan" role="alert">
                    
                </div>
                
            </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id="save" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
    $(document).ready(function(){
        // view password lama
        $('#pas_lama').change(function(){
            if($(this).prop('checked')){
                $('#pass_lama').attr('type','text')
            }else{
                $('#pass_lama').attr('type','password')
            }
        })

        // view password baru
        $('#pas_baru').change(function(){
            if($(this).prop('checked')){
                $('#pass_baru').attr('type','text')
            }else{
                $('#pass_baru').attr('type','password')
            }
        })

        // view password baru verify
        $('#pas_baru_verif').change(function(){
            if($(this).prop('checked')){
                $('#pass_baru_verif').attr('type','text')
            }else{
                $('#pass_baru_verif').attr('type','password')
            }
        })
        // memverifikasi password harus lebih dari 6 karakter
        $('#pass_baru').keyup(function(){
            if($(this).val().length <= 6){
                $('#pesan').addClass('alert alert-danger');
                $('#pesan').html('password tidak boleh kurang dari 6 karakter !!!')
                $('#save').prop('disabled',true)
            }else{
                $('#pesan').removeClass('alert alert-danger');
                $('#pesan').html('')
                $('#save').prop('disabled',false)
            }
        })
        // memverifikasi password baru
        $('#pass_baru_verif').keyup(function(){
            if($('#pass_baru').val() != $(this).val()){
                 $('#pesan').addClass('alert alert-danger');
                 $('#pesan').html('<smal>password tidak mirip !!!</small>')
                 $('#save').prop('disabled',true)
            }else{
                $('#pesan').removeClass('alert alert-danger');
                $('#pesan').html('')
                $('#save').prop('disabled',false)

            }
        })

        // mengubah kota sesui pilihan
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
    })
    $('#provinsi').ready(function(){
        $.get(`<?= base_url('Daerah/kabupaten/')?>${$('#provinsi').val()}`,function(data){
            let kab = JSON.parse(data);
            let html = '';
            kab.kabupaten.forEach(function(item){
                html += `<option value="${item.id_kab}">${item.nama}</option>`;
            })
            $('#kota').html(html);
        });
    })
    
</script>