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
                    <a href="{{ url('jfk_3') }}" style="text-decoration: none">Prev.</a>
                </span>
                <span class="sm:inline">
                    Page 4
                </span>
                <span>
                    <a href="{{ url('jfk_5') }}" style="text-decoration: none">Next</a>
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
                Memulai karier politik (1946–1960)
            </h2>
        </section>

        <!-- 3-COLUMN EDITORIAL GRID -->
        <div class="pt-4 border-t border-ink">
            <!-- Article 1 -->
            <article class="space-y-2">
                <div>
                    <img src="{{ asset('dist/images/history/jfk_3.jpeg') }}" alt="JFK" class="w-75 mx-auto text-center">
                </div>

                <p class="font-serif text-xs leading-relaxed text-stone-800 text-justify">
                    Setelah keluar dari Angkatan Laut pada 1945, John mulai memasuki dunia politik. Pada 1946, ia mencalonkan diri sebagai anggota Dewan Perwakilan Rakyat Amerika Serikat atau House of Representatives dari Massachusetts.
                    Ia berhasil memenangkan pemilihan dan mulai menjabat pada 1947. John menjabat sebagai anggota DPR selama tiga periode, hingga 1953. Selama berada di Kongres, ia mulai membangun reputasi sebagai politikus muda dari Partai Demokrat. Pada 1952, ia mencalonkan diri untuk menjadi anggota Senat Amerika Serikat dan berhasil mengalahkan Henry Cabot Lodge Jr. Ia kemudian menjabat sebagai senator Massachusetts sejak 1953 hingga 1960. 
                </p>

                <h3 class="font-sans font-bold text-xs sm:text-sm tracking-wider uppercase text-ink">
                    Pernikahan dengan Jacqueline Bouvier
                </h3>

                <div>
                    <img src="{{ asset('dist/images/history/jfk_3_1.jpeg') }}" alt="JFK" class="w-50 mx-auto text-center">
                </div>

                <p class="font-serif text-xs leading-relaxed text-stone-800 text-justify">
                    Pada 12 September 1953, John menikah dengan Jacqueline Lee Bouvier, yang kemudian dikenal sebagai Jacqueline Kennedy atau Jackie Kennedy. Jacqueline berasal dari keluarga berada dan memiliki ketertarikan pada sastra, seni, sejarah, serta kebudayaan. Pernikahan mereka menjadi salah satu pernikahan paling banyak diperhatikan masyarakat Amerika.
                    <br>
                    Mereka memiliki tiga anak: Caroline Kennedy, lahir pada 1957.<br>
                    1. John F. Kennedy Jr., lahir pada 1960.<br>
                    2. Patrick Bouvier Kennedy, lahir pada 1963, tetapi meninggal hanya beberapa hari setelah kelahirannya.<br>
                    3. Kehidupan keluarga mereka sering menjadi perhatian media.
                </p>

                <h3 class="font-sans font-bold text-xs sm:text-sm tracking-wider uppercase text-ink">
                    Mendapatkan Pulitzer Prize
                </h3>

                <p class="font-serif text-xs leading-relaxed text-stone-800 text-justify">
                    Pada 1956, John menerbitkan buku Profiles in Courage. Buku tersebut membahas delapan senator Amerika yang dianggap menunjukkan keberanian politik dengan mengambil keputusan berdasarkan prinsip mereka, meskipun keputusan tersebut tidak populer. Pada 1957, buku itu memenangkan Pulitzer Prize dalam kategori biografi. Penghargaan tersebut semakin memperkuat citranya sebagai politikus sekaligus penulis. Catatan sejarah: kontribusi penulisan buku tersebut juga melibatkan penasihat dekatnya, Theodore Sorensen, yang memainkan peran penting dalam penyusunannya.
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