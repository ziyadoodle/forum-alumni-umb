<?= $this->extend('layout/auth_template'); ?>

<?= $this->section('content'); ?>
<div class="container h-screen w-full max-w-full bg-gradient-to-r from-cyan-500 via-blue-500 to-blue-700 flex flex-wrap content-center justify-center">
    <div class="relative flex flex-col text-gray-700 bg-white shadow-md w-96 rounded-xl bg-clip-border">
        <div class="relative grid mx-4 mb-4 -mt-6 px-2 overflow-hidden text-white shadow-lg h-36 place-items-center rounded-xl bg-gradient-to-tr from-gray-900 to-gray-800 bg-clip-border shadow-gray-900/20">
            <h3 class="block font-sans text-3xl antialiased font-semibold leading-snug tracking-normal text-white">
                Sign In
            </h3>
        </div>

        <div class="px-2">
            <?= view('Myth\Auth\Views\_message_block') ?>
        </div>

        <form action="<?= url_to('login') ?>" method="POST">
            <?= csrf_field() ?>
            <div class="flex flex-col gap-4 p-6">
                <div class="relative h-fit w-full min-w-[200px]">
                    <?php if ($config->validFields === ['email']) : ?>
                        <label class="input input-bordered flex items-center gap-2 <?php if (session('errors.login')) : ?>input-error<?php endif ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-4 w-4 opacity-70">
                                <path d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" />
                                <path d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" />
                            </svg>
                            <input type="email" id="email" name="email" class="grow" placeholder="<?= lang('Auth.email') ?>" />
                        </label>
                    <?php else : ?>
                        <label class="input input-bordered flex items-center gap-2 <?php if (session('errors.login')) : ?>input-error<?php endif ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-4 w-4 opacity-70">
                                <path d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" />
                                <path d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" />
                            </svg>
                            <input type="text" id="login" name="login" class="grow" placeholder="<?= lang('Auth.emailOrUsername') ?>" />
                        </label>
                    <?php endif; ?>
                    <span class="text-xs text-red-500"><?= session('errors.login') ?></span>
                </div>
                <div class="relative h-fit w-full min-w-[200px]">
                    <label class="input input-bordered flex items-center gap-2 <?php if (session('errors.password')) : ?>input-error<?php endif ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-4 w-4 opacity-70">
                            <path fill-rule="evenodd" d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z" clip-rule="evenodd" />
                        </svg>
                        <input type="password" id="password" name="password" class="grow" placeholder="<?= lang('Auth.password') ?>" />
                    </label>
                    <span class="text-xs text-red-500"><?= session('errors.password') ?></span>
                </div>
                <?php if ($config->allowRemembering) : ?>
                    <div class="-ml-2.5">
                        <div class="inline-flex items-center">
                            <label htmlFor="checkbox" class="relative flex items-center p-3 rounded-full cursor-pointer">
                                <input type="checkbox" name="remember" <?php if (old('remember')) : ?> checked <?php endif ?> class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:bg-gray-900 checked:before:bg-gray-900 hover:before:opacity-10" id="remember" />
                                <span class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" stroke="currentColor" stroke-width="1">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                            </label>
                            <label class="mt-px font-light text-gray-700 cursor-pointer select-none" htmlFor="checkbox">
                                <?= lang('Auth.rememberMe') ?>
                            </label>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="p-6 pt-0">
                <button type="submit" class="block w-full select-none rounded-lg bg-gradient-to-tr from-gray-900 to-gray-800 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                    <?= lang('Auth.loginAction') ?>
                </button>
                <?php if ($config->activeResetter) : ?>
                    <p class="flex justify-center mt-6 font-sans text-sm antialiased leading-normal text-inherit">
                        <a href="<?= base_url('forgot') ?>" class="block ml-1 font-sans text-sm antialiased font-bold leading-normal text-gray-900 hover:underline">
                            <?= lang('Auth.forgotYourPassword') ?>
                        </a>
                    </p>
                <?php endif; ?>
                <?php if ($config->allowRegistration) : ?>
                    <p class="flex justify-center mt-6 font-sans text-sm antialiased leading-normal text-inherit">
                        Don't have an account?
                        <a href="<?= base_url('register') ?>" class="block ml-1 font-sans text-sm antialiased font-bold leading-normal text-gray-900 hover:underline">
                            Sign up
                        </a>
                    </p>
                <?php endif; ?>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>