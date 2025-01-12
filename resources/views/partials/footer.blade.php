<footer class="p-4 bg-white md:p-8 lg:p-10 dark:bg-gray-800">
    <div class="mx-auto max-w-screen-xl text-center">
        <a href="#" class="flex justify-center items-center text-2xl font-semibold text-gray-900 dark:text-white">
            <img src="{{ asset('gambar/nest.png') }}" class="mr-2 h-8" alt="logo" srcset="">
            Baby Fuel
        </a>
        <p class="my-6 text-gray-500 dark:text-gray-400">Open-source library of over 400+ web components and
            interactive
            elements built for better web.</p>
        <ul class="flex flex-wrap justify-center items-center mb-6 text-gray-900 dark:text-white">

            <li>
                <a href="{{ request()->is('/') ? '#hero' : url('/') }}"
                    class="block py-2 px-3 rounded md:p-0 mr-4 hover:underline md:mr-6
                       hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                    Home
                </a>
            </li>
            <li>
                <a href="{{ request()->is('/') ? '#about' : url('/#about') }}"
                    class="block py-2 px-3 rounded md:p-0 mr-4 hover:underline md:mr-6      
                       hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                    About
                </a>
            </li>
            <li>
                <a href="{{ request()->is('/') ? '#article' : url('/#article') }}"
                    class="block py-2 px-3 rounded md:p-0 mr-4 hover:underline md:mr-6                        
                       hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                    Article
                </a>
            </li>
            <li>
                <a href="{{ request()->is('/') ? '#contact' : url('/#contact') }}"
                    class="block py-2 px-3 rounded md:p-0 mr-4 hover:underline md:mr-6                        
                       hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                    Contact
                </a>
            </li>
        </ul>
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2021-2022 <a href="#"
                class="hover:underline">Flowbite™</a>. All Rights Reserved.</span>
    </div>
</footer>
