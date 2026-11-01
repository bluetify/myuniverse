<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>John F. Kennedy - Biografi</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts for Vintage Newspaper Aesthetic -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;0,900;1,400;1,600&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Standard Favicon Link -->
    <link rel="icon" type="image/x-icon" href="{{ asset('dist/images/history/history.jpg')}}">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        serif: ['"Playfair Display"', 'Georgia', 'serif'],
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        paper: '#f3efea',
                        paperDark: '#e8e2d8',
                        ink: '#141414',
                        inkMuted: '#4a4a4a',
                        borderInk: '#222222',
                    }
                }
            }
        }
    </script>

    <style>
        /* Realistic vintage paper texture overlay */
        body {
            background-color: #ede7de;
            background-image: radial-gradient(#d3cbbe 0.75px, transparent 0.75px), radial-gradient(#d3cbbe 0.75px, #ede7de 0.75px);
            background-size: 30px 30px;
            background-position: 0 0, 15px 15px;
            color: #141414;
        }

        /* Fine editorial borders */
        .border-double-custom {
            border-top: 3px double #141414;
            border-bottom: 1px solid #141414;
        }
        
        .border-thin {
            border-color: #222222;
        }

        /* Highlight interaction */
        ::selection {
            background-color: #d4c8b5;
            color: #000000;
        }
    </style>
</head>
<body class="min-h-screen py-6 px-3 sm:px-6 lg:px-12 flex justify-center items-center">

    <!-- Main Newspaper Container -->
    <main class="w-full max-w-4xl bg-paper shadow-2xl rounded-sm border border-stone-300 p-6 sm:p-10 relative overflow-hidden my-4">
        
        <!-- TOP HEADER METADATA -->
        <header class="text-center select-none">
            <div class="flex justify-between items-center text-[10px] sm:text-xs font-semibold tracking-widest uppercase border-b border-ink pb-1 font-sans text-inkMuted">
                <span>
                    <a href="{{ url('jfk_5') }}" style="text-decoration: none">Prev.</a>
                </span>
                <span class="sm:inline">
                    Page 6
                </span>
                <span>
                    <a href="{{ url('jfk_7') }}" style="text-decoration: none">Next</a>
                </span>
            </div>

            <!-- MAIN TITLE -->
            <a href="{{ url('jfk') }}" style="text-decoration: none">
                <h1 class="font-serif font-black text-xs sm:text-xs md:text-xs tracking-wider text-ink my-3 uppercase leading-tight">
                    John F. Kennedy
                </h1>
            </a>

            <div class="border-t border-b border-ink py-1 my-2">
                <!-- <p class="text-xs sm:text-sm font-sans tracking-widest text-inkMuted uppercase font-medium">
                    BIOGRAFI
                </p> -->
            </div>
        </header>

        <!-- MAIN HEADLINE & SUBTITLE -->
        <section class="text-center my-6 sm:my-8 px-2">
            <h2 class="font-serif font-black text-xl sm:text-xl md:text-2xl text-ink tracking-tight uppercase leading-[0.85] mb-3">
                Masa pemerintahan dan tantangan Perang Dingin (1961–1963)
            </h2>
        </section>

        <!-- 3-COLUMN EDITORIAL GRID -->
        <div class="pt-4 border-t border-ink">
            <!-- Article 1 -->
            <article class="space-y-2">
                <div>
                    <img src="{{ asset('dist/images/history/jfk_5.jpeg') }}" alt="JFK" class="w-75 mx-auto text-center">
                </div>

                <p class="font-serif text-xs leading-relaxed text-stone-800 text-justify">
                    Ketika Kennedy menjadi presiden, dunia sedang berada dalam situasi yang disebut Cold War atau Perang Dingin. Perang Dingin merupakan persaingan politik, militer, ekonomi, dan ideologi antara dua kekuatan besar:<br>
                    - Amerika Serikat dan sekutu-sekutunya yang dipimpin blok Barat.<br>
                    - Uni Soviet dan negara-negara sekutunya yang dipimpin blok Timur.<br>
                    Kedua negara memiliki persenjataan nuklir yang sangat besar. Konflik langsung antara keduanya berpotensi menyebabkan kehancuran dalam skala global. Kennedy harus menghadapi beberapa peristiwa besar selama masa pemerintahannya.
                </p>

                <h3 class="font-sans font-bold text-xs sm:text-sm tracking-wider uppercase text-ink">
                    A. Invasi Teluk Babi (Bay of Pigs Invasion), 1961
                </h3>

                <div>
                    <img src="{{ asset('dist/images/history/jfk_5_1.jpeg') }}" alt="JFK" class="w-50 mx-auto text-center">
                </div>

                <p class="font-serif text-xs leading-relaxed text-stone-800 text-justify">
                    Salah satu keputusan awal pemerintahan Kennedy adalah mendukung operasi untuk menggulingkan pemerintahan Fidel Castro di Kuba. Kuba berada di bawah kepemimpinan Castro setelah revolusi 1959. Hubungannya dengan Amerika Serikat memburuk dan pemerintahannya semakin dekat dengan Uni Soviet. Pada April 1961, kelompok pengasingan Kuba yang dilatih dan didukung Amerika Serikat melakukan invasi di Teluk Babi, Kuba. Operasi ini dikenal sebagai Bay of Pigs Invasion. <br>
                    Namun, invasi tersebut gagal. Pasukan penyerbu berhasil dikalahkan oleh pasukan pemerintah Kuba. Kegagalan ini menjadi salah satu masalah diplomatik terbesar pada awal pemerintahan Kennedy. Peristiwa tersebut juga memperburuk hubungan Amerika Serikat dengan Kuba dan Uni Soviet.
                </p>

                <h3 class="font-sans font-bold text-xs sm:text-sm tracking-wider uppercase text-ink">
                    B. Krisis Rudal Kuba (Cuban Missile Crisis), 1962
                </h3>

                <div>
                    <img src="{{ asset('dist/images/history/jfk_5.jpeg') }}" alt="JFK" class="w-50 mx-auto text-center">
                </div>

                <p class="font-serif text-xs leading-relaxed text-stone-800 text-justify">
                    Ini merupakan salah satu peristiwa paling penting dalam sejarah dunia modern. Pada Oktober 1962, Amerika Serikat mengetahui bahwa Uni Soviet sedang memasang rudal nuklir di Kuba. Jarak Kuba sangat dekat dengan wilayah daratan Amerika Serikat. Keberadaan rudal tersebut dianggap sebagai ancaman serius terhadap keamanan nasional Amerika. Kennedy kemudian menghadapi keputusan yang sangat sulit. Ia memiliki beberapa pilihan:<br>
                    - Melakukan serangan militer terhadap instalasi rudal Kuba.<br>
                    - Melakukan invasi ke Kuba.<br>
                    - Menggunakan jalur diplomasi.<br>
                    - Menghentikan pengiriman persenjataan Soviet melalui blokade laut.<br>
                    Kennedy akhirnya memilih kebijakan yang disebut naval quarantine, yaitu pembatasan pengiriman persenjataan ofensif menuju Kuba melalui laut. Selama 13 hari, dunia berada dalam ketegangan luar biasa. Banyak orang khawatir bahwa konflik tersebut akan berkembang menjadi perang nuklir antara Amerika Serikat dan Uni Soviet. <br>
                    Setelah melalui komunikasi dan negosiasi intensif, Presiden Kennedy dan pemimpin Soviet Nikita Khrushchev mencapai kesepakatan. Uni Soviet setuju menarik rudal nuklirnya dari Kuba. Amerika Serikat juga memberikan jaminan untuk tidak menginvasi Kuba dan secara rahasia menyetujui penarikan rudal Jupiter dari Turki.<br>
                    Krisis tersebut berakhir tanpa perang nuklir. Peristiwa ini menjadi salah satu bagian paling terkenal dari sejarah kepemimpinan Kennedy.
                </p>

                <h3 class="font-sans font-bold text-xs sm:text-sm tracking-wider uppercase text-ink">
                    C. Perlombaan menuju Bulan (Space Race)
                </h3>

                <div>
                    <img src="{{ asset('dist/images/history/jfk_5_2.jpeg') }}" alt="JFK" class="w-50 mx-auto text-center">
                </div>

                <p class="font-serif text-xs leading-relaxed text-stone-800 text-justify">
                    Selain konflik politik, Kennedy juga memberikan perhatian besar terhadap perkembangan ilmu pengetahuan dan teknologi. Saat itu, Amerika Serikat dan Uni Soviet sedang bersaing dalam eksplorasi luar angkasa. Uni Soviet telah lebih dahulu mengirim manusia ke luar angkasa melalui Yuri Gagarin pada April 1961. <br>
                    Kennedy kemudian menetapkan tujuan ambisius: Amerika Serikat harus berhasil mengirim manusia ke Bulan dan membawanya kembali dengan selamat sebelum akhir dekade 1960-an. Dalam pidatonya di hadapan Kongres pada 25 Mei 1961, ia mengumumkan tujuan tersebut.<br>
                    Program ini menjadi bagian penting dari perkembangan NASA dan misi Apollo. Meskipun Kennedy meninggal sebelum misi tersebut berhasil, cita-citanya akhirnya tercapai pada 20 Juli 1969 ketika Neil Armstrong dan Buzz Aldrin menginjakkan kaki di Bulan melalui misi Apollo 11.
                </p>
                
                <h3 class="font-sans font-bold text-xs sm:text-sm tracking-wider uppercase text-ink">
                    D. Pembentukan Peace Corps
                </h3>

                <div>
                    <img src="{{ asset('dist/images/history/jfk_5_3.jpeg') }}" alt="JFK" class="w-50 mx-auto text-center">
                </div>

                <p class="font-serif text-xs leading-relaxed text-stone-800 text-justify">
                    Pada 1961, Kennedy membentuk organisasi bernama Peace Corps. Organisasi ini mengirimkan sukarelawan Amerika ke berbagai negara untuk membantu bidang pendidikan, kesehatan, pertanian, dan pengembangan masyarakat. Tujuannya adalah membangun hubungan internasional melalui kerja sama dan pelayanan masyarakat. Program tersebut juga menjadi salah satu cara Amerika Serikat memperluas pengaruhnya selama Perang Dingin.
                </p>
                
                <h3 class="font-sans font-bold text-xs sm:text-sm tracking-wider uppercase text-ink">
                    E. Perang Vietnam
                </h3>

                <div>
                    <img src="{{ asset('dist/images/history/jfk_5_4.jpeg') }}" alt="JFK" class="w-50 mx-auto text-center">
                </div>

                <p class="font-serif text-xs leading-relaxed text-stone-800 text-justify">
                    Kennedy juga menghadapi konflik yang berkembang di Vietnam. Pada masa itu, Vietnam terbagi menjadi: <br>
                    - Vietnam Utara, yang dipimpin pemerintahan komunis.<br>
                    - Vietnam Selatan, yang didukung Amerika Serikat.<br>
                    Amerika Serikat khawatir bahwa kemenangan komunis di Vietnam akan mendorong negara-negara lain di Asia Tenggara mengikuti hal serupa. Kekhawatiran ini berkaitan dengan teori domino. <br>
                    Pada masa pemerintahan Kennedy, keterlibatan Amerika di Vietnam meningkat, terutama melalui pengiriman penasihat militer, pelatihan, dan dukungan kepada pemerintah Vietnam Selatan. Jumlah personel militer Amerika di Vietnam bertambah secara signifikan selama masa jabatannya. Kennedy meninggal sebelum mengambil keputusan mengenai arah keterlibatan Amerika selanjutnya. Setelah ia meninggal, Presiden Lyndon B. Johnson memperluas intervensi militer Amerika secara besar-besaran. Karena itu, hubungan Kennedy dengan sejarah Perang Vietnam masih menjadi bahan diskusi di kalangan sejarawan.
                </p>

            </article>
        </div>


        <!-- INTERACTIVE BOTTOM BOOKMARK BANNER -->
        <footer class="mt-8 border-t border-ink">
            <div class="brand-name ms-3">
                <p class="text-sm tracking-wide text-neutral-600 flex items-center justify-center space-x-2">
                    <span>Archive by</span> 
                    <span class="handwriting text-xl font-bold text-blue-800 ml-1">bluetify</span>
                </p>
            </div>
        </footer>

    </main>
</body>
</html>