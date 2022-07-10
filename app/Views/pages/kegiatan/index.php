<?= $this->extend('layouts/templates') ?>
<?= $this->section('content') ?>

<?= $this->extend('layouts/templates') ?>
<?= $this->section('content') ?>

<section class="content">
    <div class="container-fluid">
        <?php if (!empty(session()->getFlashdata('message'))) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo session()->getFlashdata('message'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <div class="card">
            <div class="card-header">
                <a href="<?= base_url('cms/kegiatan/create'); ?>" class="btn btn-primary"> Tambah Kegiatan</a>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Tanggal</th>
                            <th>Waktu Mulai</th>
                            <th>Waktu Selesai</th>
                            <th>Kapasitas</th>
                            <th>Harga Tiket</th>
                            <th>Narasumber</th>
                            <th>Tempat</th>
                            <th>PIC</th>
                            <th>Foto Flyer</th>
                            <th>Jenis</th>
                            <th> Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($kegiatan as $no => $row) : ?>
                            <tr>
                                <td><?= ++$no ?></td>
                                <td><?= $row['judul'] ?></td>
                                <td><?= $row['tanggal_mulai'] ?></td>
                                <td><?= $row['waktu_mulai'] ?></td>
                                <td><?= $row['waktu_selesai'] ?></td>
                                <td><?= $row['kapasitas'] ?></td>
                                <td><?= $row['harga_tiket'] ?></td>
                                <td><?= $row['naramsumber'] ?></td>
                                <td><?= $row['tempat'] ?></td>
                                <td><?= $row['pic'] ?></td>
                                <td><?= $row['foto_flyer'] ?></td>
                                <td><?= $row['jenis_id'] ?></td>
                                <td class="project-actions text-right d-flex">
                                    <a class="btn btn-info btn-sm" href="<?= base_url("cms/kegiatan/edit/" . $row['id']) ?>">
                                        <i class="fas fa-pencil-alt"></i>
                                        Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="<?= base_url("cms/kegiatan/delete/" . $row['id']) ?>">
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
</section>

<?= $this->endSection() ?>

<?= $this->endSection() ?>