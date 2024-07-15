<nav class="sticky top-0 z-10 block w-full max-w-full px-4 py-2 text-black bg-white border rounded-none shadow-md h-max border-white/80 bg-opacity-80 backdrop-blur-2xl backdrop-saturate-200 lg:px-8 lg:py-4">
    <div class="flex items-center justify-between text-gray-900">
        <div class="">

            <a href="#" class="flex flex-row items-center gap-1 mr-4 cursor-pointer py-1.5 font-sans text-base font-medium leading-relaxed text-inherit antialiased">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                </svg>
                Forum Alumni UMB
            </a>
        </div>
        <div class="flex items-center gap-4">
            <div class="hidden mr-4 lg:block">
                <ul class="flex flex-col gap-2 mt-2 mb-4 lg:mb-0 lg:mt-0 lg:flex-row lg:items-center lg:gap-6">
                    <li class="block p-1 font-sans text-sm antialiased font-normal leading-normal text-gray-900 bg-blue-300 rounded-md hover:text-gray-900">
                        <a href="/" class="flex items-center">
                            Home
                        </a>
                    </li>
                    <li class="block p-1 font-sans text-sm antialiased font-normal leading-normal text-gray-500 hover:text-gray-900">
                        <a href="#" class="flex items-center">
                            Berita
                        </a>
                    </li>
                    <li class="block p-1 font-sans text-sm antialiased font-normal leading-normal text-gray-500 hover:text-gray-900">
                        <a href="#" class="flex items-center">
                            Donasi
                        </a>
                    </li>
                    <li class="block p-1 font-sans text-sm antialiased font-normal leading-normal text-gray-500 hover:text-gray-900">
                        <a href="#" class="flex items-center">
                            Cari Alumni
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="flex items-center gap-x-1">
            <?php if (!logged_in()) : ?>
                <a href="/login" class="hidden px-4 py-2 font-sans text-xs font-bold text-center text-gray-900 uppercase align-middle transition-all rounded-lg select-none hover:bg-gray-900/10 active:bg-gray-900/20 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:inline-block">
                    Log In
                </a>
                <a href="/register" class="hidden select-none rounded-lg bg-gradient-to-tr from-gray-900 to-gray-800 py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:inline-block">
                    Sign in
                </a>
            <?php else : ?>
                <a href="/logout" class="hidden px-4 py-2 font-sans text-xs font-bold text-center text-gray-900 uppercase align-middle transition-all rounded-lg select-none hover:bg-gray-900/10 active:bg-gray-900/20 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:inline-block">
                    Log Out
                </a>
            <?php endif; ?>
        </div>
        <button class="relative ml-auto h-6 max-h-[40px] w-6 max-w-[40px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-inherit transition-all hover:bg-transparent focus:bg-transparent active:bg-transparent disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:hidden" type="button">
            <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </span>
        </button>
    </div>
</nav>