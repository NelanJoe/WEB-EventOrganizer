<?= $this->extend('layouts/templates') ?>
<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4>Edit Users</h4>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('user/update/' . $users['id']) ?>" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" value="<?= $users['username'] ?>" id="username" name="username" placeholder="Nama User">
                        </div>
                        <div class="form-group d-flex">
                            <label for="nama" class="mr-2">Activete: </label>
                            <div class="form-check mr-2">
                                <input class="form-check-input" type="radio" name="active" id="active" value="1" <?= $users['active'] == 1 ? 'checked' : '' ?>>
                                <label class="form-check-label" for="active">
                                    Active
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="active" id="active" value="0" <?= $users['active'] == 0 ? 'checked' : '' ?>>
                                <label class="form-check-label" for="active">
                                    Inactive
                                </label>
                            </div>
                        </div>
                        <div class="form-group d-flex">
                            <button type="submit" class="btn btn-primary mr-3">Submit</button>
                            <a href="<?= base_url('user') ?>" class="btn btn-dark">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection() ?>