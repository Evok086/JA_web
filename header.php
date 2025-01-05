    <header class="fixed top-0 left-0 w-full shadow-md z-50">
        <dialog class="w-full bg-cyan-700 backdrop:bg-teal-700 backdrop:opacity-80 rounded-lg">
            <div
                class="p-4 font-medium md:p-0 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:dark:bg-gray-900 dark:border-gray-700">
                <form class="float-right" method="dialog">
                    <button
                        class="right bg-sky-900 text-white hover:bg-gray-300 hover:text-white rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:text-white"
                        data-modal-hide="default-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">fermer</span>
                    </button>
                </form>
                <ul class="flex flex-col gap-2">
                    <li>
                        <a href="index.php?page=home"
                            class="mb-2 text-blue-500 inline-block rounded md:bg-transparent
                md:text-yellow-700 md:p-0 dark:text-white md:dark:text-yellow-500 hover:text-blue-500 transition-all duration-500"
                            aria-current="page">Accueil</a>
                    </li>
                    <li>
                        <a href="index.php?page=planning"
                            class="mb-2 inline-block rounded md:bg-transparent
                md:text-yellow-700 md:p-0 dark:text-white md:dark:text-yellow-500 hover:text-blue-500 transition-all duration-500"
                            aria-current="page">Planning</a>
                    </li>
                    <li>
                    <a href="index.php?page=JA"
                    class="mb-2 inline-block rounded md:bg-transparent
                md:text-yellow-700 md:p-0 dark:text-white md:dark:text-yellow-500 hover:text-blue-500 transition-all duration-500"
                            aria-current="page">JA késako ?</a>
                    </li>
                    <li>
                    <a href="index.php?page=apropos"
                    class="inline-block rounded md:bg-transparent
                md:text-yellow-700 md:p-0 dark:text-white md:dark:text-yellow-500 hover:text-blue-500 transition-all duration-500"
                            aria-current="page">À Propos</a>
                    </li>
                </ul>
            </div>
        </dialog>
        <nav class="w-full bg-teal-700">
            <div class="max-w-screen-lg flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="index.php?page=home" class="flex items-center space-x-3 
    rtl:space-x-reverse">
                    <img src="Images/Site/logo_JA.webp" class="h-10" alt="Logo" />
                    <span class="self-center text-m font-semibold whitespace-nowrap
        dark:text-white">JA de Nantes</span>
                </a>
                <button onclick="document.querySelector('dialog').showModal();" class="inline-flex items-
    center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:
    bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 
    dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
        </nav>
    </header>