<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-24 px-4 md:px-20 mx-auto">
    <div class="mockup-browser bg-base-300 border">
        <div class="mockup-browser-toolbar">
            <div class="input">edit_profil/<?= user()->username; ?></div>
        </div>
        <div class="bg-base-200 flex justify-center px-4 py-16">
            <div class="card p-6 md:p-0 lg:card-side bg-base-100 shadow-xl max-w-[48rem]">
                <figure class="w-full md:w-2/5 m-0 overflow-hidden bg-clip-border shrink-0">
                    <img src="<?= base_url(); ?>images/user_images/<?= user()->user_image; ?>" alt="<?= user()->username; ?>" class="object-contain w-full h-full" />
                </figure>
                <form action="<?= base_url('profile/update/' . user_id()) ?>" method="POST" enctype="multipart/form-data" class="w-full">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="id" value="<?= user_id(); ?>">
                    <div class="card-body h-full flex flex-col justify-between p-2 md:p-8">
                        <div class="flex flex-col gap-5">
                            <h2 class="card-title"><?= user()->username; ?></h2>
                            <label class="input input-bordered flex items-center gap-2">
                                <span class="font-bold">Email</span>
                                <input type="email" class="grow" value="<?= user()->email; ?>" disabled />
                            </label>
                            <label class="input input-bordered flex items-center gap-2">
                                <span class="font-bold">Name</span>
                                <input type="text" name="fullname" class="grow" value="<?= user()->fullname; ?>" />
                            </label>
                            <label class="form-control w-full">
                                <div class="label">
                                    <span class="label-text">Pilih Angkatan</span>
                                </div>
                                <select name="angkatan" class="select select-bordered w-full">
                                    <option readonly selected value="<?= user()->angkatan; ?>"><?= user()->angkatan; ?></option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                </select>
                            </label>
                            <label class="form-control w-full">
                                <div class="label">
                                    <span class="label-text">User Image</span>
                                </div>
                                <input type="file" id="user_image" name="user_image" class="file-input file-input-bordered w-full" />
                                <input type="hidden" name="old_image" value="<?= user()->user_image; ?>" />
                            </label>
                        </div>
                        <div class="card-actions justify-end mt-6">
                            <a href="<?= base_url('profile'); ?>" class="btn btn-outline btn-info">Cancel</a>
                            <button type="submit" class="btn btn-info">Save</button>
                        </div>
                    </div>
                </form>
            </div>
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