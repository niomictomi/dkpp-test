<div class="w-full mb-16 scroll-mt-6" id="berita">

    <div class="flex justify-between items-center">
        <h1 class="font-bold text-3xl text-blue-900 mb-4">Berita Terkini</h1>
        <a href="/berita" class="font-bold text-sm py-3 px-6 rounded-lg shadow-md bg-blue-900 hover:bg-blue-800 text-white mb-4">
            Semua Berita
        </a>
    </div>

    <div class="border-b-2 border-blue-900 mb-6"></div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-16 mb-16" id="berita-container">
        @foreach ($beritaData as $data)
            <div class="flex flex-col bg-white p-4 rounded-2xl shadow-lg">
                @if (!empty($data['imgSrc']))
                    <img src="{{ asset($data['imgSrc']) }}" class="w-full h-72 rounded-xl object-cover mb-4" alt="Gambar Berita">
                @else
                    <img src="{{ asset('img/default-placeholder.png') }}" class="w-full h-72 rounded-xl object-cover mb-4" alt="Placeholder">
                @endif

                <h4 class="text-lg font-bold mb-4 text-blue-900 hover:text-blue-800 leading-6">
                    {{ ucwords($data['title']) }}
                </h4>

                <p class="text-justify mb-4 text-sm">
                    {{ Str::limit(is_array($data['description']) ? implode(' ', $data['description']) : $data['description'], 250, '...') }}
                </p>

                <a href="{{ url('berita/' . $data['slug']) }}" class="text-white bg-blue-900 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none w-max">
                    Read more
                </a>
            </div>
        @endforeach
    </div>

</div>
