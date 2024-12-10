<div class="w-full mb-16" id="berita">
    <h1 class="font-bold text-2xl text-blue-900 mb-4">Berita Terkini</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-16 mb-16" id="berita-container">
        <!-- Data berita akan di-generate oleh JavaScript -->
    </div>
</div>

<script>
    // Data berita
    const beritaData = [
        {
            imgSrc: "{{ asset('img/berita/4717Presiden_Prabowo_Resmi_Lantik_para_Penasihat_Khusus__Utusan_Khusus__dan_Staf_Khusus_Presiden.jpeg') }}",
            title: "Presiden Prabowo Resmi Lantik para Penasihat Khusus, Utusan Khusus, dan Staf Khusus Presiden",
            description: "Presiden Prabowo Subianto secara resmi melantik para Penasihat Khusus, Utusan Khusus, dan Staf Khusus Presiden. Pelantikan tersebut digelar di Istana Negara, Jakarta, pada Selasa, 22 Oktober 2024.",
            link: "#"
        },
        {
            imgSrc: "{{ asset('img/berita/4717Presiden_Prabowo_Resmi_Lantik_para_Penasihat_Khusus__Utusan_Khusus__dan_Staf_Khusus_Presiden.jpeg') }}",
            title: "Presiden Prabowo Resmi Lantik para Penasihat Khusus, Utusan Khusus, dan Staf Khusus Presiden",
            description: "Presiden Prabowo Subianto secara resmi melantik para Penasihat Khusus, Utusan Khusus, dan Staf Khusus Presiden. Pelantikan tersebut digelar di Istana Negara, Jakarta, pada Selasa, 22 Oktober 2024.",
            link: "#"
        },
        {
            imgSrc: "{{ asset('img/berita/4717Presiden_Prabowo_Resmi_Lantik_para_Penasihat_Khusus__Utusan_Khusus__dan_Staf_Khusus_Presiden.jpeg') }}",
            title: "Presiden Prabowo Resmi Lantik para Penasihat Khusus, Utusan Khusus, dan Staf Khusus Presiden",
            description: "Presiden Prabowo Subianto secara resmi melantik para Penasihat Khusus, Utusan Khusus, dan Staf Khusus Presiden. Pelantikan tersebut digelar di Istana Negara, Jakarta, pada Selasa, 22 Oktober 2024.",
            link: "#"
        },
        {
            imgSrc: "{{ asset('img/berita/4717Presiden_Prabowo_Resmi_Lantik_para_Penasihat_Khusus__Utusan_Khusus__dan_Staf_Khusus_Presiden.jpeg') }}",
            title: "Presiden Prabowo Resmi Lantik para Penasihat Khusus, Utusan Khusus, dan Staf Khusus Presiden",
            description: "Presiden Prabowo Subianto secara resmi melantik para Penasihat Khusus, Utusan Khusus, dan Staf Khusus Presiden. Pelantikan tersebut digelar di Istana Negara, Jakarta, pada Selasa, 22 Oktober 2024.",
            link: "#"
        },
        {
            imgSrc: "{{ asset('img/berita/4717Presiden_Prabowo_Resmi_Lantik_para_Penasihat_Khusus__Utusan_Khusus__dan_Staf_Khusus_Presiden.jpeg') }}",
            title: "Presiden Prabowo Resmi Lantik para Penasihat Khusus, Utusan Khusus, dan Staf Khusus Presiden",
            description: "Presiden Prabowo Subianto secara resmi melantik para Penasihat Khusus, Utusan Khusus, dan Staf Khusus Presiden. Pelantikan tersebut digelar di Istana Negara, Jakarta, pada Selasa, 22 Oktober 2024.",
            link: "#"
        }
    ];

    // Menambahkan berita ke dalam DOM
    const beritaContainer = document.getElementById('berita-container');

    beritaData.forEach(berita => {
        const beritaItem = `
            <div class="flex flex-col">
                <img src="${berita.imgSrc}" class="w-full h-72 rounded-xl object-cover" alt="icon1">
                <h4 class="text-lg text-justify font-bold mb-4 text-blue-900 hover:text-blue-800">
                    ${berita.title}
                </h4>
                <p class="text-justify mb-4 text-sm">
                    ${berita.description}
                </p>
                <button type="button"
                    class="text-white bg-blue-900 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 w-max">
                    <a href="${berita.link}">Read more</a>
                </button>
            </div>
        `;
        beritaContainer.innerHTML += beritaItem;
    });
</script>
