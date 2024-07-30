<div class="navbar sticky top-0 z-10 bg-white px-4 py-2 lg:px-8 bg-opacity-80 backdrop-blur-2xl backdrop-saturate-200">
    <div class="navbar-start">
        <a class="btn btn-ghost text-xl">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
            </svg>
            Forum Alumni UMB
        </a>
    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
            <li>
                <a href="/home">
                    Home
                </a>
            </li>
            <li>
                <a href="<?= base_url('berita'); ?>">
                    Berita
                </a>
            </li>
            <li>
                <a href="<?= base_url('donasi'); ?>">
                    Donasi
                </a>
            </li>
            <li>
                <a href="<?= base_url('alumni'); ?>">
                    Cari Alumni
                </a>
            </li>
        </ul>
    </div>
    <div class="navbar-end gap-4">
        <a href="<?= base_url('login') ?>" class="hidden px-4 py-2 font-sans text-xs font-bold text-center text-gray-900 uppercase align-middle transition-all rounded-lg select-none hover:bg-gray-900/10 active:bg-gray-900/20 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:inline-block">
            Log In
        </a>
        <a href="<?= base_url('register') ?>" class="hidden select-none rounded-lg bg-gradient-to-tr from-gray-900 to-gray-800 py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:inline-block">
            Sign in
        </a>
        <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                <li>
                    <a href="/home">
                        Home
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('berita'); ?>">
                        Berita
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('donasi'); ?>">
                        Donasi
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('alumni'); ?>">
                        Cari Alumni
                    </a>
                </li>
                <li class="pt-2">
                    <a href="<?= base_url('login') ?>" class="select-none rounded-lg bg-gradient-to-tr from-gray-900 to-gray-800 py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:inline-block">
                        Log In
                    </a>
                </li>
                <li class="pt-2">
                    <a href="<?= base_url('register') ?>" class="select-none rounded-lg bg-gradient-to-tr from-gray-900 to-gray-800 py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:inline-block">
                        Sign in
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>