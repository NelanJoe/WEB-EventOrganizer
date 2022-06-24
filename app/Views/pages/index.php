<?= $this->extend('layouts/templates') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="row">
        <div class="col mb-3">
            <h4>Hello, World</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <table class="table table-bordered table-hover">
                <thead class="bg-indigo text-center">
                    <tr>
                        <th>No</th>
                        <th>Jenis Kegiatan</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.content -->

</div>

<?= $this->endSection() ?>