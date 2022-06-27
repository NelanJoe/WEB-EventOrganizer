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
                    <form action="<?= base_url('jenis-kegiatan/store') ?>" method="post">
                        <?= csrf_field() ?>
                        <div class="form-group">
                            <label for="nama">Nama Jenis Kegiatan</label>
                            <!-- make form error -->
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Jenis Kegiatan">
                            <?php if (isset($validation)) : ?>
                                <?php if ($validation->hasError('nama')) : ?>
                                    <div class="alert alert-danger">
                                        <?= $validation->getError('nama') ?>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
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
</div>
<?= $this->endSection() ?>