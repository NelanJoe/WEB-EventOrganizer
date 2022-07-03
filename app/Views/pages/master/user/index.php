<?= $this->extend('layouts/templates') ?>
<?= $this->section('content') ?>

<section class="content">
    <div class="container-fluid">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Users</h3>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped table-hover projects text-center ">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $key => $user) : ?>
                            <tr>
                                <td><?= ++$key ?></td>
                                <td><?= ucwords($user['username']) ?></td>
                                <td>
                                    <?php if ($user['active'] == 1) : ?>
                                        <span class="badge badge-success">Active</span>
                                    <?php else : ?>
                                        <span class="badge badge-danger">Inactive</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="<?= base_url("user/detail/" . $user['id']) ?>">
                                        <i class="fas fa-folder">
                                        </i>
                                        View
                                    </a>
                                    <a class="btn btn-info btn-sm" href="<?= base_url("user/edit/" . $user['id']) ?>">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
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