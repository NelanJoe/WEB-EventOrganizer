<?= $this->extend('layouts/templates') ?>
<?= $this->section('content') ?>

<section class="content">
    <div class="container-fluid">
        <?php if (session()->getFlashdata('success_add')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata('success_add') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php endif; ?><?php if (session()->getFlashdata('success_delete')) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata('success_delete') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('success_update')) : ?>
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata('success_update') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-lg">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="card-title mr-4">Kegiatan</h3>
                        <a class="btn btn-primary btn-sm" href="<?= base_url('jenis-kegiatan/create') ?>">
                            <i class="fas fa-plus"></i>
                            Tambah Kegiatan</a>
                    </div>
                    <div class="car-body">
                        <div class="table-responsive">
                            <table class="table table-hover projects table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($jenis as $key => $j) : ?>
                                        <tr>
                                            <td>
                                                <?= $key + 1 ?>
                                            </td>
                                            <td><?= $j['nama'] ?></td>
                                            <td>
                                                <a href="<?= base_url('jenis-kegiatan/detail/' . $j['id']) ?>" class="btn btn-sm btn-info">
                                                    <i class="fas fa-folder"></i>
                                                    Detail
                                                </a>
                                                </a><a href="<?= base_url('jenis-kegiatan/edit/' . $j['id']) ?>" class="btn btn-sm btn-info">
                                                    <i class="fas fa-pencil-alt"></i>
                                                    Edit
                                                </a>
                                                <a href="<?= base_url('jenis-kegiatan/delete/' . $j['id']) ?>" class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>