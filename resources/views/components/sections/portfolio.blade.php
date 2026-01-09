<section id="proyek" class="py-32 bg-white relative overflow-hidden">
    <div class="absolute inset-0 z-0 opacity-[0.03] pointer-events-none">
        <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="grid" width="100" height="100" patternUnits="userSpaceOnUse">
                    <path d="M 100 0 L 0 0 0 100" fill="none" stroke="currentColor" stroke-width="1"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#grid)" />
        </svg>
    </div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="mb-32">
            <div class="flex items-center gap-4 mb-6">
                <span class="w-12 h-[1px] bg-blue-600"></span>
                <span class="text-blue-600 text-[10px] font-black tracking-[0.4em] uppercase">Selected Works</span>
            </div>
            <h3 class="text-5xl md:text-7xl font-bold text-slate-900 tracking-tight leading-[1.1]">
                Simfoni Kaca <br> & <span class="text-slate-300">Alumunium.</span>
            </h3>
        </div>

        <div class="flex flex-col gap-40 md:gap-64">
            
            <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-center">
                <div class="md:col-span-8 group relative" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                    <div class="overflow-hidden rounded-2xl bg-slate-100 aspect-[16/10] shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&q=80" 
                             class="w-full h-full object-cover transition-transform duration-[2s] group-hover:scale-110" alt="Commercial Project">
                    </div>
                    <div class="absolute -bottom-10 -right-6 md:right-10 bg-blue-600 text-white p-8 md:p-12 rounded-xl shadow-2xl transition-transform duration-700 group-hover:-translate-y-4 max-w-xs">
                        <span class="text-[10px] font-bold tracking-[0.3em] uppercase opacity-70 block mb-2">Perkantoran</span>
                        <h4 class="text-xl md:text-2xl font-bold leading-tight">Facade Kaca SCBD Financial District</h4>
                    </div>
                </div>
                <div class="md:col-span-4 md:pl-12 pt-12 md:pt-0">
                    <p class="text-slate-500 text-lg leading-relaxed font-light italic">
                        "Presisi dalam pemasangan curtain wall memberikan pantulan cahaya yang sempurna, mendefinisikan estetika modern di jantung Jakarta."
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-12 gap-12 items-center">
                <div class="md:col-span-4 order-2 md:order-1 md:pr-12">
                    <div class="space-y-6">
                        <h4 class="text-3xl font-bold text-slate-900 leading-tight">Residensial <br> Minimalis Menteng</h4>
                        <p class="text-slate-500 text-sm leading-relaxed">
                            Penggunaan kusen alumunium YKK AP dengan profil slim untuk memaksimalkan pemandangan taman vertikal pada hunian privat.
                        </p>
                        <a href="#" class="inline-block text-[10px] font-black tracking-[0.3em] uppercase border-b-2 border-blue-600 pb-1 hover:text-blue-600 transition-colors">Lihat Detail Case Study</a>
                    </div>
                </div>
                <div class="md:col-span-7 md:col-start-6 order-1 md:order-2 group relative">
                    <div class="overflow-hidden rounded-2xl bg-slate-100 aspect-[4/5] md:aspect-square shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1668911494509-14baf3b42fda?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                             class="w-full h-full object-cover transition-transform duration-[2s] group-hover:scale-110" alt="Residential Project">
                    </div>
                    <div class="absolute -top-6 -left-6 w-32 h-32 border border-blue-600/20 rounded-2xl -z-10 group-hover:rotate-12 transition-transform duration-700"></div>
                </div>
            </div>

            <div class="relative group">
                <div class="overflow-hidden rounded-[2.5rem] bg-slate-900 h-[500px] md:h-[600px] shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&q=80" 
                         class="w-full h-full object-cover opacity-60 transition-transform duration-[3s] group-hover:scale-105" alt="Showroom Project">
                </div>
                <div class="absolute inset-0 flex items-center justify-center text-center p-6">
                    <div class="max-w-2xl translate-y-10 group-hover:translate-y-0 transition-transform duration-700">
                        <span class="text-blue-400 text-xs font-black tracking-[0.4em] uppercase mb-4 block">Retail & Showroom</span>
                        <h4 class="text-white text-4xl md:text-6xl font-bold mb-8 leading-tight">Frameless Glass Storefront - PIK 2</h4>
                        <button class="px-10 py-4 bg-white text-slate-900 font-black text-[10px] tracking-[0.2em] uppercase rounded-full hover:bg-blue-600 hover:text-white transition-all duration-300">
                            Eksplorasi Proyek
                        </button>
                    </div>
                </div>
            </div>

        </div>

        <div class="mt-40 text-center">
            <p class="text-slate-400 mb-8 font-light italic text-xl">Ingin melihat lebih banyak mahakarya kami?</p>
            <a href="#" class="inline-flex flex-col items-center group">
                <span class="text-slate-900 font-black text-xs tracking-[0.4em] uppercase mb-4 transition-colors group-hover:text-blue-600">Lihat Portofolio Lengkap</span>
                <div class="w-px h-24 bg-gradient-to-b from-blue-600 to-transparent"></div>
            </a>
        </div>
    </div>
</section>