<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Your description here">
    <meta property="og:image" content="{{ asset('gambar/nest.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('gambar/nest.png') }}">

    <title>Little Steps</title>

    <script>
        // On page load or when changing themes
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>

    @filamentStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'], ['defer' => true])
</head>

<body class="bg-white dark:bg-slate-950 antialiased">
    <!-- Spinner Loading -->
    <div id="loading" class="fixed inset-0 flex justify-center items-center bg-white dark:bg-slate-950 z-50 hidden">
        <div class="spinner-border animate-spin inline-block w-16 h-16 border-4 border-t-4 border-gray-200 border-t-primary rounded-full"
            role="status" aria-hidden="true">
        </div>
    </div>

    <div id="app">
        <header>
            @include('partials.nav')
        </header>
        <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
            @yield('content')
        </main>
        @include('partials.footer')
    </div>

    @filamentScripts

    <!-- Smooth Scrolling and Active Links -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const links = document.querySelectorAll('a[href^="#"]');
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('nav a');

            // Smooth scrolling
            links.forEach(link => {
                link.addEventListener('click', function(e) {
                    if (this.hash) {
                        e.preventDefault();
                        const target = document.querySelector(this.hash);
                        if (target) {
                            target.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });
                        }
                    }
                });
            });

            // Active link highlighting
            const setActiveLink = () => {
                let currentSection = '';
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.offsetHeight;
                    if (window.scrollY >= sectionTop - sectionHeight / 3) {
                        currentSection = section.getAttribute('id');
                    }
                });
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href').includes(currentSection)) {
                        link.classList.add('active');
                    }
                });
            };

            window.addEventListener('scroll', setActiveLink);
        });
    </script>

    <!-- Dark Mode Toggle -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
    const themeToggleBtn = document.getElementById('theme-toggle');
    const darkIcon = document.getElementById('theme-toggle-dark-icon');
    const lightIcon = document.getElementById('theme-toggle-light-icon');

    // Fungsi untuk memeriksa mode gelap
    const isDarkMode = () => localStorage.getItem('color-theme') === 'dark' ||
        (!localStorage.getItem('color-theme') && window.matchMedia('(prefers-color-scheme: dark)').matches);

    // Update ikon tema berdasarkan mode
    const updateThemeIcons = () => {
        if (isDarkMode()) {
            document.documentElement.classList.add('dark');
            darkIcon.classList.add('hidden');
            lightIcon.classList.remove('hidden');
        } else {
            document.documentElement.classList.remove('dark');
            darkIcon.classList.remove('hidden');
            lightIcon.classList.add('hidden');
        }
    };

    // Periksa dan atur tema saat halaman dimuat
    updateThemeIcons();

    // Menangani toggle tema saat tombol diklik
    themeToggleBtn.addEventListener('click', () => {
        const newTheme = isDarkMode() ? 'light' : 'dark';
        localStorage.setItem('color-theme', newTheme);
        updateThemeIcons();
    });

    // Cek preferensi tema sistem pengguna
    const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");

    // Terapkan tema gelap secara otomatis berdasarkan preferensi sistem pengguna saat halaman dimuat
    if (prefersDarkScheme.matches && !localStorage.getItem('color-theme')) {
        document.documentElement.classList.add('dark');
        darkIcon.classList.add('hidden');
        lightIcon.classList.remove('hidden');
    }
});

    </script>

    <!-- Hide Spinner After Page Load -->
    <script>
        window.addEventListener('load', () => {
            document.getElementById('loading').classList.add('hidden');
        });
    </script>

    <!-- Fallback for JS-disabled Browsers -->
    <noscript>
        <p>Please enable JavaScript to view this page properly.</p>
    </noscript>
</body>

</html>
