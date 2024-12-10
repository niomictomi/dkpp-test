<section class="container mx-auto my-12 px-4 md:h-[700px] flex items-center justify-center" id="beranda">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 w-full mb-1">
                <!-- Bagian Teks -->
                <div class="col-span-1 md:col-span-3">
                    <h3 class="text-4xl md:text-6xl text-center text-blue-900 font-bold mb-0 md:mb-12">
                        Penasihat Khusus Presiden
                    </h3>

                    <div class="border border-gray-400 mb-8"></div>

                    <p class="mb-8 md:mb-16 text-gray-700 text-center">
                        Penasihat khusus presiden adalah yang memiliki tugas tertentu yang diberikan oleh presiden di
                        luar
                        tugas-tugas yang sudah dicakup dalam susunan organisasi kementerian dan instansi pemerintah
                        lainnya.
                        Dalam pelaksanaan tugasnya, penasihat khusus presiden bertanggung jawab kepada presiden, serta
                        dikoordinasikan dengan sekretaris kabinet (Setkab).
                    </p>

                    <p class="mb-6 text-gray-700 text-center">
                        Penetapan penasihat, utusan, dan staf khusus sendiri telah diatur berdasarkan Peraturan Presiden
                        (Perpres) Nomor 137 Tahun 2024 tentang Penasihat Khusus Presiden, Utusan Khusus Presiden, Staf
                        Khusus Presiden, dan Staf Khusus Wakil Presiden tertanggal 18 Oktober 2024.
                    </p>
                </div>

                <!-- Bagian Formulir Pencarian -->
                <div class="col-span-1 md:col-span-1">
                    <div class="border p-4 border-gray-300 rounded-2xl mb-6">
                        <form class="max-w-sm mx-auto">
                            <div class="mb-5">
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">
                                    Search
                                </label>
                                <div class="relative w-full">
                                    <input type="search" id="search-dropdown"
                                        class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                        placeholder="Search" required />
                                    <button type="submit"
                                        class="absolute top-0 end-0 p-2.5 h-full text-sm font-medium text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                        <div class="flex items-center gap-2">
                                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 20 20">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                            </svg>
                                            Search
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Bagian Gambar Presiden dan Wapres -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 w-full border p-4 border-gray-300 rounded-2xl">
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('img/ri1.png') }}" class="w-36 h-48 object-cover" alt="ri1">
                            <p class="text-sm font-bold text-center mt-2">
                                Jenderal TNI Prabowo Subianto
                            </p>
                            <p class="text-xs text-center">Presiden Republik Indonesia</p>
                        </div>
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('img/ri2.png') }}" class="w-36 h-48 object-cover" alt="ri2">
                            <p class="text-sm font-bold text-center mt-2">Gibran Rakabuming Raka</p>
                            <p class="text-xs text-center">Wakil Presiden Republik Indonesia</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>