<?= $this->extend('layouts/templates') ?>
<?= $this->section('content') ?>
<div class="container-fluid">
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
    <?php if (session()->getFlashdata('success_add')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('success_delete')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('success_update')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-lg-6">
            <div class="card shadow">
                <div class="card-header bg-primary">
                    <h4>Tambah Jenis Kegiatan</h4>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('cms/jenis-kegiatan/store') ?>" method="post">
                        <?= csrf_field() ?>
                        <div class="form-group">
                            <label for="nama">Nama Jenis Kegiatan</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Jenis Kegiatan">

                        </div>
                        <div class="form-group d-flex">
                            <button type="submit" class="btn btn-success mr-3">Submit</button>
                            <a href="<?= base_url('cms/jenis-kegiatan') ?>" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>