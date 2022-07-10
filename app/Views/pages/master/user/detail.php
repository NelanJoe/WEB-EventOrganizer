<?= $this->extend('layouts/templates') ?>
<?= $this->section('content') ?>
<section class="content">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Detail Users</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-4">
                    <div class="info-box bg-light">
                        <div class="info-box-content">
                            <span class="info-box-text text-muted">Nama: <?= ucfirst($users['username']) ?></span>
                            <span class="info-box-text text-muted">Email: <?= $users['email'] ?></span>
                            <span class="info-box-text text-muted">
                                <?php if ($users['active'] == 1) : ?>
                                    Active: <span class="badge badge-success">Active</span>
                                <?php else : ?>
                                    Active: <span class="badge badge-danger">Inactive</span>
                                <?php endif; ?>
                            </span>
                            <a href="cms/user">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>