<header class="bg-blue-950  py-4 border-b-4 border-orange-400 shadow-lg">
    <div class="container px-4 md:px-16 flex flex-col md:flex-row justify-between items-center">
        <a href="/">
            <div class="flex flex-col md:flex-row items-center gap-4">
                <img src="{{ asset('img/logo.png') }}" alt="Hero Image"
                    class="w-20 h-20 object-cover rounded-full bg-white">
                <h1 class="text-xl font-bold text-center md:text-start text-white">PENASIHAT KHUSUS PRESIDEN <br>BIDANG
                    POLITIK DAN KEAMANAN</h1>
            </div>
        </a>
        <nav class="mt-4 md:mt-0 ml-auto flex text-white flex-wrap">
            <a href="/#beranda" class="mx-2 p-3 w-24 text-sm rounded-lg text-center hover:bg-orange-400">Beranda</a>

            <!-- Dropdown Profil -->
            <div class="relative">
                <button id="profilBtn" class="mx-2 p-3 w-24 text-sm rounded-lg hover:bg-orange-400">
                    Profil
                </button>
                <div id="profilDropdown"
                    class="absolute hidden bg-white text-gray-700 rounded-lg shadow-lg w-48 mt-2 right-0 z-10">

                    <a href="/#latar-belakang" class="block px-4 py-2 text-sm hover:bg-orange-400 hover:text-white">
                        Latar Belakang</a>

                    <a href="/#tugas-dan-fungsi" class="block px-4 py-2 text-sm hover:bg-orange-400 hover:text-white">
                        Tugas dan
                        Fungsi</a>

                    <a href="/#anggota" class="block px-4 py-2 text-sm hover:bg-orange-400 hover:text-white">Anggota</a>
                </div>
            </div>

            <a href="/#berita" class="mx-2 p-3 w-24 text-sm rounded-lg text-center hover:bg-orange-400">Berita</a>
            <a href="#" class="mx-2 p-3 w-24 text-sm rounded-lg text-center hover:bg-orange-400">Galeri</a>
            <a href="#" class="mx-2 p-3 w-max text-sm rounded-lg text-center hover:bg-orange-400">Hubungi Kami</a>
        </nav>


    </div>
</header>
