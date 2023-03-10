<div id="modalElAdultery" tabindex="-1" aria-hidden="true" class="modal modal-hidden fixed top-0 left-0 right-0 z-50 p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
    <div class="modal-content relative w-full max-w-lg">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="p-6 text-center">
                <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <p class="mb-8 prose text-3xl font-normal text-gray-500 dark:text-gray-400">Czy masz skończone 18 lat?</p>
                <button  id="accept" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 rounded-lg prose text-base inline-flex items-center px-5 py-2.5 text-center mr-2 mb-8">
                    Tak, jestem pełnoletni
                </button>
                <button id="reject" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 prose text-base px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600"><a href="/">Nie (powrót do strony głównej)</a></button>
            </div>

        </div>
    </div>
</div>

<!-- little hack to include dynamic tw classes that we want to use in a bundle -->
<span class="backdrop-blur-lg hidden"></span>