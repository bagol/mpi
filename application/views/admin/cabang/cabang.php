<?php if ($this->session->flashdata('msg_berhasil')): ?>
    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
        <span class="badge badge-pill badge-success">Berhasil</span>
        <?= $this->session->flashdata('msg_berhasil') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
<?php endif ?>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#exampleModal">
  <i class="fa fa-plus"></i> Tambah Cabang
</button>



<div class="col-md-12 mt-4">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Card with switch</strong>
        </div>
        <div class="card-body">
          <table id="table_id" class="display table">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Kepala Cabang</th>
                      <th>Aksi</th>
                  </tr>
              </thead>
              <tbody>
                  <?php $no=1; foreach ($cabang as $c ): ?>
                      <tr>
                        <td><?= $no;?></td>
                        <td><?= $c['nama']?></td>
                         <td><?= $c['alamat']?></td>
                         <td><?= $c['kepala']?></td>
                         <td>
                          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalEdit<?= $c['id'] ?>"><i class="far fa-edit"></i>
                          </button>
                         </td>
                      </tr>
                  <?php $no++; endforeach; ?>
              </tbody>
          </table>
        </div>
    </div>
</div>
