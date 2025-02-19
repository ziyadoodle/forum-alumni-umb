<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">User Detail</h1>

    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-3" style="max-width: 620px;">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <img src="<?= base_url('images/user_images/' . $user->user_image); ?>" alt="<?= $user->username; ?>" style="object-fit: contain; width: 100%; height: 100%;">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <h5 class="card-title"><?= $user->username; ?></h5>
                                </li>

                                <?php if ($user->fullname) : ?>
                                    <li class="list-group-item"><?= $user->fullname; ?></li>
                                <?php endif; ?>

                                <li class="list-group-item"><?= $user->email; ?></li>
                                <li class="list-group-item">
                                    <span class="badge badge-<?= ($user->name == 'admin') ? 'success' : 'warning' ?>"><?= $user->name; ?></span>
                                </li>
                                <li class="list-group-item">
                                    <small><a href="<?= base_url('admin'); ?>">&laquo; back to user list</a></small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>