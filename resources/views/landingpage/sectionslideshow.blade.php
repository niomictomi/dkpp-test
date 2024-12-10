<section class="relative">
    <div class="relative w-full h-96 md:h-screen overflow-hidden">
        <!-- Slideshow container -->
        <div class="w-full md:h-[800px] flex items-center justify-center">
            <div id="slideshow" class="w-full h-96 md:h-[800px]relative">
                <!-- Gambar 1 -->
                <div class="slide absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-100">
                    <img src="{{ asset('img/pelantikan.jpg') }}" alt="Image 1" class="w-full md:h-[850px] object-cover">
                </div>

                <!-- Gambar 2 -->
                <div class="slide absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-0">
                    <img src="{{ asset('img/berita/4717Presiden_Prabowo_Resmi_Lantik_para_Penasihat_Khusus__Utusan_Khusus__dan_Staf_Khusus_Presiden.jpeg') }}"
                        alt="Image 2" class="w-full h-96 md:h-[800px] object-cover">
                </div>

                <!-- Gambar 3 -->
                <div class="slide absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-0">
                    <img src="{{ asset('img/slideshow/slide1.JPG') }}" alt="Image 2"
                        class="w-full h-96 md:h-[800px] object-cover">
                </div>

                <div class="slide absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-0">
                    <img src="{{ asset('img/slideshow/slide2.jpeg') }}" alt="Image 2"
                        class="w-full h-96 md:h-[800px] object-cover">
                </div>
                <div class="slide absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-0">
                    <img src="{{ asset('img/slideshow/slide3.jpeg') }}" alt="Image 2"
                        class="w-full h-96 md:h-[800px] object-cover">
                </div>

                <div class="slide absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-0">
                    <img src="{{ asset('img/slideshow/slide4.jpeg') }}" alt="Image 2"
                        class="w-full h-96 md:h-[800px] object-cover">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Add this script at the bottom of your body to make the slideshow work -->
<script>
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
</script>
