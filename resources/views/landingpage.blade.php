@extends('landingpage.frame.layout')
@section('content')
    <!-- Hero Section -->
    @include('landingpage.sectionslideshow')

    <div class="container mx-auto my-12 px-4">

        <!-- Content Section -->
        @include('landingpage.sectionawal')

        <div class="container mx-auto mb-12 px-4">
            @include('landingpage.sectionlayanan')
        </div>


        <div class="container mx-auto my-12 px-4">
            <!-- Card Section -->
            @include('landingpage.sectionberita')

            @include('landingpage.sectionlb')

            @include('landingpage.sectiontupoksi')


        </div>
    </div>
@endsection
