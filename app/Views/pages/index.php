<?= $this->extend('layouts/templates') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="row">
        <div class="col mb-3">
            <h4>Hello, World</h4>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-bordered table-hover">
                <thead class="bg-dark">
                    <tr>
                        <th>#</th>
                        <th>First</th>
                        <th>Last</th>
                        <th>Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.content -->

</div>

<?= $this->endSection() ?>