<nav 
    x-data="{ 
        atTop: true, 
        mobileMenuOpen: false 
    }" 
    @scroll.window="atTop = (window.pageYOffset > 40 ? false : true)"
    @keydown.escape.window="mobileMenuOpen = false"
    :class="atTop && !mobileMenuOpen ? 'bg-transparent py-8' : 'bg-white/95 backdrop-blur-xl shadow-lg shadow-slate-900/5 py-4 border-b border-slate-200/50'"
    class="fixed w-full top-0 z-[100] transition-all duration-500 ease-in-out px-6 md:px-12"
>
    <div class="max-w-7xl mx-auto flex justify-between items-center">
        <a href="#" class="flex flex-col group focus:outline-none relative z-[110]">
            <span :class="atTop && !mobileMenuOpen ? 'text-white' : 'text-slate-900'" 
                  class="font-black text-xl tracking-[0.25em] uppercase transition-colors duration-300">
                KARYA <span class="text-blue-500">PRIMA</span>
            </span>
            <span :class="atTop && !mobileMenuOpen ? 'text-white/60' : 'text-slate-400'"
                  class="text-[9px] font-black tracking-[0.5em] uppercase mt-0.5 transition-colors duration-300">
                ALUMINIUM
            </span>
        </a>

        <div class="hidden md:flex items-center gap-10">
            <div :class="atTop && !mobileMenuOpen ? 'text-white/90' : 'text-slate-600'" 
                 class="flex gap-8 text-[10px] font-bold uppercase tracking-[0.2em] transition-colors duration-300">
                
                <a href="#" class="relative group py-2">
                    <span class="group-hover:text-blue-500 transition-colors">Beranda</span>
                    <span :class="atTop && !mobileMenuOpen ? 'bg-white' : 'bg-blue-600'" class="absolute bottom-0 left-0 w-0 h-[1.5px] transition-all duration-300 group-hover:w-full"></span>
                </a>
                
                <a href="#services" class="relative group py-2">
                    <span class="group-hover:text-blue-500 transition-colors">Layanan</span>
                    <span :class="atTop && !mobileMenuOpen ? 'bg-white' : 'bg-blue-600'" class="absolute bottom-0 left-0 w-0 h-[1.5px] transition-all duration-300 group-hover:w-full"></span>
                </a>
                
                <a href="#proyek" class="relative group py-2">
                    <span class="group-hover:text-blue-500 transition-colors">Portfolio</span>
                    <span :class="atTop && !mobileMenuOpen ? 'bg-white' : 'bg-blue-600'" class="absolute bottom-0 left-0 w-0 h-[1.5px] transition-all duration-300 group-hover:w-full"></span>
                </a>
            </div>

            <div class="h-6 w-[1px] bg-slate-400/20"></div>

            <a href="#kontak" 
               :class="atTop && !mobileMenuOpen 
                ? 'bg-white text-slate-900 hover:bg-blue-600 hover:text-white' 
                : 'bg-blue-600 text-white hover:bg-slate-900 shadow-blue-500/20'"
               class="px-8 py-3 rounded-full text-[10px] font-black uppercase tracking-[0.2em] transition-all duration-500 shadow-xl active:scale-95">
                Hubungi Kami
            </a>
        </div>

        <div class="md:hidden flex items-center relative z-[110]">
             <button @click="mobileMenuOpen = !mobileMenuOpen" 
                     :class="atTop && !mobileMenuOpen ? 'text-white' : 'text-slate-900'" 
                     class="p-2 transition-colors duration-300 focus:outline-none">
                <div class="w-6 h-5 flex flex-col justify-between items-end">
                    <span :class="mobileMenuOpen ? 'rotate-45 translate-y-2 w-6 !text-slate-900' : 'w-6'" class="h-0.5 bg-current transition-all duration-300"></span>
                    <span :class="mobileMenuOpen ? 'opacity-0' : 'w-4'" class="h-0.5 bg-current transition-all duration-300"></span>
                    <span :class="mobileMenuOpen ? '-rotate-45 -translate-y-2.5 w-6 !text-slate-900' : 'w-5'" class="h-0.5 bg-current transition-all duration-300"></span>
                </div>
             </button>
        </div>
    </div>

    <div x-show="mobileMenuOpen" 
         x-cloak
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 -translate-y-full"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-full"
         class="absolute top-0 left-0 w-full bg-white shadow-2xl z-[105] pt-32 pb-16 px-8 border-b border-slate-100 md:hidden h-screen flex flex-col justify-between">
        
        <div class="flex flex-col gap-8 text-center">
            <a href="#" @click="mobileMenuOpen = false" class="text-xs font-black tracking-[0.3em] uppercase text-slate-400 hover:text-blue-600 transition-colors">Beranda</a>
            <a href="#layanan" @click="mobileMenuOpen = false" class="text-xs font-black tracking-[0.3em] uppercase text-slate-400 hover:text-blue-600 transition-colors">Layanan</a>
            <a href="#proyek" @click="mobileMenuOpen = false" class="text-xs font-black tracking-[0.3em] uppercase text-slate-400 hover:text-blue-600 transition-colors">Portfolio</a>
            <a href="#faq" @click="mobileMenuOpen = false" class="text-xs font-black tracking-[0.3em] uppercase text-slate-400 hover:text-blue-600 transition-colors">Tanya Jawab</a>
            
            <div class="h-[1px] w-12 bg-slate-100 mx-auto my-2"></div>
            
            <a href="#kontak" @click="mobileMenuOpen = false" 
               class="bg-blue-600 text-white py-5 rounded-2xl text-[10px] font-black uppercase tracking-[0.2em] shadow-xl shadow-blue-500/20">
                Mulai Proyek Sekarang
            </a>
        </div>

        <div class="text-center">
            <p class="text-[9px] font-bold text-slate-300 uppercase tracking-widest">Karya Prima Aluminium © 2026</p>
        </div>
    </div>
</nav>