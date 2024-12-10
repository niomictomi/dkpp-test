<section class="relative">
    <div class="relative w-full h-full md:h-screen overflow-hidden">
        <!-- Slideshow container -->
        <div class="w-full md:h-full flex items-center justify-center">
            <div id="slideshow" class="w-full h-full relative">
                <!-- Gambar 1 -->
                <div class="slide absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-100">
                    <img src="{{ asset('img/pelantikan.jpg') }}" alt="Image 1" class="w-full h-full object-cover">
                </div>

                <!-- Gambar 2 -->
                <div class="slide absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-0">
                    <img src="{{ asset('img/berita/4717Presiden_Prabowo_Resmi_Lantik_para_Penasihat_Khusus__Utusan_Khusus__dan_Staf_Khusus_Presiden.jpeg') }}"
                        alt="Image 2" class="w-full h-full object-cover">
                </div>

                <!-- Gambar 3 -->
                <div class="slide absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-0">
                    <img src="{{ asset('img/slideshow/slide1.JPG') }}" alt="Image 3"
                        class="w-full h-full object-cover">
                </div>

                <!-- Gambar 4 -->
                <div class="slide absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-0">
                    <img src="{{ asset('img/slideshow/slide2.jpeg') }}" alt="Image 4"
                        class="w-full h-full object-cover">
                </div>

                <!-- Gambar 5 -->
                <div class="slide absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-0">
                    <img src="{{ asset('img/slideshow/slide3.jpeg') }}" alt="Image 5"
                        class="w-full h-full object-cover">
                </div>

                <!-- Gambar 6 -->
                <div class="slide absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-0">
                    <img src="{{ asset('img/slideshow/slide4.jpeg') }}" alt="Image 6"
                        class="w-full h-full object-cover">
                </div>


            </div>

            <button
                class="absolute text-white bg-blue-900 bg-opacity-70 hover:bg-blue-800 hover:bg-opacity-80 focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-lg px-8 py-3 mt-[400px] mx-auto">
                <a href="#beranda">Telusuri Lebih Lanjut</a>
            </button>

        </div>
    </div>
</section>

<!-- Add this script at the bottom of your body to make the slideshow work -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');
        const totalSlides = slides.length;

        function changeSlide() {
            slides[currentSlide].classList.remove('opacity-100');
            slides[currentSlide].classList.add('opacity-0');

            currentSlide = (currentSlide + 1) % totalSlides;

            slides[currentSlide].classList.remove('opacity-0');
            slides[currentSlide].classList.add('opacity-100');
        }

        setInterval(changeSlide, 5000); // Change slide every 5 seconds
    });
</script>
