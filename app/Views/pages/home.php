<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container h-screen w-full max-w-full bg-hero bg-cover bg-center text-white text-center content-center px-16 2xl:px-60">
    <p class="font-serif  text-6xl xl:text-8xl 2xl:text-9xl mb-16 drop-shadow-lg">Sistem Informasi Alumni</p>
    <p class="font-serif text-xl 2xl:text-2xl drop-shadow-2xl w-full xl:w-2/3 mx-auto">Forum Alumni Universitas Muhammadiyah Bandung bukan hanya tentang reuni dan nostalgia. Di sini, kita dapat saling menguatkan, berbagi ilmu dan pengalaman, serta berkontribusi untuk kemajuan almamater dan masyarakat luas.</p>
</div>
<div class="container mx-auto flex flex-wrap flex-row justify-between gap-5">
    <?php foreach ($alumni as $a) : ?>
        <div class="flex flex-col mt-6 text-gray-700 bg-white border border-blue-400 bg-clip-border rounded-xl w-72 2xl:w-80">
            <div class="p-6 text-center">
                <div class="flex justify-center items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-12 h-12 mb-4 text-white bg-blue-400 rounded-full p-2 box-content">
                        <path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z" clip-rule="evenodd" />
                        <path d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
                    </svg>
                </div>
                <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                    Alumni <?= $a['angkatan']; ?>
                </h5>
                <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                    <?= $a['jumlah']; ?>
                </p>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?= $this->endSection(); ?>