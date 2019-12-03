<?php if ($this->session->flashdata('msg_berhasil')): ?>
    <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
        <span class="badge badge-pill badge-success">Berhasil</span>
        <?= $this->session->flashdata('msg_berhasil') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
<?php endif ?>

<a href="<?= base_url('Admin/buatUser')?>" class="btn btn-primary mt-2"><i class="fa fa-plus"></i> Tambah Pegawai</a>

<div class="col-md-12 mt-4">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Dafatar Pegawai</strong>
        </div>
        <div class="card-body">
          <table id="user_table" class="display table">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Nip</th>
                      <th>Nama</th>
                      <th>jabatan</th>
                      <th>Penempatan</th>
                      <th>Kantor</th>
                  </tr>
              </thead>
              <tbody>
                  <?php $no=1; foreach ($users as $pegawai ): ?>
                      <tr>
                        <td><?= $no;?></td>
                        <td><?= $pegawai['nip']?></td>
                         <td><?= $pegawai['username']?></td>
                         <td><?= $pegawai['role']?></td>
                         <td><?= $pegawai['penempatan']?></td>
                         <td><?= $pegawai['kantor']?></td>
                      </tr>
                  <?php $no++; endforeach; ?>
              </tbody>
          </table>
        </div>
    </div>
</div>