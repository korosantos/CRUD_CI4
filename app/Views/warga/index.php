<?= $this->extend('layout/template'); ?>


<?= $this->section('konten'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-info text-center mb-5">Data Warga</h3>
            <a href="/warga/tambahWarga" class="btn btn-success mb-3">Tambah Data</a>
            <?php if(session()->getFlashdata('alert')) : ?>

                <div class="alert alert-success" role="alert"><?= session()->getFlashdata('alert'); ?></div>

            <?php endif; ?>
            <table class="table table-bordered table-hover text-center">
                <thead class="bg-info text-white">
                    <tr>
                        <th>#</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $nomor = 1; ?>
                <?php foreach($warga as $w) : ?>
                    <tr>
                        <td><?= $nomor++; ?></td>
                        <td><img src="/image/<?= $w['foto']; ?>" class="img-thumbnail" alt=""></td>
                        <td><?= $w['namaWarga']; ?></td>
                        <td>
                            <a href="/warga/<?= $w['id']; ?>" class="btn btn-outline-danger">detail</a>
                        </td>
                    </tr>
                <?php endforeach; ?>    
                </tbody>
            </table>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>