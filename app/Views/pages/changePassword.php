<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>
    <div class="container my-5 d-flex flex-column align-items-center">
        <div class="col-md-6">
            <form action="/changePassword" method="post">
                <input type="hidden" name="id" value="<?= user()->id ?>">
                <h3 class="fw-bold mb-4">Change Password</h3>

                <?php if (session()->getFlashData('fail')) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('fail'); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php endif; ?>

                <div class="mb-3">
                    <label for="name" class="form-label">Current Password</label>
                    <input type="password" name="old-password" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">New Password</label>
                    <input type="password" name="new-password" class="form-control" id="name">
                </div>
                <button type="submit" class="primary px-3 py-2 fw-bold border border-0">Update</button>
            </form>
        </div>
    </div>
<?= $this->endSection() ?>