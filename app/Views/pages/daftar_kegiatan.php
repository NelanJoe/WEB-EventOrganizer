<?= $this->extend('layouts/public/templates') ?>
<?= $this->section('content') ?>

<section class="content">
    <div class="row">
        <div class="col-12 text-center mt-5">
            <h2>List Kegiatan</h2>
        </div>
    </div>
    <?php if (!empty(session()->getFlashdata('message'))) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?php echo session()->getFlashdata('message'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <div class="container">
        <div class="row">
            <?php foreach ($kegiatan as $key => $j) : ?>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="card m-5" style="width: 18rem;">
                        <img src="https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h3 class="card-title"><?= $j['judul'] ?></h3>
                            <div>Kapasitas : <?= $j['kapasitas'] ?></div>
                            <div>Tempat : <?= $j['tempat'] ?></div>
                            <a href="/detail-kegiatan/<?= $j['id'] ?>" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
    <!--/. container-fluid -->
</section>

<?= $this->endSection() ?>