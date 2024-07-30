<?= $this->extend('admin/templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Detail Berita</h1>

    <div class="row">
        <div class="col">
            <div class="card mb-3 pt-5 px-3">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <img src="<?= base_url('images/news_images/' . $berita->image); ?>" alt="<?= $berita->image; ?>" style="object-fit: contain; width: 100%; height: 100%;">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <p style="font-size: 0.8rem; font-weight: bold;">Judul</p>
                                    <h5 class="card-title"><?= $berita->title; ?></h5>
                                </li>
                                <li class="list-group-item">
                                    <p style="font-size: 0.8rem; font-weight: bold;">Deskripsi</p>
                                    <?= $berita->descriptions; ?>
                                </li>
                                <li class="list-group-item">
                                    <p style="font-size: 0.8rem; font-weight: bold;">Kategori</p>
                                    <?= $berita->category; ?>
                                </li>
                                <li class="list-group-item">
                                    <p style="font-size: 0.8rem; font-weight: bold;">Tanggal</p>
                                    <?= $berita->date; ?>
                                </li>
                                <li class="list-group-item">
                                    <small><a href="<?= base_url('admin/berita'); ?>">&laquo; back to news list</a></small>
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