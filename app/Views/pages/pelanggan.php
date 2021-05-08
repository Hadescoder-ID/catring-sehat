<?= $this->extend('layout/admin/overview'); ?>


<?= $this->section('content'); ?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Pegawai</h3>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered table-striped" id="datable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama lengkap</th>
                            <th>Alamat</th>
                            <th>Nomor Telfon</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($pelanggan as $p) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $p['nama_lengkap']; ?></td>
                                <td><?= $p['alamat']; ?></td>
                                <td><?= $p['nomor_telephone']; ?></td>
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


<?= $this->endSection(); ?>