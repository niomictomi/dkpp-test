<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penasihat Khusus Presiden</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="bg-gray-100">

    <!-- Header -->
    @include('landingpage.sectionheader')

        <!-- Card Section -->
        @yield('content')

    <!-- Footer -->
    <footer class="bg-blue-950 text-white py-6 w-full px-4">
        <div class="container  md:mx-16 flex flex-wrap justify-between items-center mb-4">
            <a href="/">
                <div class="flex flex-col md:flex-row items-center gap-4">
                    <img src="{{ asset('img/logo.png') }}" alt="Hero Image"
                        class="w-24 h-24 object-cover rounded-full bg-white">
                    <div class="flex flex-col text-center md:text-start">
                        <h1 class="text-xl md:text-2xl font-bold">
                            PENASIHAT KHUSUS PRESIDEN <br> BIDANG POLITIK DAN KEAMANAN
                        </h1>
                        <p class="text-xs md:text-sm">
                            Jl. Teuku Umar No.10-12 12, RT.1/RW.1, Gondangdia, Kec. Menteng, Kota Jakarta Pusat, Daerah
                            Khusus Ibukota Jakarta 10350
                        </p>
                    </div>
                </div>
            </a>
        </div>

        <div class="container md:mx-16 border-t border-gray-600 pt-3">
            <p class="text-xs md:text-sm text-center md:text-left">&copy; 2024
                Penasihat Khusus Presiden Bidang Politik dan Keamanan

            </p>
        </div>
    </footer>


    <!-- Tombol Scroll to Top -->
    <button id="scrollToTopBtn" title="Go to top"
        class="fixed bottom-5 right-5 bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-2 rounded-full shadow-lg hidden">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-10">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="m15 11.25-3-3m0 0-3 3m3-3v7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </svg>

    </button>


    <script>
        // Menambahkan smooth scroll ke anchor link
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>


    <script>
        // JavaScript untuk toggle dropdown
        document.getElementById("profilBtn").addEventListener("click", function() {
            const dropdown = document.getElementById("profilDropdown");
            dropdown.classList.toggle("hidden"); // Toggle visibility of the dropdown
        });

        // Menutup dropdown ketika area lain di luar navbar di-klik
        window.addEventListener("click", function(e) {
            const dropdown = document.getElementById("profilDropdown");
            const button = document.getElementById("profilBtn");

            // Jika klik terjadi di luar dropdown atau tombol, tutup dropdown
            if (!button.contains(e.target) && !dropdown.contains(e.target)) {
                dropdown.classList.add("hidden");
            }
        });
    </script>
    <script src="{{ asset('js/app.js') }}"></script>

    <script>
        // Ambil tombol
        const scrollToTopBtn = document.getElementById("scrollToTopBtn");

        // Tampilkan tombol saat scroll lebih dari 300px
        window.onscroll = () => {
            if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
                scrollToTopBtn.classList.remove("hidden");
            } else {
                scrollToTopBtn.classList.add("hidden");
            }
        };

        // Scroll ke atas saat tombol diklik
        scrollToTopBtn.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    </script>



</body>

</html>
