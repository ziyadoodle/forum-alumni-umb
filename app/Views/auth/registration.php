<?= $this->extend('layout/auth_template'); ?>

<?= $this->section('content'); ?>
<div class="container h-screen w-full max-w-full bg-gradient-to-r from-cyan-500 via-blue-500 to-blue-700 flex flex-col flex-wrap content-center justify-center">
    <div class="relative flex flex-col text-gray-700 bg-white shadow-md w-100 rounded-xl bg-clip-border">
        <div class="relative grid mx-4 mb-4 -mt-6 px-2 overflow-hidden text-white shadow-lg h-24 md:h-36 place-items-center rounded-xl bg-gradient-to-tr from-gray-900 to-gray-800 bg-clip-border shadow-gray-900/20">
            <h3 class="block font-sans text-xl md:text-3xl antialiased font-semibold leading-snug tracking-normal text-white">
                <?= lang('Auth.register') ?>
            </h3>
        </div>

        <?= view('Myth\Auth\Views\_message_block') ?>

        <form class="user" action="<?= route_to('register'); ?>" method="POST">
            <?= csrf_field(); ?>
            <div class="flex px-6">
                <?php if (session()->getFlashdata('message')) : ?>
                    <div class="relative mx-auto w-full block p-4 mb-2 text-base leading-5 text-white bg-green-500 rounded-lg opacity-100 font-regular">
                        <?= session()->getFlashdata('message'); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="flex flex-col md:flex-row gap-4 px-6 py-4">
                <div class="relative h-11 w-full">
                    <label class="input input-bordered flex items-center gap-2 <?php if (session('errors.username')) : ?>input-error<?php endif ?>">
                        <svg xmlns=" http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-4 w-4 opacity-70">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" />
                        </svg>
                        <input type="text" id="username" name="username" class="grow" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>" />
                    </label>
                    <span class="text-xs text-red-500"><?= (session('validation')) ? session('validation')->getError('username') : '' ?></span>
                </div>
                <div class="relative h-11 w-full">
                    <label class="input input-bordered flex items-center gap-2 <?php if (session('errors.fullname')) : ?>input-error<?php endif ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-4 w-4 opacity-70">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" />
                        </svg>
                        <input type="text" id="fullname" name="fullname" class="grow" placeholder="Fullname" value="<?= old('fullname') ?>" />
                    </label>
                    <span class="text-xs text-red-500"><?= (session('validation')) ? session('validation')->getError('fullname') : '' ?></span>
                </div>
            </div>
            <div class="flex flex-col gap-4 px-6 py-4">
                <div class="relative h-11 w-full min-w-[200px]">
                    <label class="input input-bordered flex items-center gap-2 <?php if (session('errors.email')) : ?>input-error<?php endif ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-4 w-4 opacity-70">
                            <path d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" />
                            <path d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" />
                        </svg>
                        <input type="email" id="email" name="email" class="grow" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>" />
                    </label>
                    <span class="text-xs text-red-500"><?= (session('validation')) ? session('validation')->getError('email') : '' ?></span>
                </div>
                <div class="relative h-11 w-full min-w-[200px] mt-3">
                    <select id="angkatan" name="angkatan" class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-gray-900 focus:border-2 focus:border-gray-900 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50">
                        <option value="0" selected>Pilih Angkatan</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                    </select>
                    <label class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-gray-900 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                        Pilih Angkatan
                    </label>
                    <span class="text-xs text-red-500"><?= (session('validation')) ? session('validation')->getError('angkatan') : '' ?></span>
                </div>
            </div>
            <div class="flex flex-col md:flex-row gap-4 px-6 py-3">
                <div class="relative h-11 w-full">
                    <label class="input input-bordered flex items-center gap-2 <?php if (session('errors.password')) : ?>input-error<?php endif ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-4 w-4 opacity-70">
                            <path fill-rule="evenodd" d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z" clip-rule="evenodd" />
                        </svg>
                        <input type="password" id="password" name="password" class="grow" placeholder="<?= lang('Auth.password') ?>" autocomplete="off" />
                    </label>
                    <span class="text-xs text-red-500"><?= (session('validation')) ? session('validation')->getError('password1') : '' ?></span>
                </div>
                <div class="relative h-11 w-full">
                    <label class="input input-bordered flex items-center gap-2 <?php if (session('errors.pass_confirm')) : ?>input-error<?php endif ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-4 w-4 opacity-70">
                            <path fill-rule="evenodd" d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z" clip-rule="evenodd" />
                        </svg>
                        <input type="password" id="pass_confirm" name="pass_confirm" class="grow" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off" />
                    </label>
                </div>
            </div>
            <div class="p-6">
                <button type="submit" class="block w-full select-none rounded-lg bg-gradient-to-tr from-gray-900 to-gray-800 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                    <?= lang('Auth.register') ?>
                </button>
                <p class="flex justify-center mt-6 font-sans text-sm antialiased leading-normal text-inherit">
                    <?= lang('Auth.alreadyRegistered') ?>
                    <a href="<?= base_url('login') ?>" class="block ml-1 font-sans text-sm antialiased font-bold leading-normal text-gray-900 hover:underline">
                        <?= lang('Auth.signIn') ?>
                    </a>
                </p>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>