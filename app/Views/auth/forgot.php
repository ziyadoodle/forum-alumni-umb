<?= $this->extend('layout/auth_template'); ?>

<?= $this->section('content'); ?>
<div class="container h-screen w-full max-w-full bg-gradient-to-r from-cyan-500 via-blue-500 to-blue-700 flex flex-wrap content-center justify-center">
    <div class="relative flex flex-col text-gray-700 bg-white shadow-md w-96 rounded-xl bg-clip-border">
        <div class="relative grid mx-4 mb-4 -mt-6 px-2 py-6 overflow-hidden text-white shadow-lg h-36 place-items-center rounded-xl bg-gradient-to-tr from-gray-900 to-gray-800 bg-clip-border shadow-gray-900/20">
            <h3 class="block font-sans text-2xl antialiased font-semibold leading-snug tracking-normal text-white">
                <?= lang('Auth.forgotPassword') ?>
            </h3>
            <p class="text-xs text-center">
                <?= lang('Auth.enterEmailForInstructions') ?>
            </p>
        </div>

        <div class="px-2">
            <?= view('Myth\Auth\Views\_message_block') ?>
        </div>

        <form action="<?= url_to('forgot') ?>" method="POST">
            <?= csrf_field() ?>
            <div class="flex flex-col gap-4 p-6">
                <div class="relative h-fit w-full min-w-[200px]">
                    <label class="input input-bordered flex items-center gap-2 <?php if (session('errors.email')) : ?>input-error<?php endif ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-4 w-4 opacity-70">
                            <path d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" />
                            <path d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" />
                        </svg>
                        <input type="email" id="email" name="email" class="grow" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" />
                    </label>
                    <span class="text-xs text-red-500"><?= session('errors.email') ?></span>
                </div>
            </div>
            <div class="p-6 pt-0">
                <button type="submit" class="block w-full select-none rounded-lg bg-gradient-to-tr from-gray-900 to-gray-800 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                    <?= lang('Auth.sendInstructions') ?>
                </button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>