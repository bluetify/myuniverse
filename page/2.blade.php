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
                    <a href="{{ url('jfk_1') }}" style="text-decoration: none">Prev.</a>
                </span>
                <span class="sm:inline">
                    Page 2
                </span>
                <span>
                    <a href="{{ url('jfk_3') }}" style="text-decoration: none">Next</a>
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
                Pendidikan dan awal ketertarikan terhadap politik
            </h2>
        </section>

        <!-- 3-COLUMN EDITORIAL GRID -->
        <div class="pt-4 border-t border-ink">
            <!-- Article 1 -->
            <article class="space-y-2">
                <div>
                    <img src="{{ asset('dist/images/history/jfk_2.jpeg') }}" alt="JFK" class="w-75 mx-auto text-center">
                </div>

                <p class="font-serif text-xs leading-relaxed text-stone-800 text-justify">
                    John mengenyam pendidikan di beberapa sekolah swasta, termasuk Choate School di Connecticut.
                    Ia kemudian melanjutkan pendidikan di Harvard University dan lulus pada tahun 1940.
                    Selama masa kuliah, John menunjukkan ketertarikan terhadap hubungan internasional dan politik dunia.
                </p>
                <p class="font-serif text-xs leading-relaxed text-stone-800 text-justify">
                    Pada masa itu, Eropa sedang menghadapi ancaman besar akibat kebangkitan Nazi Jerman di bawah Adolf Hitler.
                    John melakukan perjalanan ke Eropa dan mengamati situasi politik Inggris. Ia kemudian menulis penelitian mengenai ketidaksiapan Inggris menghadapi kemungkinan perang dengan Jerman.
                </p>
                <p class="font-serif text-xs leading-relaxed text-stone-800 text-justify">
                    Penelitian tersebut dikembangkan menjadi sebuah buku berjudul Why England Slept, yang diterbitkan pada 1940. Buku ini membantu memperkenalkan namanya kepada masyarakat Amerika.Hal menarik dari masa pendidikannya adalah bahwa ketertarikan John terhadap politik internasional sudah terbentuk jauh sebelum ia menjadi presiden.
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