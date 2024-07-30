<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-24 px-4 md:px-20 mx-auto">
    <div class="mockup-browser bg-base-300 border">
        <div class="mockup-browser-toolbar">
            <div class="input">profile/<?= user()->username; ?></div>
        </div>
        <div class="bg-base-200 flex justify-center px-4 py-16">
            <div class="card p-6 md:p-0 lg:card-side bg-base-100 shadow-xl max-w-[48rem]">
                <figure class="w-full md:w-2/5 m-0 overflow-hidden bg-clip-border shrink-0">
                    <img src="<?= base_url(); ?>images/user_images/<?= user()->user_image; ?>" alt="<?= user()->username; ?>" class="object-contain w-full h-full" />
                </figure>
                <div class="card-body h-full flex flex-col justify-between p-2 md:p-8">
                    <div class="flex flex-col gap-5">
                        <h2 class="card-title mb-4"><?= user()->username; ?></h2>
                        <p class="font-medium flex flex-row items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>
                            <?= user()->email; ?>
                        </p>
                        <p class="font-medium min-h-fit flex items-center">
                            <?= user()->fullname; ?>
                        </p>
                        <p class="font-medium min-h-fit flex items-center">Angkatan: <span class="badge badge-accent ml-2"><?= user()->angkatan; ?></span></p>
                    </div>
                    <div class="card-actions justify-end mt-6">
                        <a href="<?= base_url('profile/edit/' . user_id()); ?>" class="btn btn-info">Edit Profile</a>
                    </div>
                </div>
            </div>
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