@extends('landingpage.frame.layout')

@section('content')
    <div class="container mx-auto my-12 px-4">

        <div class="w-full mb-16 px-4" id="berita-detail">
            @if ($berita)
                <h1 class="font-bold text-2xl text-blue-900 mb-4">{{ $berita['title'] }}</h1>
                <!-- Gambar Responsif -->
                <img src="{{ asset($berita['imgSrc']) }}" class="w-full h-auto rounded-xl object-cover mb-6" alt="icon1">


                <div class="text-justify text-gray-600 mb-16">
                    @foreach ($berita['description'] as $description)
                        <p class="mb-2">{{ $description }}</p>
                    @endforeach
                </div>
            @else
                <p class="text-center text-lg text-red-600">Berita tidak ditemukan.</p>
            @endif

            <div class="my-16">
                <div class="flex gap-4">
                    <a href="/"
                        class="py-2 px-6 bg-blue-900 text-white rounded-lg shadow-lg hover:bg-blue-800 text-sm">Home</a>
                    <a href="/berita"
                        class="py-2 px-6 bg-blue-900 text-white rounded-lg shadow-lg hover:bg-blue-800 text-sm">Semua
                        Berita</a>
                </div>
            </div>
        </div>
    </div>
@endsection
