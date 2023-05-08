<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $this->data['title'] = "Qwords - Cloud Web Hosting Indonesia Akses Cepat Aman";
    $this->data['menus'] = (object) [
        [
            'title' => "Cloud Hosting",
            'list' => [
                [
                    'img_url' => 'images/menu-list/cloud/image22.png',
                    'title' => 'Value Cloud Hosting',
                    'desc' => 'Harga ekonomis dengan performa optimal'
                ],
                [
                    'img_url' => 'images/menu-list/cloud/image23.png',
                    'title' => 'High Performance Bisnis',
                    'desc' => 'Untuk perusahaan, e-commerce, startup & website e-learning'
                ],
                [
                    'img_url' => 'images/menu-list/cloud/image24.png',
                    'title' => 'High Performance Enterprise',
                    'desc' => 'Hosting dengan dedicated resource. Tanpa gangguan & batasan'
                ],
                [
                    'img_url' => 'images/menu-list/cloud/image25.png',
                    'title' => 'Wordpress Hosting',
                    'desc' => 'Hosting khusus bagi Anda yang menggunakan CMS Wordpress'
                ],
                [
                    'img_url' => 'images/menu-list/cloud/image26.png',
                    'title' => 'Unlimited Hosting',
                    'desc' => 'Hosting dengan Unlimited resource yang dapat diandalkan'
                ],
                [
                    'img_url' => 'images/menu-list/cloud/image27.png',
                    'title' => 'Private Label cPanel Reseller',
                    'desc' => 'Bergabung dan mulai Bisnis Sukses bersama Qwords'
                ],
            ]
        ],
        [
            'title' => 'Server',
            'list' => [
                [
                    'img_url' => 'images/menu-list/server/image 28.png',
                    'title' => 'Cloud VPS KVM SSD',
                    'desc' => 'KVM Ultrafast dengan Easy Install & OS terbaru',
                ],
                [
                    'img_url' => 'images/menu-list/server/image 29.png',
                    'title' => 'Server sekolah CBT/Moodle',
                    'desc' => 'Untuk kebutuhan e-learning, ujian sekolah, dsb',
                ],
                [
                    'img_url' => 'images/menu-list/server/image 30.png',
                    'title' => 'Dedicated Server',
                    'desc' => 'Multiple Internet Connection up to 10Gbps, Monitoring 24/7',
                ],
                [
                    'img_url' => 'images/menu-list/server/image 31.png',
                    'title' => 'Colocation Server',
                    'desc' => '99% Uptime Server, UPS Backup, On-Site & Off-Site Monitoring',
                ],
                [
                    'img_url' => 'images/menu-list/server/image 32.png',
                    'title' => 'Leased To Owned Server',
                    'desc' => 'Sekarang sewa, nanti jadi hak milik Anda!',
                ],
                [
                    'img_url' => 'images/menu-list/server/image 33.png',
                    'title' => 'Fleksibel VPS',
                    'desc' => 'KVM Pay as tou Growth! Mulai Rp 200/jam',
                ],
            ]
        ],
        [
            'title' => 'Domain',
            'list' => [
                [
                    'img_url' => 'images/menu-list/domain/image 34.png',
                    'title' => 'Daftar Domain',
                    'desc' => 'Miliki domain terbaik untuk identitas website Anda'
                ],
                [
                    'img_url' => 'images/menu-list/domain/image 35.png',
                    'title' => 'Domain Premium .id',
                    'desc' => 'Domain premium berkualitas untuk website Anda'
                ],
                [
                    'img_url' => 'images/menu-list/domain/image 36.png',
                    'title' => 'Domain Backorder',
                    'desc' => 'Dapatkan domain berkualitas yang tidak diperbarui pemiliknya'
                ],
                [
                    'img_url' => 'images/menu-list/domain/image 37.png',
                    'title' => 'Domain Privacy Protection',
                    'desc' => 'Lindungi data pribadi & rahasia Anda dari publik'
                ],
                [
                    'img_url' => 'images/menu-list/domain/image 38.png',
                    'title' => 'Sewa Domain',
                    'desc' => 'Dapatkan domain premium tanpa bayar biaya penuh'
                ],
                [
                    'img_url' => 'images/menu-list/domain/image 39.png',
                    'title' => 'Jual Beli & Lelang Domain',
                    'desc' => 'Untung berlipat dari domain cantik dengan sistem lelang'
                ],
                [
                    'img_url' => 'images/menu-list/domain/image 40.png',
                    'title' => 'Domain Negotiator/Broker',
                    'desc' => 'Broker negoisasikan harga terbaik untuk Domain impian Anda'
                ],
                [
                    'img_url' => 'images/menu-list/domain/image 41.png',
                    'title' => 'Private Label Domain Reseller',
                    'desc' => 'Paket Reseller domain dengan harga yang bersaing'
                ],
            ]
        ],
        [
            'title' => 'Email Suite',
            'list' => [
                [
                    'img_url' => 'images/menu-list/suite/image 42.png',
                    'title' => 'Titan Email',
                    'desc' => 'Bisnis tampil profesional dengan email domain khusus dari Titan'
                ],
                [
                    'img_url' => 'images/menu-list/suite/image 43.png',
                    'title' => 'EC Collaboration Suite',
                    'desc' => 'Email premium dengan kapasitas 25 GB hingga 1000 akun'
                ],
                [
                    'img_url' => 'images/menu-list/suite/image 44.png',
                    'title' => 'Microsoft 365',
                    'desc' => 'Untuk meningkatkan produktivitas perusahaan Anda'
                ],
                [
                    'img_url' => 'images/menu-list/suite/image 45.png',
                    'title' => 'Google Workspace',
                    'desc' => 'Layanan premium dari Google dengan nama domain Anda'
                ],
                [
                    'img_url' => 'images/menu-list/suite/image 46.png',
                    'title' => 'Mailtogo',
                    'desc' => 'Marketing online lebih mudah dijalankan melalui Mailtogo'
                ],
            ]
        ],
        [
            'title' => 'Services',
            'list' => [
                [
                    'img_url' => 'images/menu-list/service/image 47.png',
                    'title' => 'SSL',
                    'desc' => 'Amankan komunikasi data Anda'
                ],
                [
                    'img_url' => 'images/menu-list/service/image 48.png',
                    'title' => 'Advanced Backup',
                    'desc' => 'Advanced Backup berbasis Acronis'
                ],
                [
                    'img_url' => 'images/menu-list/service/image 49.png',
                    'title' => 'Extended Support',
                    'desc' => 'Bantuan ekstra untuk akun hosting cPanel'
                ],
                [
                    'img_url' => 'images/menu-list/service/image 50.png',
                    'title' => 'Offline Backup',
                    'desc' => 'Lisensi software bagi bisnis Anda'
                ],
                [
                    'img_url' => 'images/menu-list/service/image 51.png',
                    'title' => 'Licenses',
                    'desc' => 'Lisensi software bagi bisnis Anda'
                ],
                [
                    'img_url' => 'images/menu-list/service/image 52.png',
                    'title' => 'Digital Signature',
                    'desc' => 'Tanda tangani dokumen online dengan mudah'
                ],
                [
                    'img_url' => 'images/menu-list/service/image 53.png',
                    'title' => 'Hosting Insurance',
                    'desc' => 'Asuransi downtime untuk Hosting'
                ],
                [
                    'img_url' => 'images/menu-list/service/image 54.png',
                    'title' => 'Manage The Box Server',
                    'desc' => 'Manage service untuk mengatur server Anda'
                ],
                [
                    'img_url' => 'images/menu-list/service/image 55.png',
                    'title' => 'Diego VPN',
                    'desc' => 'Private network yang aman, super cepat, dan easy to use'
                ],
                [
                    'img_url' => 'images/menu-list/service/image 56.png',
                    'title' => 'NAS Asustor',
                    'desc' => 'Backup server yang mudah digunakan tanpa perlu staff IT, mampu berjalan 24/7 dengan garansi 3 Tahun'
                ],
            ]
        ],
        [
            'title' => 'Internet Access',
            'list' => [
                [
                    'img_url' => 'images/menu-list/internet/image 57.png',
                    'title' => 'Broadband Home',
                    'desc' => 'Internet untuk kebutuhan rumah/personal dengan koneksi stabil tanpa buffering hingga 1Gbps. Kuota Unlimited'
                ],
                [
                    'img_url' => 'images/menu-list/internet/image 58.png',
                    'title' => 'Broadband Business',
                    'desc' => 'Jalankan bisnis bisa lebih fokus dengan jaringan internet cepat, koneksi stabil, dan aman'
                ],
                [
                    'img_url' => 'images/menu-list/internet/image 59.png',
                    'title' => 'Broadband Wireless',
                    'desc' => 'Internet dengan teknologi wireless super cepat, bebas FUP untuk kebutuhan rumah & bisnis.'
                ],
                [
                    'img_url' => 'images/menu-list/internet/image 60.png',
                    'title' => 'Check Coverage',
                    'desc' => 'Mau pasang internet? Cek jangkauan internet Broadband Qwords di area rumah Anda.'
                ],
            ]
        ],
    ];
    $this->data['cloud_hostings'] = (object) [
        [
            'title' => 'VCH1',
            'subtitle' => 'Value Cloud Hosting',
            'price' => 24_500,
            'discount' => 14_500,
            'resource' => [
                "Disk <b>3GB</b>",
                "Bandwith <b>Unlimited</b>",
                "Core CPU <b>0.5 Core</b>",
                "Addon domain <b>No</b>",
            ]
        ],
        [
            'title' => 'Signature',
            'subtitle' => 'Unlimited Hosting',
            'price' => 114000,
            'discount' => 89900,
            'resource' => [
                "Disk <b>Unlimited</b>",
                "Bandwith <b>Unlimited</b>",
                "Core CPU <b>1 Core</b>",
                "Addon domain <b>5/5</b>",
            ]
        ],
        [
            'title' => 'HPCI Bisnis 1',
            'subtitle' => 'High Performance',
            'price' => 109000,
            'discount' => 79000,
            'resource' => [
                "Disk <b>3GB</b>",
                "Bandwith <b>Unlimited</b>",
                "Core CPU <b>1 Core</b>",
                "Addon domain <b>-</b>",
            ]
        ],
        [
            'title' => 'VPS VP1',
            'subtitle' => 'Cloud VPS KVM SSD',
            'price' => 135000,
            'discount' => 75000,
            'resource' => [
                "Disk <b>25GB</b>",
                "Bandwith <b>Unlimited</b>",
                "Core CPU <b>1 Core</b>",
                "Addon domain <b>Unlimited</b>",
            ]
        ],
    ];
    $this->data['our_services'] = (object) [
        [
            'img_url' => 'images/our-service/image 1.png',
            'title' => 'SSL',
            'desc' => 'Jadikan website Anda lebih terpercaya dan disukai oleh search engine dengan menggunakan SSL Certificate.',
            'price' => 112_000,
            'each' => '/ tahun'
        ],
        [
            'img_url' => 'images/our-service/image 61.png',
            'title' => 'Dedicated Server',
            'desc' => 'Nikmati kelola Dedicated Server sendiri dengan akses remote dari seluruh dunia tanpa batas',
            'price' => 499_000,
            'each' => '/ bulan'
        ],
        [
            'img_url' => 'images/our-service/image 62.png',
            'title' => 'Colocation Server',
            'desc' => 'Akses cepat dari seluruh dunia dengan fasilitas 24x7 full monitoring dengan cooling system terbaik serta fire extinguisher',
            'price' => 500_000,
            'each' => '/ bulan'
        ],
    ];
    $this->data['solution_hosting_pkg'] = (object) [
        [
            'img_url' => 'images/solution-hosting-pkg/image 2.png',
            'title' => 'Perusahaan',
            'desc' => 'Wujudkan website perusahaan profesional dan berkelas dengan dukungan web hosting terbaik dan fitur keamanan ekstra'
        ],
        [
            'img_url' => 'images/solution-hosting-pkg/image 2-1.png',
            'title' => 'UMKM dan Toko Online',
            'desc' => 'Memberikan hosting terbaik untuk mendukung kebutuhan website pemasaran barang/jasa secara online.'
        ],
        [
            'img_url' => 'images/solution-hosting-pkg/image 2-2.png',
            'title' => 'Organisasi dan Komunitas',
            'desc' => 'Bikin website organisasi atau komunitas Anda dengan paket hosting unggulan yang ramah kantong.'
        ],
        [
            'img_url' => 'images/solution-hosting-pkg/image 2-3.png',
            'title' => 'Sekolah',
            'desc' => 'Infrastruktur web hosting terbaik untuk menunjang kegiatan e-learning. Didukung platform MOODLE khusus pembelajaran daring'
        ],
        [
            'img_url' => 'images/solution-hosting-pkg/image 2-4.png',
            'title' => 'Developer',
            'desc' => 'Tersedia paket hosting Indonesia dengan spesifikasi khusus yang dev-friendly. Ekstra NodeJS dan Git Version Control'
        ],
        [
            'img_url' => 'images/solution-hosting-pkg/image 2-5.png',
            'title' => 'Blogger dan Personal',
            'desc' => 'Memfasilitasi blogger dengan infrastruktur hosting Indonesia terbaik serta template website premium untuk tampil lebih profesional'
        ],
    ];
    $this->data['commitments'] = (object) [
        [
            'icon' => 'images/commitment/image 69.png',
            'title' => 'Layanan 24/7',
            'desc' => 'Tim Technical Support dan Customer Service Qwords siap membantu Anda selama 24 jam, 7 hari. Anda dapat menghubungi melalui Live chat, Call Center, dan Support Ticket.'
        ],
        [
            'icon' => 'images/commitment/image 70.png',
            'title' => 'Panduan Manual Lengkap',
            'desc' => 'Qwords dilengkapi dengan halaman knowledge base berisi tutorial dan tips seputar pengelolaan website dan hosting. Dapat diakses dengan mudah dan solutif'
        ],
        [
            'icon' => 'images/commitment/image 71.png',
            'title' => 'Up time 99.99%',
            'desc' => 'Uptime Network & Server di atas 99. 99% dengan konfigurasi server yang tepat. Didukung manajemen jaringan dan multiple upstream tier 1 provider network serta multiple peering.'
        ],
        [
            'icon' => 'images/commitment/image 72.png',
            'title' => 'Jaminan keamanan',
            'desc' => 'Keamanan menjadi fokus utama kami di Qwords. Tindakan pemantauan dan pencegahan yang berstandar & berkelanjutan telah menjadi perhatian utama kami.'
        ],
        [
            'icon' => 'images/commitment/image 73.png',
            'title' => 'Clustered DNS',
            'desc' => 'DNS Server Cloud Hosting Qwords terhubung satu dengan yang lainnya. Hal ini membuat DNS Server akan selalu dapat di akses karena saling membackup antar server.'
        ],
        [
            'icon' => 'images/commitment/image 74.png',
            'title' => 'High Enterprise Server',
            'desc' => 'Standar server Qwords adalah server kelas enterprise Dual Xeon Octa Core yang merupakan hardware kelas terbaik. Hardware ini biasa digunakan oleh perusahaan terkemuka.'
        ],
        [
            'icon' => 'images/commitment/image 75.png',
            'title' => 'Tier 1 Network',
            'desc' => 'Tier 1 Network merupakan jaringan dunia tanpa transit network, yang membuat jaringan lebih cepat serta jalur routing yang lebih pendek dan ketersediaan backup network.'
        ],
        [
            'icon' => 'images/commitment/image 76.png',
            'title' => 'Peering Network',
            'desc' => 'Jaringan di Qwords terhubung langsung ke public peering seperti OpenIXP dan CDIX yang membuat latency atau waktu tunggu pengiriman data semakin kecil.'
        ],
    ];
    $this->data['active_customers'] = (object) [
        [
            'logo' => 'images/active-customer/image 5.png',
            'title' => 'Cimory'
        ],
        [
            'logo' => 'images/active-customer/image 6.png',
            'title' => 'Forisa'
        ],
        [
            'logo' => 'images/active-customer/image 7.png',
            'title' => 'ElsheSkin'
        ],
        [
            'logo' => 'images/active-customer/image 8.png',
            'title' => 'Icon+'
        ],
        [
            'logo' => 'images/active-customer/image 9.png',
            'title' => 'Horison'
        ],
        [
            'logo' => 'images/active-customer/image 10.png',
            'title' => 'Pictures'
        ],
    ];
    $this->data['testimonials'] = [
        [
            'photo_url' => 'images/testimonial/image 78.png',
            'name' => 'Budi Raharjo',
            'position' => 'Founder ID Cert',
            'comment' => 'Semoga Qwords dapat terus bertahan, sehingga kami dan masyarakat Indonesia bisa mendapatkan layanan yang terbaik dari Qwords.',
            'desc' => 'Kami, ID Cert, merupakan sebuah perusahaan yang bergerak dalam bidang penyedia jasa informasi keamanan di Indonesia. Oleh karena itu, kami membutuhkan Qwords untuk mendukung kebutuhan kami terhadap server dan hosting yang selalu up selama 24 jam.'
        ],
        [
            'photo_url' => 'images/testimonial/image 79.png',
            'name' => 'Kuns Kurniawan',
            'position' => 'PR Event Info BDG',
            'comment' => 'Pelayanan Qwords sangat cepat dan responsif, sehingga tidak butuh waktu lama untuk membantu website kami kembali normal. Terbaik pokoknya, mah!',
            'desc' => 'Sebagai media penyedia kabar seputar kota Bandung, Info BDG menggunakan website sebagai rumah informasi. Website kami yang sempat down kini menunjukkan traffic yang tinggi setelah menggunakan dukungan dari Qwords.'
        ],
        [
            'photo_url' => 'images/testimonial/image 80.png',
            'name' => 'Denden Sofiudin',
            'position' => 'Owner Rumah Kopi temanggung',
            'comment' => 'Hingga saat ini pula, kami tidak pernah menemukan masalah yang berarti dari layanan yang diberikan Qwords. Layanan Customer Service yang sangat baik, membuat kami tidak ingin berpindah dari Qwords.',
            'desc' => 'Penjualan Rumah Kopi Temanggung 90% dilakukan secara online, salah satunya menggunakan website. Semenjak tahun 2015 hingga saat ini, kami menggunakan hosting dan domain dari Qwords.'
        ],
    ];
    $this->data['questions'] = (object) [
        [
            'quest' => 'Apa itu web hosting?',
            'answer' => "
            Hosting adalah tempat penyimpanan file dan data website seperti teks, video dan gambar website. File dan data tersebut di simpan di dalam server yang terkoneksi dengan internet sehingga data tersebut dapat diakses oleh siapa saja, kapan saja dan di mana saja.
            <br/><br/>
            Penjelasan lebih lanjut dapat Anda baca pada artikel ini : https://qwords.com/blog/apa-itu-hosting/
            "
        ],
        [
            'quest' => 'Ada berapa jenis hosting di Qwords?',
            'answer' => "
            <p>Untuk mendukung kesuksesan bisnis di era digital, Qwords menghadirkan beragam paket hosting Indonesia yang bisa dipilih sesuai kebutuhan.</p>
            <br/><br/>
            <b>Value Performance</b>
            <p>Value Cloud Hosting merupakan paket cloud hosting murah Indonesia yang dirancang khusus untuk keperluan sederhana seperti UKM, toko online, blog, website sederhana, hingga email untuk penggunaan personal.</p>
            <p>Hosting murah dari Qwords untuk pengguna baru website atau Anda yang baru terjun ke dalam industri/bisnis online. Storage sesuai kebutuhan, fleksibel, dan ekstra lega mulai 3 GB hingga</p>
            <br/>

            <b>High Performance Cloud Hosting Bisnis</b>
            <p>Productivity starts here! Berikan Hosting terbaik untuk bisnis Anda. Kinerja lebih produktif dengan performa tinggi & optimal untuk website profesional perusahaan, e-commerce, startup bisnis, serta support Moodle--platform open source yang memudahkan sistem pembelajaran online</p>
            <br/>

            <b>High Performance Cloud Hosting Enterprise</b>
            <p>Nikmati versi terbaik dedicated hosting melalui paket HPCH Enterprise. Tampil lebih premium dengan resource dedicated hanya untuk 1 pengguna. Performa lebih stabil, bebas gangguan dari Cloud Hosting lainnya. More productivity, less drama</p>
            <br/>

            <b>WordPress Hosting</b>
            <p>Hosting khusus bagi Anda yang menggunakan CMS WordPress. Dilengkapi CloudPop untuk kinerja WordPress yang optimal.</p>
            <p>WordPress Hosting Indonesia yang dioptimalkan dengan CloudPOP</p>
            <br/>

            <b>Unlimited Hosting</b>
            <p>Paket Unlimited Hosting Indonesia yang dapat diandalkan, tanpa batasan! Free Domain & SSL Certificate dengan Uptime Server 99,99%.</p>
            <p>Didukung Website Builder dan Web Accelerator dengan Module LSAPI PRO + CRIU. Akses internasional ngebut, serta garansi 30 hari uang kembali.</p>
            "
        ],
        [
            'quest' => 'Apa kelebihan dari cloud hosting Qwords?',
            'answer' => "Cloud hosting Qwords sudah dipercaya 45,000+ pelanggan dari dalam dan luar negeri. Anda akan mendapatkan jaminan keamanan, Uptime 99.99%, dukungan teknis selama 24 jam, 7 hari melalui Live chat, Call Center, atau Support Ticket dan masih banyak lagi."
        ],
        [
            'quest' => 'Mengapa saya perlu web hosting?',
            'answer' => "
            <p>Tanpa web hosting, Anda tidak bisa membuat website company profile, portal berita, blog pribadi, website toko online, atau jenis website lain yang bisa diakses secara online.</p>
            <br/><br/>
            <p>Penyedia layanan web hosting seperti Qwords.com membantu memastikan data-data dan file website Anda tetap aman serta responsif ketika diakses oleh pengguna secara online.</p>
            "
        ],
        [
            'quest' => 'Bagaimana cara membeli hosting?',
            'answer' => "
            Kami memiliki panduan cara membeli hosting di Qwords sesuai kebutuhan dengan mudah yang dapat Anda akses selengkapnya di sini. Beli hosting Indonesia di Qwords kini juga semakin mudah dengan adanya berbagai metode pembayaran.
            "
        ],
        [
            'quest' => 'Apakah saya bisa transfer Hosting ke Qwords Cloud Web Hosting Indonesia?',
            'answer' => "Ya, Anda bisa melakukan transfer Hosting dari provider lain ke Qwords Cloud Hosting Indonesia. Caranya, silahkan lakukan pemesanan Cloud Hosting baru sesuai paket yang Anda inginkan, kemudian informasikan kebutuhan migrasi pada tim support kami, lalu proses migrasi akan dibantu hingga selesai."
        ]
    ];

    return view('welcome', $this->data);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
