<?= $this->extend('layouts/templates') ?>
<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Jenis Kegiatan</h4>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('jenis-kegiatan/update/' . $jenis['id']) ?>" method="post">
                        <div class="form-group">
                            <label for="nama">Nama Jenis Kegiatan</label>
                            <input type="text" class="form-control" value="<?= $jenis['nama'] ?>" id="nama" name="nama" placeholder="Nama Jenis Kegiatan">
                        </div>
                        <div class="form-group d-flex">
                            <button type="submit" class="btn btn-primary mr-3">Submit</button>
                            <a href="<?= base_url('jenis-kegiatan') ?>" class="btn btn-dark">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection() ?>