<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-16 px-4 md:px-20 mx-auto">
    <nav aria-label="breadcrumb" class="w-max mb-16">
        <ol class="flex flex-wrap items-center w-full px-4 py-2 rounded-md bg-gray-50 bg-opacity-60">
            <li class="flex items-center font-sans text-sm antialiased font-normal leading-normal transition-colors duration-300 cursor-pointer text-gray-900 hover:text-blue-500">
                <a href="<?= base_url('home'); ?>" class="opacity-60">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                        </path>
                    </svg>
                </a>
                <span class="mx-2 font-sans text-sm antialiased font-normal leading-normal pointer-events-none select-none text-gray-500">
                    /
                </span>
            </li>
            <li class="flex items-center font-sans text-sm antialiased font-normal leading-normal transition-colors duration-300 cursor-pointer text-gray-900 hover:text-blue-500">
                <a href="<?= base_url('berita'); ?>" class="opacity-60">
                    <span>
                        Berita
                    </span>
                </a>
                <span class="mx-2 font-sans text-sm antialiased font-normal leading-normal pointer-events-none select-none text-gray-500">/</span>
            </li>
            <li class="flex items-center font-sans text-sm antialiased font-normal leading-normal transition-colors duration-300 text-gray-900">
                <p>
                    Detail Berita
                </p>
            </li>
        </ol>
    </nav>

    <div class="w-full md:w-3/5">
        <img class="w-full" src="<?= base_url(); ?>images/news_images/<?= $berita['image']; ?>" alt="<?= $berita['image'] ?>" alt="<?= $berita['image']; ?>">
    </div>
    <h1 class="text-xl md:text-3xl font-bold my-10"><?= $berita['title']; ?></h1>
    <p class="text-justify text-lg md:text-xl"><?= $berita['descriptions']; ?></p>
    <div class="flex flex-row justify-between mt-24">
        <p class="text-sm">Category: <span class="font-semibold"><?= $berita['category']; ?></span></p>
        <p class="text-sm">Date: <span class="font-semibold"><?= $berita['date']; ?></span></p>
    </div>
</div>
</div>

<div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
    <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#0469FF] to-[#199BEC] opacity-50 sm:left-[calc(50%-50rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
</div>
<div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-50rem)]" aria-hidden="true">
    <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#0469FF] to-[#199BEC] opacity-50 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
</div>
<?= $this->endSection(); ?>