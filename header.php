<header class="fixed top-0 left-0 w-full shadow-md z-50">
    <dialog
        class="w-full bg-white dark:bg-black backdrop:bg-teal-700 backdrop:opacity-80 rounded-lg shadow shadow-black">
        <div
            class="p-4 font-medium md:p-0 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:dark:bg-gray-900 dark:border-gray-700">
            <form class="float-right" method="dialog">
                <button
                    class="mr-2 right text-green-500 hover:bg-gray-300 hover:text-white rounded text-sm w-25 h-5 ms-auto inline-flex justify-center items-center dark:hover:text-white"
                    data-modal-hide="default-modal">
                    Fermer
                </button>
            </form>
            <img src="Images/Site/logo_JA.webp" class="h-10 mb-4 invert dark:invert-0" alt="Logo" />
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
    <nav class="w-full bg-white dark:bg-black">
        <div class="max-w-screen-lg flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="index.php?page=home" class="flex items-center space-x-3 
    rtl:space-x-reverse">
                <div class="invert dark:invert-0">
                    <img src="Images/Site/logo_JA.webp" class="h-10" alt="Logo" />
                </div>
                <span class="self-center text-m font-semibold whitespace-nowrap text-black
        dark:text-white">JA de Nantes</span>
            </a>
            <button onclick="document.querySelector('dialog').showModal();" class="mr-2">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
    </nav>
</header>