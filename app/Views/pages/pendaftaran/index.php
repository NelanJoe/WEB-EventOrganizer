<?= $this->extend('layouts/templates') ?>
<?= $this->section('content') ?>

<section class="content">
    <div class="container-fluid">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Pendaftaran</h3>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kegiatan</th>
                            <th>Peserta</th>
                            <th>Alasan</th>
                            <th>Nosertifikat</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pendaftaran as $key => $pd) : ?>
                            <tr>
                                <td><?= ++$key ?></td>
                                <td><?= $pd['users_id'] ?></td>
                                <td><?= $pd['kegiatan_id'] ?></td>
                                <td><?= $pd['kategori_peserta_id'] ?></td>
                                <td><?= $pd['alasan'] ?></td>
                                <td><?= $pd['nosertifikat'] ?></td>
                                <td><?= $pd['status'] ?></td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-info btn-sm" href="">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="">
                                        <i class="fas fa-trash"></i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>