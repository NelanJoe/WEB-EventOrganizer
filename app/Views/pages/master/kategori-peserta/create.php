<?= $this->extend('layouts/templates') ?>
<?= $this->section('content') ?>

<section class="content">
    <div class="container-fluid">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
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
                        <div class="card-header">
                            <h3 class="card-title">Tambah Kategori</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>

                        <form method="post" action="<?= base_url('kategori-peserta/store') ?>">
                            <?= csrf_field(); ?>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?= old('nama'); ?>">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <a href="#" class="btn btn-secondary">Cancel</a>
                                <input type="submit" value="Simpan" class="btn btn-success" />
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>

            </div>

        </section>
        <!-- /.content -->

    </div>
    <!--/. container-fluid -->
</section>

<?= $this->endSection() ?>