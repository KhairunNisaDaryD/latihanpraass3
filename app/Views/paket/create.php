<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Tambah Paket</h3>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h4>Periksa Entrian Form</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <form method="post" action="<?= base_url('paket/store') ?>">
                <?= csrf_field(); ?>
 
                <div class="form-group">
                    <label for="tanggal_datang">Tanggal Datang</label>
                    <input type="date" class="form-control" id="tanggal_datang" name="tanggal_datang" value="<?= old('tanggal_datang') ?>" />
                </div>
 
                <div class="form-group">
                    <label for="sasaran">Sasaran</label>
                    <input type="text" class="form-control" id="sasaran" name="sasaran" value="<?= old('sasaran') ?>" />
                </div>
 
                <div class="form-group">
                    <label for="penerima">Penerima</label>
                    <input type="text" class="form-control" id="penerima" name="penerima" value="<?= old('penerima') ?>" />
                </div>
 
                <div class="form-group">
                    <label for="isi_paket">Isi Paket</label>
                    <input type="text" class="form-control" id="isi_paket" name="isi_paket" value="<?= old('isi_paket') ?>" />
                </div>
                <div class="form-group">
                    <label for="tanggal_ambil">Tanggal Ambil</label>
                    <input type="date" class="form-control" name="tanggal_ambil" id="tanggal_ambil" value="<?= old('tanggal_ambil') ?>" />
                </div>
 
                <div class="form-group">
                    <input type="submit" value="Simpan" class="btn btn-info" />
                </div>
 
            </form>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>