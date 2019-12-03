
<div class="col-sm-12 mt-4">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Data Pengaduan Masuk</strong>
        </div>
        <div class="card-body">
          <table id="table_id" class="display table" width="100%">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>ID Pelapor</th>
                      <th>Nama Pelapor</th>
                      <th>Instansi Terlapor</th>
                      <th>Alamat Terlapor</th>
                      <th>Aksi</th>
                  </tr>
              </thead>
              <tbody>
                  <?php if (empty($pengaduan)): ?>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                         <td></td>
                         <td></td>
                         <td>
                         </td>
                      </tr>
                  <?php endif ?>
                  <?php if (!empty($pengaduan)): ?>
                      <?php $no=1; foreach ($pengaduan as $c ): ?>
                          <tr>
                            <td><?= $no;?></td>
                            <td><?= $c['id_pelapor']?></td>
                            <td><?= $c['nama'] ?></td>
                             <td><?= $c['nama_instansi']?></td>
                             <td><?= $c['alamat_terlapor']?></td>
                             <td>
                              <a class="btn btn-primary" href="<?= base_url('Admin/verifikasi/') ?><?=$c['id_pelapor']?>" >Verifikasi</i>
                              </a>
                             </td>
                          </tr>
                      <?php $no++; endforeach; ?>
                  <?php endif ?>
                  
              </tbody>
          </table>
        </div>
    </div>
</div>
