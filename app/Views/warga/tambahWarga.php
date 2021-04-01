<?= $this->extend('layout/template'); ?>

<?= $this->section('konten'); ?>


<div class="container">
    <div class="row">
        <div class="col-sm-12">
                <h3 class="text-info text-center">Tambah Data Warga</h3>
        </div>
    </div>
<form action="/warga/simpanWarga" method="POST">
<? csrf_field(); ?>
    <div class="row mt-5">
        <div class="col-sm-6 mb-3">
            <div class="form-group me-5">
            <label for="nik">Nik</label>
            <input type="number" id="nik" value="<?= old('nik') ?>" name="nik" class="form-control <?= ($validasi->hasError('nik')) ? 'is-invalid' : '' ?>" placeholder="Masukan nik">
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                <?= $validasi->getError('nik'); ?>
            </div>
            </div>
        </div>

        <div class="col-sm-6 mb-3">
            <div class="form-group me-5">
            <label for="nama">Nama</label>
            <input type="text" id="nama" value="<?= old('nama') ?>" name="nama" class="form-control <?= ($validasi->hasError('nama')) ? 'is-invalid' : '' ?>" placeholder="Masukan nama">
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                <?= $validasi->getError('nama'); ?>
            </div>
            </div>
        </div>

        <div class="col-sm-6 mb-3">
            <div class="form-group me-5">
            <label for="jenisKelamin">Jenis Kelamin</label>
            <select name="jenisKelamin" id="jenisKelamin" class="form-control <?= ($validasi->hasError('jenisKelamin')) ? 'is-invalid' : '' ?>">
                <option value="">-pilih-</option>
                <option value="laki-laki">Laki - Laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                <?= $validasi->getError('jenisKelamin'); ?>
            </div>
            </div>
        </div>

        <div class="col-sm-6 mb-3">
            <div class="form-group me-5">
            <label for="status">Status dalam Keluarga</label>
            <input type="text" id="status" value="<?= old('status') ?>" name="status" class="form-control <?= ($validasi->hasError('status')) ? 'is-invalid' : '' ?>" placeholder="Masukan status">
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                <?= $validasi->getError('status'); ?>
            </div>
            </div>
        </div>

        <div class="col-sm-6 mb-3">
            <div class="form-group me-5">
            <label for="foto">Upload Foto</label>
            <input type="file" id="foto" name="foto" value="<?= old('foto') ?>" class="form-control">
            </div>
        </div>

    </div>
    <div class="row">
    <div class="col-sm-12 mt-5">

            <div class="form-group me-5">
            <button type="submit" name="tambahData" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</form>    
</div>


<?= $this->endSection(); ?>