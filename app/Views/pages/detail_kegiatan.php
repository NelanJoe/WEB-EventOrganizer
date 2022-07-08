<?= $this->extend('layouts/public/templates') ?>
<?= $this->section('content') ?>

<section class="content">
    <div class="container">
        <div class="row" style="margin-top:2rem">
            <div class="col-12 d-flex justify-content-center">
                <div class="card" style="width: 30rem;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzO6FMZXobI9J-LGtvFLT_VsjX6oYWECCbKw&usqp=CAU" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 style="font-size:30px;"><?= $detailKegiatan['judul'] ?></h5>
                        <div class="block">
                            <p>Kapasitas : <?= $detailKegiatan['kapasitas'] ?></p>
                            <p>Harga Tiket : <?= $detailKegiatan['harga_tiket'] ?></p>
                            <p>Tanggal Mulai : <?= $detailKegiatan['tanggal_mulai'] ?></p>
                            <p>Waktu Mulai : <?= $detailKegiatan['waktu_mulai'] ?></p>
                            <p>Waktu Selesai : <?= $detailKegiatan['waktu_selesai'] ?></p>
                            <p>Naramsumber : <?= $detailKegiatan['naramsumber'] ?></p>
                            <p>Tempat : <?= $detailKegiatan['tempat'] ?></p>
                            <p>PIC : <?= $detailKegiatan['pic'] ?></p>
                            <p>Foto Flyer : <?= $detailKegiatan['foto_flyer'] ?></p>
                            <p>Jenis : <?= $detailKegiatan['jenis_id'] ?></p>
                        </div>

                        <a href="/daftar-kegiatan/<?= $detailKegiatan['id'] ?>" class="btn btn-primary btn-block">Daftar Sekarang</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--/. container-fluid -->
</section>

<?= $this->endSection() ?>