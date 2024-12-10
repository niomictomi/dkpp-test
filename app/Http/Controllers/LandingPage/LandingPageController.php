<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class LandingPageController extends Controller
{

    public function index()
    {
        $beritaData =
            [
                [
                    'imgSrc' =>  'img/berita/4717Presiden_Prabowo_Resmi_Lantik_para_Penasihat_Khusus__Utusan_Khusus__dan_Staf_Khusus_Presiden.jpeg',
                    'title' => 'Presiden Prabowo Resmi Lantik para Penasihat Khusus, Utusan Khusus, dan Staf Khusus Presiden',
                    'description' => [
                        'Presiden Prabowo Subianto secara resmi melantik para Penasihat Khusus, Utusan Khusus, dan Staf Khusus Presiden. Pelantikan tersebut digelar di Istana Negara, Jakarta, pada Selasa, 22 Oktober 2024.',
                        'Pelantikan Penasihat Khusus Presiden berdasarkan Keputusan Presiden Republik Indonesia Nomor 140/P Tahun 2024 tentang Pengangkatan Penasihat Khusus Presiden. Adapun para Penasihat Khusus yang dilantik oleh Presiden Prabowo antara lain:',
                        '1. Wiranto, sebagai Penasihat Khusus Presiden Bidang Politik dan Keamanan; ',
                        '2. Luhut Binsar Pandjaitan, sebagai Penasihat Khusus Presiden Bidang Digitalisasi dan Teknologi Pemerintahan; ',
                        '3. Dudung Abdurachman, sebagai Penasihat Khusus Presiden Bidang Pertahanan Nasional, Ketua Komite Kebijakan Industri Pertahanan; ',
                        '4. Purnomo Yusgiantoro, sebagai Penasihat Khusus Presiden Bidang Energi; ',
                        '5. Muhadjir Effendy, sebagai Penasihat Khusus Presiden Bidang Haji; dan ',
                        '7. Terawan Agus Putranto, sebagai Penasihat Khusus Presiden Bidang Kesehatan.',
                        'Pada kesempatan tersebut, Presiden Prabowo turut melantik sejumlah Utusan Khusus berdasarkan Keputusan Presiden Republik Indonesia Nomor 76/M Tahun 2024 tentang Pengangkatan Utusan Khusus Presiden Periode Tahun 2024-2029. Adapun para Utusan Khusus yang dilantik oleh Presiden Prabowo antara lain:',

                        '1. Muhamad Mardiono, sebagai Utusan Khusus Presiden Bidang Ketahanan Pangan;',
                        '2. Setiawan Ichlas, sebagai Utusan Khusus Presiden Bidang Ekonomi dan Perbankan;',
                        '3. Miftah Maulana Habiburrahman, sebagai Utusan Khusus Presiden Bidang Kerukunan Beragama dan Pembinaan Sarana Keagamaan;',
                        '4. Raffi Farid Ahmad, sebagai Utusan Khusus Presiden Bidang Pembinaan Generasi Muda dan Pekerja Seni;',
                        '5. Ahmad Ridha Sabana, sebagai Utusan Khusus Presiden Bidang Usaha Mikro, Kecil, dan Menengah, Ekonomi Kreatif dan Digital;',
                        '6. Mari Elka Pangestu, sebagai Utusan Khusus Presiden Bidang Perdagangan Internasional dan Kerja Sama Multilateral; dan',
                        '7. Zita Anjani, Utusan Khusus Presiden Bidang Pariwisata.',

                        'Selanjutnya, Presiden Prabowo juga melantik Yovie Widianto sebagai Staf Khusus Presiden berdasarkan Keputusan Presiden Republik Indonesia Nomor 75/M Tahun 2024 tentang Pengangkatan Staf Khusus Presiden.',
                        'Presiden Prabowo kemudian memimpin pengucapan sumpah para Penasihat Khusus, Utusan Khusus, dan Staf Khusus Presiden.',

                        '“Bahwa saya akan setia kepada Undang-Undang Dasar Negara Republik Indonesia tahun 1945 serta akan menjalankan segala peraturan perundang-undangan dengan selurus-lurusnya demi darma bakti saya kepada bangsa dan negara. Bahwa saya dalam menjalankan tugas jabatan akan menjunjung tinggi etika jabatan, bekerja dengan sebaik-baiknya, dengan penuh rasa tanggung jawab,” ujar Presiden mendiktekan sumpah jabatan.',

                        'Acara pelantikan tersebut kemudian diakhiri dengan pemberian ucapan selamat oleh Presiden Prabowo Subianto serta Wakil Presiden Gibran Rakabuming untuk kemudian diikuti oleh tamu undangan yang hadir. (BPMI Setpres/ABD)'
                    ],
                    'link' => '#',
                    'sourceimg' => '#',
                    'soureArticle' => 'https://setkab.go.id/presiden-prabowo-resmi-lantik-para-penasihat-khusus-utusan-khusus-dan-staf-khusus-presiden/',
                ],
                [
                    'imgSrc' =>  'img/berita/berita1.png',
                    'title' => 'PENDAHULUAN POKOK PEMIKIRAN PENASIHAT KHUSUS PRESIDEN BIDANG POLITIK DAN KEAMANAN',
                    'description' => [
                        'Indonesia sedang berada di persimpangan penting dalam sejarahnya. Dengan Asta cita dan visi besar Indonesia Emas 2045, bangsa ini berkomitmen untuk menjadi negara yang berdaulat, maju, adil dan makmur. Demokrasi yang tangguh dan stabilitas keamanan Nasional menjadi dua pilar utama yang harus diperkuat untuk mencapai visi tersebut. Namun dalam perjalanannya, tantangan yang kompleks baik dari dalam maupun luar negeri terus menguji ketahanan bangsa ini.',
                        'Sistem Demokrasi Indonesia yang berakar pada Pancasila dan UUD 1945 telah menjadi fondasi bagi persatuan dan kesatuan Nasional. Namun tantangan seperti politik uang, polarisasi sosial, korupsi, radikalisme hingga ancaman keamanan siber menjadi isu-isu yang perlu segera ditangani. Dalam konteks global, ketegangan geopolitik, dinamika ekonomi dunia dan perubahan iklim juga turut memengaruhi stabilitas politik dan keamanan Indonesia.',
                        'Pokok-pokok pikiran ini, merupakan gagasan dan langkah strategis yang dirumuskan untuk membangun demokrasi yang inklusif, berkeadilan dan berbasis keamanan Nasional. Pendekatan yang diusulkan mengintegrasikan nilai-nilai Pancasila, modernisasi teknologi dan kolaborasi multi-stakeholder dengan tujuan akhir menciptakan sistem politik dan keamanan yang tangguh, adaptif, dan relevan dengan tantangan zaman.'
                    ],
                    'link' => '#',
                    'sourceimg' => '#',
                    'soureArticle' => '#',
                ],
                [
                    'imgSrc' =>  'img/berita/berita2.jpg',
                    'title' => 'Demokrasi Tangguh, Keamanan Kokoh => Menuju Indonesia Emas 2045',
                    'description' => [
                        'Pokok-pokok pikiran ini diharapkan menjadi bagian dari landasan strategis yang komprehensif bagi pembangunan demokrasi yang tangguh, stabil, dan berkeadilan, yang ber-iringan dengan sistem politik dan keamanan nasional yang kokoh. Pokok-pokok pikiran ini juga dirancang untuk mempercepat terwujudnya Asta cita kabinet merah putih yang dipimpin oleh Presiden Bapak Prabowo Subianto dan sekaligus mendukung visi besar Indonesia Emas 2045,menciptakan bangsa yang Maju, berdaulat, adil, dan makmur, sebagai berikut:',
                        '1.	Memperkuat Fondasi Ideologi Pancasila dalam Demokrasi dan Keamanan',
                        '2.	Reformasi Sistem Politik yang Mendorong Stabilitas dan Keamanan',
                        '3.	Membangun Ketahanan Sistemik Terhadap Pengaruh Korupsi',
                        '4.	Membangun Demokrasi yang Berbasis Keamanan Nasional',
                        '5.	Transformasi Digital untuk Demokrasi dan Keamanan',

                        '6.	Penguatan Ketahanan Nasional Berbasis Demokrasi',
                        '7.	Meningkatkan Kualitas Kepemimpinan Politik dan Keamanan',
                        '8.	Rekrutmen Politik Berbasis Pengabdian',
                        '9.	Diplomasi Demokrasi dan Keamanan Regional',
                        '10.	Pentingnya Badan Management Krisis untuk Politik dan Keamanan.',
                        '11.	Roadmap Menuju Indonesia Emas 2045',
                        '12.	Melakukan Deklarasi Nasional tentang Kepemimpinan Berbasis Moralitas',

                        'Demokrasi yang tangguh dan keamanan yang stabil adalah dua pilar utama dalam mewujudkan Asta cita dan visi besar Indonesia Emas 2045. Pokok-pokok pikiran strategis ini bertujuan untuk memperkuat hubungan antara demokrasi dan keamanan nasional, dengan mengedepankan nilai-nilai Pancasila, supremasi hukum & pemberantasan korupsi, dan inklusi dalam setiap aspek kebijakan.',
                        'Dalam perjalanan menuju Indonesia Emas 2045, kita dihadapkan pada berbagai tantangan, mulai dari dinamika politik global, ancaman keamanan siber misalnya korupsi, hingga ketegangan sosial di dalam negeri. Namun, peluang besar juga terbuka, dengan semakin berkembangnya demokrasi digital, potensi generasi muda, dan peran strategis Indonesia di 14 kancah internasional. Sinergi antara semua elemen bangsa—pemerintah, masyarakat, akademisi, dan swasta—akan menjadi kunci keberhasilan kita.',

                        'Kesimpulannya, demokrasi yang tangguh harus dibangun di atas fondasi keamanan nasional yang kokoh. Sebaliknya, stabilitas keamanan hanya dapat tercapai jika rakyat merasa dilibatkan dalam proses politik yang berkeadilan. Keduanya adalah dua sisi mata uang yang tidak dapat dipisahkan, saling melengkapi untuk menciptakan bangsa yang kuat, adil, dan makmur. Semoga tulisan ini memberikan inspirasi dan sedikit panduan bagi para pemimpin, pemangku kepentingan, serta seluruh elemen masyarakat dalam perjalanan bersama menuju Indonesia yang gemilang pada tahun 2045. Dengan kerja keras, komitmen, dan kolaborasi, kita yakin Indonesia mampu menjadi negara besar yang dihormati di dunia, sekaligus menjadi rumah yang aman dan adil bagi seluruh rakyatnya.'
                    ],
                    'link' => '#',
                    'sourceimg' => '#',
                    'soureArticle' => '#',
                ],
                [
                    'imgSrc' =>  'img/berita/berita3.jpg',
                    'title' => 'PELANTIKAN PENASIHAT KHUSUS PRESIDEN',
                    'description' => [
                        'Presiden Prabowo Subianto secara resmi melantik para Penasihat Khusus, Utusan Khusus, dan Staf Khusus Presiden. Pelantikan tersebut digelar di Istana Negara, Jakarta, pada Selasa, 22 Oktober 2024.',
                        'Pelantikan Penasihat Khusus Presiden berdasarkan Keputusan Presiden Republik Indonesia Nomor 140/P Tahun 2024 tentang Pengangkatan Penasihat Khusus Presiden. Adapun para Penasihat Khusus yang dilantik oleh Presiden Prabowo antara lain:',
                        '1.	Wiranto, sebagai Penasihat Khusus Presiden Bidang Politik dan Keamanan;',
                        '2.	Luhut Binsar Pandjaitan, sebagai Penasihat Khusus Presiden Bidang Digitalisasi dan Teknologi Pemerintahan;',
                        '3.	Dudung Abdurachman, sebagai Penasihat Khusus Presiden Bidang Pertahanan Nasional, Ketua Komite Kebijakan Industri Pertahanan',
                        '4.	Bambang Permadi Soemantri Brodjonegoro, sebagai Penasihat Khusus Presiden Bidang Ekonomi;',
                        '5.	Purnomo Yusgiantoro, sebagai Penasihat Khusus Presiden Bidang Energi',
                        '6.	Muhadjir Effendy, sebagai Penasihat Khusus Presiden Bidang Haji; dan',
                        '7.	Terawan Agus Putranto, sebagai Penasihat Khusus Presiden Bidang Kesehatan.',


                        'Pada kesempatan tersebut, Presiden Prabowo turut melantik sejumlah Utusan Khusus berdasarkan Keputusan Presiden Republik Indonesia Nomor 76/M Tahun 2024 tentang Pengangkatan Utusan Khusus Presiden Periode Tahun 2024-2029. Adapun para Utusan Khusus yang dilantik oleh Presiden Prabowo antara lain:',
                        '1.	Muhamad Mardiono, sebagai Utusan Khusus Presiden Bidang Ketahanan Pangan;',
                        '2.	Setiawan Ichlas, sebagai Utusan Khusus Presiden Bidang Ekonomi dan Perbankan;',
                        '3.	Miftah Maulana Habiburrahman, sebagai Utusan Khusus Presiden Bidang Kerukunan Beragama dan Pembinaan Sarana Keagamaan;',
                        '4.	Raffi Farid Ahmad, sebagai Utusan Khusus Presiden Bidang Pembinaan Generasi Muda dan Pekerja Seni;',
                        '5.	Ahmad Ridha Sabana, sebagai Utusan Khusus Presiden Bidang Usaha Mikro, Kecil, dan Menengah, Ekonomi Kreatif dan Digital;',
                        '6.	Mari Elka Pangestu, sebagai Utusan Khusus Presiden Bidang Perdagangan Internasional dan Kerja Sama Multilateral; dan',
                        '7.	Zita Anjani, Utusan Khusus Presiden Bidang Pariwisata.',
                        'Selanjutnya, Presiden Prabowo juga melantik Yovie Widianto sebagai Staf Khusus Presiden berdasarkan Keputusan Presiden Republik Indonesia Nomor 75/M Tahun 2024 tentang Pengangkatan Staf Khusus Presiden.',
                        'Presiden Prabowo kemudian memimpin pengucapan sumpah para Penasihat Khusus, Utusan Khusus, dan Staf Khusus Presiden.',
                        '“Bahwa saya akan setia kepada Undang-Undang Dasar Negara Republik Indonesia tahun 1945 serta akan menjalankan segala peraturan perundang-undangan dengan selurus-lurusnya demi darma bakti saya kepada bangsa dan negara. Bahwa saya dalam menjalankan tugas jabatan akan menjunjung tinggi etika jabatan, bekerja dengan sebaik-baiknya, dengan penuh rasa tanggung jawab,” ujar Presiden mendiktekan sumpah jabatan.',
                        'Acara pelantikan tersebut kemudian diakhiri dengan pemberian ucapan selamat oleh Presiden Prabowo Subianto serta Wakil Presiden Gibran Rakabuming untuk kemudian diikuti oleh tamu undangan yang hadir.'
                    ],
                    'link' => '#',
                    'sourceimg' => '#',
                    'soureArticle' => 'https://setkab.go.id/presiden-prabowo-resmi-lantik-para-penasihat-khusus-utusan-khusus-dan-staf-khusus-presiden/'
                ],
                [
                    'imgSrc' =>  'img/berita/berita4.jpg',
                    'title' => 'SAFARI KEDINASAN PKP RI BID POLKAM DENGAN MENKOPOLHUKAM',
                    'description' => [
                        'Penasihat Khusus Kepresidenan bidang politik dan Keamanan melakukan Safari Kedinasan ke Menkopolkam pada tanggal 30 November 2024.Kunjungan kali ini merupakan bentuk Kerjasama dan sharing antara Penasihat Khusus Presiden dengan Kemenko Polkam terkait penguatan koordinasi dan kolaborasi dalam pelaksanaan tugas memberikan pertimbangan dan penasihat khusus kepada Presiden Republik Indonesia.',
                        'Kegaitan Safari Kedinasan diterima secara resmi oleh Menteri Koordinator Politik dan Keamanan, Jenderal Pol (Purn.) Budi Gunawan di Ruang Rapat Menteri, Kemenko Polkam. Wiranto menyampaikan mengenai “Kegiatan safari kedinasan ini sangat penting sebagai upaya proaktif PKP dalam bekerjasama dan berkolaborasi dengan instansi mitra dibawah koordinasi bidang Politik dan Keamanan, kunjungan ini diharapkan semakin terjalin secara optimal tidak hanya dengan Menko Polkam, namun instansi lainnya seperti BIN, Kemendagri, Polri, Mabes TNI, dan instansi lainnya,” ujar Wiranto.',
                        'Kegiatan Safari kedinasan menjadi salah satu program unggulan Wiranto setelah dilantik guna memperkuat koordinasi dengan instansi lainnya dalam menunjang tugas dan fungsi Penasihat Khusus di Bidang Politik dan Keamanan. (IAP/PKP)'
                    ],
                    'link' => '#',
                    'sourceimg' => '#',
                    'soureArticle' => '#',
                ],
            ];

        foreach ($beritaData as &$data) {
            $data['slug'] = Str::slug($data['title']);
        }


        return view('landingpage', compact('beritaData'));
    }
}
