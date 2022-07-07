<?= $this->extend('layouts/public/templates') ?>
<?= $this->section('content') ?>

<section class="content">
    <div class="container">
        <div class="row" style="margin-top:2rem">
            <div class="col-12 d-flex justify-content-center">
                <div class="card" style="width: 30rem;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzO6FMZXobI9J-LGtvFLT_VsjX6oYWECCbKw&usqp=CAU" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="exampleSelectBorder">Kategori Peserta</label>
                                <select class="custom-select form-control-border" id="exampleSelectBorder">
                                    <option>Value 1</option>
                                    <option>Value 2</option>
                                    <option>Value 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Alasan Mendaftar</label>
                            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                        </div>
                        <div class="form-group">

                            <a href="/daftar-kegiatan" class="btn btn-primary btn-block">Daftar Sekarang</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    <!--/. container-fluid -->
</section>

<?= $this->endSection() ?>