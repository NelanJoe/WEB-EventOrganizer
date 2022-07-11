<?= $this->extend('landing/templates'); ?>
<?= $this->section('content'); ?>

<div class="jumbotron">
    <h1 class="display-4">Event Organizer</h1>
    <p class="subtitle">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab modi ad quisquam facilis velit earum, harum officiis est ea corrupti debitis fuga illum aperiam, tempore iure! At, aperiam perferendis quas debitis iure accusantium nulla ipsa similique temporibus aliquam autem inventore magnam atque, ad nam nostrum.</p>
    <a class="btn btn-outline-primary btn-lg" href="#" role="button">Daftar Sekarang</a>
</div>

<section class="content">
    <div class="container mt-4">
        <h1 class="display-4 fs-2">Kegiatan</h1>
        <hr class="bottom-hr">
    </div>
    <div class="container">
        <div class="row">
            <?php foreach ($kegiatan as $key => $j) : ?>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="card mt-4 shadow">
                        <img src="https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h3 class="card-title"><?= $j['judul'] ?></h3>
                            <div class="mb-2">Kapasitas : <?= $j['kapasitas'] ?></div>
                            <div class="mb-2">Tempat : <?= $j['tempat'] ?></div>
                            <a href="/detail-kegiatan/<?= $j['id'] ?>" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>