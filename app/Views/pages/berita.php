<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-24 px-4 md:px-20 mx-auto">
    <h1 class="text-xl 2xl:text-3xl font-bold text-center">Berita Alumni</h1>
    <?php if (logged_in()) : ?>
        <div class="w-full flex justify-end items-end mt-8">
            <a href="" class="btn btn-info text-sm">
                Buat Berita
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
            </a>
        </div>
    <?php endif; ?>
    <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 p-4">
        <?php foreach ($berita as $b) : ?>
            <div class="card bg-base-100/40 border border-gray-300 w-full shadow-xl">
                <figure class="px-10 pt-10">
                    <img src="<?= base_url(); ?>images/news_images/<?= $b['image']; ?>" alt="<?= $b['image'] ?>" class="rounded-xl" />
                </figure>
                <div class="card-body text-left">
                    <div class="flex flex-row justify-between">
                        <span class="text-xs font-semibold"><?= $b['category']; ?></span>
                        <span class="text-xs font-semibold"><?= $b['date']; ?></span>
                    </div>
                    <h2 class="card-title"><?= $b['title']; ?></h2>
                    <span class="line-clamp-3 mb-4"><?= $b['descriptions']; ?></span>
                    <div class="card-actions justify-end mt-auto">
                        <a href="<?= base_url('berita/' . $b['id']); ?>" class="btn btn-info">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                <path fill-rule="evenodd" d="M12.97 3.97a.75.75 0 0 1 1.06 0l7.5 7.5a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 1 1-1.06-1.06l6.22-6.22H3a.75.75 0 0 1 0-1.5h16.19l-6.22-6.22a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</div>

<div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
    <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#0469FF] to-[#199BEC] opacity-50 sm:left-[calc(50%-50rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
</div>
<div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
    <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#0469FF] to-[#199BEC] opacity-50 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
</div>
<?= $this->endSection(); ?>