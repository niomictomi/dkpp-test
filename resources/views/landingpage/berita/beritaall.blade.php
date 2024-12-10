@extends('landingpage.frame.layout')

@section('content')
    <div class="container mx-auto my-12 px-4">

    <div class="w-full mb-16 scroll-mt-6" id="berita">

        <div class="flex justify-between">
            <h1 class="font-bold text-4xl text-blue-900 mb-4">Semua Berita</h1>
            <a href="/#berita" class="font-bold text-sm py-3 px-6 rounded-lg shadow-md bg-blue-900 text-white mb-4">Kembali</a>
        </div>

        <div class="border-b-2 border-blue-900 mb-6"></div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-16 mb-16" id="berita-container">
            @foreach ($beritaData as $data)
                <div class="flex flex-col">

                    <img src="{{ asset($data['imgSrc']) }}" class="w-full h-72 rounded-xl object-cover" alt="icon1">


                    <h4 class="text-lg text-justify font-bold mb-4 text-blue-900 hover:text-blue-800 leading-1">
                        {{ $data['title'] }}
                    </h4>

                    <p class="text-justify mb-4 text-sm">

                        {{ Str::limit(implode(' ', $data['description']), 250, '...') }}

                    </p>

                    <button type="button"
                        class="text-white bg-blue-900 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 w-max">
                        <a href="{{ url('berita/' . $data['slug']) }}">Read more</a>

                    </button>
                </div>
            @endforeach
        </div>
    </div>
    </div>
@endsection
