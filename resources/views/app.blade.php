<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('gambar/nest.png') }}">

    <title>Baby Fuel</title>

    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
    @filamentStyles
    @vite('resources/css/app.css')
</head>

<body class="bg-white dark:bg-slate-950 antialiased">
    <!-- Spinner Loading -->
    <div id="loading" class="fixed inset-0 flex justify-center items-center bg-white dark:bg-slate-950 z-50">
        <div class="spinner-border animate-spin inline-block w-16 h-16 border-4 border-t-4 border-gray-200 border-t-primary rounded-full"
            role="status">
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
    {{-- script smooth scrooling --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const links = document.querySelectorAll('a[href^="#"]');

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
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('nav a'); // Sesuaikan selector jika navigasi berbeda

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

            // Jalankan saat scroll
            window.addEventListener('scroll', setActiveLink);
        });
    </script>
    {{-- script mode gelap --}}
    <script>
        var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

        // Change the icons inside the button based on previous settings
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            themeToggleLightIcon.classList.remove('hidden');
        } else {
            themeToggleDarkIcon.classList.remove('hidden');
        }

        var themeToggleBtn = document.getElementById('theme-toggle');

        themeToggleBtn.addEventListener('click', function() {
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');

            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                }
            } else {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                }
            }
        });
    </script>

    @vite('resources/js/app.js')

    <!-- Menghilangkan spinner setelah halaman dimuat -->
    <script>
        window.addEventListener('load', function() {
            document.getElementById('loading').style.display = 'none';
        });
    </script>
</body>

</html>
