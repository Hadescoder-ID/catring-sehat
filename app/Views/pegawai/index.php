<?= $this->extend('layout/admin/overview'); ?>


<?= $this->section('content'); ?>

<div class="row">
  <div class="col">
  <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Pegawai</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nama lengkap</th>
                      <th>Email</th>
                      <th>Password</th>
                      <th>Alamat</th>
                      <th>Nomor Telfon</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $i = 1; ?>
                  <?php foreach($pegawai as $p) : ?>
                    <tr>
                      <td><?= $i++;?></td>
                      <td><?= $p['nama_lengkap'];?></td>
                      <td><?= $p['email'];?></td>
                      <td><?= $p['password'];?></td>
                      <td><?= $p['alamat'];?></td>
                      <td><?= $p['nomor_telephone'];?></td>
                      <td></td>
                    </tr>
                  <?php endforeach; ?> 
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div> 
  </div>
</div>

<?= $this->endSection(); ?>