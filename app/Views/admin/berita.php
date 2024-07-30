<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('head'); ?>
<link href="<?= base_url('vendor/datatables/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet">
<?= $this->endSection(); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">List Berita</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Kategori</th>
                            <th>Tanggal</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Kategori</th>
                            <th>Tanggal</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($berita as $b) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $b['title']; ?></td>
                                <td><?= $b['descriptions']; ?></td>
                                <td><?= $b['category']; ?></td>
                                <td><?= $b['date']; ?></td>
                                <td>
                                    <a href="<?= base_url('admin/berita/' . $b['id']); ?>" class="badge badge-info">Detail</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<!-- Page level plugins -->
<script src="<?= base_url('vendor/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?= base_url('vendor/datatables/dataTables.bootstrap4.min.js'); ?>"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('js/demo/datatables-demo.js'); ?>"></script>
<?= $this->endSection(); ?>