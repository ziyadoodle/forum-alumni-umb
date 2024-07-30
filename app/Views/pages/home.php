<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container h-screen w-full max-w-full bg-hero bg-cover bg-center text-white text-center content-center px-16 2xl:px-60">
    <p class="font-serif  text-6xl xl:text-8xl 2xl:text-9xl mb-16 drop-shadow-lg">Sistem Informasi Alumni</p>
    <p class="font-serif text-xl 2xl:text-2xl drop-shadow-2xl w-full xl:w-2/3 mx-auto">Forum Alumni Universitas Muhammadiyah Bandung bukan hanya tentang reuni dan nostalgia. Di sini, kita dapat saling menguatkan, berbagi ilmu dan pengalaman, serta berkontribusi untuk kemajuan almamater dan masyarakat luas.</p>
</div>
<div class="container mx-auto flex flex-wrap flex-row justify-between gap-5">
    <div class="flex flex-col mt-16 text-gray-700 bg-white border border-blue-400 bg-clip-border rounded-xl w-72 2xl:w-80">
        <div class="p-6 text-center">
            <div class="flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 h-12 mb-4 text-white bg-blue-400 rounded-full p-2 box-content">
                    <path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z" clip-rule="evenodd" />
                    <path d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
                </svg>
            </div>
            <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                Alumni 2016
            </h5>
            <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                <?= $a_2016->angkatan; ?>
            </p>
        </div>
    </div>
    <div class="flex flex-col mt-16 text-gray-700 bg-white border border-blue-400 bg-clip-border rounded-xl w-72 2xl:w-80">
        <div class="p-6 text-center">
            <div class="flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 h-12 mb-4 text-white bg-blue-400 rounded-full p-2 box-content">
                    <path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z" clip-rule="evenodd" />
                    <path d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
                </svg>
            </div>
            <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                Alumni 2017
            </h5>
            <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                <?= $a_2017->angkatan; ?>
            </p>
        </div>
    </div>
    <div class="flex flex-col mt-16 text-gray-700 bg-white border border-blue-400 bg-clip-border rounded-xl w-72 2xl:w-80">
        <div class="p-6 text-center">
            <div class="flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 h-12 mb-4 text-white bg-blue-400 rounded-full p-2 box-content">
                    <path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z" clip-rule="evenodd" />
                    <path d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
                </svg>
            </div>
            <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                Alumni 2018
            </h5>
            <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                <?= $a_2018->angkatan; ?>
            </p>
        </div>
    </div>
    <div class="flex flex-col mt-16 text-gray-700 bg-white border border-blue-400 bg-clip-border rounded-xl w-72 2xl:w-80">
        <div class="p-6 text-center">
            <div class="flex justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 h-12 mb-4 text-white bg-blue-400 rounded-full p-2 box-content">
                    <path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z" clip-rule="evenodd" />
                    <path d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
                </svg>
            </div>
            <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                Alumni 2019
            </h5>
            <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                <?= $a_2019->angkatan; ?>
            </p>
        </div>
    </div>
    <div class="flex flex-col mt-16">
        <h1 class="text-xl 2xl:text-3xl font-bold text-center">Berita Terbaru</h1>
        <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 p-4">
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
<?= $this->endSection(); ?>