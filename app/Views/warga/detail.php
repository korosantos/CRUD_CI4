<?= $this->extend('layout/template'); ?>


<?= $this->section('konten'); ?>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h3 class="text-info mb-5 text-center">Detail Data Warga</h3>  
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4 text-center">
                    <img src="/image/<?= $warga['foto']; ?>" class="img-thumbnail m-3" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body" >
                        <p class="card-text">Nama : <?= $warga['namaWarga']; ?></p>
                        <p class="card-text">NIK : <?= $warga['nik']; ?></p>
                        <p class="card-text">jenis Kelamin : <?= $warga['jenisKelamin']; ?></p>
                        <p class="card-text">Status: <?= $warga['status']; ?></p>
                        <p class="card-text"><small class="text-muted">Dibuat Pada <?= $warga['created_at']; ?></small></p>
                        
                            <a href="/warga" class="btn btn-outline-info me-5">Kembali</a>
                            <button type="button" class="btn btn-warning">Ubah</button>
                            <form action="/warga/<?= $warga['id']; ?>" method="post" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Ingin Menghapus Data ini?');">Hapus</button>

                            </form>
                        
                    </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<?= $this->endSection(); ?>