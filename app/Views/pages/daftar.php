<?= $this->extend('layouts/public/templates') ?>
<?= $this->section('content') ?>

<section class="content">
    <div class="container">
        <div class="row" style="margin-top:2rem">
            <div class="col-12 d-flex justify-content-center">

                <div class="card" style="width: 30rem;">
                    <form method="post" action="<?= base_url('daftar/store/1') ?>">
                        <input type="hidden" id="kegiatan_id" name="kegiatan">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzO6FMZXobI9J-LGtvFLT_VsjX6oYWECCbKw&usqp=CAU" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="exampleSelectBorder">Kategori Peserta</label>
                                    <select id="kategoriPesertaId" name="kategoriPesertaId" class="custom-select form-control-border" id="exampleSelectBorder">
                                        <option value="" selected="selected">Please Choose</option>
                                        <?php foreach ($kategoriPeserta as $key => $val) : ?>
                                            <option value="<?= $val['id'] ?>"><?= $val['nama'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>NoSertifikat</label>
                                <input type="number" id="nosertifikat" name="nosertifikat" class="form-control" rows="3" placeholder="Enter ..."></input>
                            </div>
                            <div class="form-group">
                                <label>Alasan Mendaftar</label>
                                <textarea id="alasan" name="alasan" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Simpan" class="btn btn-success btn-block" />
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    </div>
    <!--/. container-fluid -->
</section>

<?= $this->endSection() ?>