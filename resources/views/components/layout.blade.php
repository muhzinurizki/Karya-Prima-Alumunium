<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Karya Prima Alumunium - Architectural Glass & Aluminium' }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        [x-cloak] {
            display: none !important;
        }

        /* Custom Smooth Scrollbar untuk Chrome/Safari */
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: #0f172a;
        }

        ::-webkit-scrollbar-thumb {
            background: #334155;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #3b82f6;
        }

        /* Typography Global Adjustment */
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>

<body
    class="antialiased bg-[#FDFDFD] text-slate-900 selection:bg-blue-600 selection:text-white font-sans overflow-x-hidden">

    <x-navbar />

    <main class="relative">
        {{ $slot }}
    </main>

    <footer class="bg-[#020617] text-slate-400 py-20 border-t border-white/5 relative overflow-hidden">
        <div class="absolute top-0 left-1/4 w-64 h-64 bg-blue-600/5 rounded-full blur-[100px] z-0"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-16">
                <div class="lg:col-span-2 space-y-8">
                    <div>
                        <h3 class="text-white font-bold text-2xl tracking-[0.2em] uppercase">Karya Prima</h3>
                        <p class="text-blue-500 text-[10px] font-black tracking-[0.5em] uppercase mt-2">Architectural
                            Solution</p>
                    </div>
                    <p class="text-base leading-relaxed opacity-60 max-w-sm font-light">
                        Mendedikasikan keahlian kami untuk menciptakan struktur kaca dan alumunium yang mendefinisikan
                        standar baru dalam arsitektur modern.
                    </p>
                    <div class="flex gap-4">
                        <a href="#"
                            class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center hover:bg-white hover:text-slate-950 transition-all duration-300">
                            <span class="sr-only">Instagram</span>
                            <i class="fab fa-instagram text-sm"></i>
                        </a>
                    </div>
                </div>

                <div class="space-y-6">
                    <h4 class="text-white font-bold text-xs tracking-[0.2em] uppercase border-b border-white/10 pb-4">
                        Navigasi</h4>
                    <ul class="text-sm space-y-4">
                        <li><a href="#services"
                                class="hover:text-blue-400 hover:pl-2 transition-all duration-300 flex items-center gap-2 group">
                                <span class="w-0 h-[1px] bg-blue-400 group-hover:w-4 transition-all"></span> Layanan
                                Kami
                            </a></li>
                        <li><a href="#proyek"
                                class="hover:text-blue-400 hover:pl-2 transition-all duration-300 flex items-center gap-2 group">
                                <span class="w-0 h-[1px] bg-blue-400 group-hover:w-4 transition-all"></span> Portofolio
                            </a></li>
                        <li><a href="#kontak"
                                class="hover:text-blue-400 hover:pl-2 transition-all duration-300 flex items-center gap-2 group">
                                <span class="w-0 h-[1px] bg-blue-400 group-hover:w-4 transition-all"></span> Hubungi
                                Kami
                            </a></li>
                    </ul>
                </div>

                <div class="space-y-6">
                    <h4 class="text-white font-bold text-xs tracking-[0.2em] uppercase border-b border-white/10 pb-4">
                        Kontak Resmi</h4>
                    <div class="text-sm space-y-4 font-light leading-relaxed">
                        <p class="flex items-start gap-3 hover:text-white transition-colors cursor-default">
                            <span class="opacity-50">Alamat:</span>
                            <span>Kota Tangerang <br>
                                Jl. Sasmita No.15, RT.003/RW.008, Gerendeng, Kec. Karawaci, 15113</span>
                        </p>
                        <p class="flex items-center gap-3 hover:text-white transition-colors">
                            <span class="opacity-50">Email:</span>
                            <a href="mailto:info@karyaprima.com">karyaprimaalumunium@gmail.com</a>
                        </p>
                        <p class="text-xl text-white font-bold tracking-tight mt-4">
                            +62 859-3036-6801
                        </p>
                    </div>
                </div>
            </div>

            <div
                class="mt-20 pt-10 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-6">
                <p class="text-[9px] tracking-[0.3em] uppercase opacity-40 font-medium">
                    &copy; {{ date('Y') }} Karya Prima Alumunium — Crafted with Precision.
                </p>
                <div class="flex gap-10">
                    <a href="#"
                        class="text-[9px] tracking-[0.3em] uppercase font-bold hover:text-blue-500 transition-colors">Privacy
                        Policy</a>
                    <a href="#"
                        class="text-[9px] tracking-[0.3em] uppercase font-bold hover:text-blue-500 transition-colors">Terms
                        of Service</a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
