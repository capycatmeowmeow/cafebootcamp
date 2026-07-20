<nav class="sticky top-0 z-50 bg-[#faf8f5]/90 backdrop-blur-md border-b border-[#ebdcb9]/40 shadow-sm transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex items-center">
                <a href="{{ url('/') }}" class="flex items-center space-x-3 group">
                    <img src="{{ asset('assets/images/Byte&Brew.png') }}" alt="Logo Byte & Brew" class="h-12 w-auto object-contain">
                    <div class="flex flex-col justify-center leading-none">
                        <span class="text-xl font-bold text-neutral-800 group-hover:text-[#20622c] transition-colors duration-300">
                            BMW
                        </span>
                        <span class="text-[10px] tracking-widest text-[#0066B1] uppercase font-semibold mt-0.5">
                            Kuliah & BMW  
                        </span>
                    </div>
                </a>
            </div>

            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ url('/') }}" class="text-sm font-medium tracking-wide pb-1 transition-all duration-300 border-b-2 {{ Request::is('/') ? 'text-[#003A70] border-[#003A70]' : 'text-neutral-600 border-transparent hover:text-[#20622c]' }}">
                    Beranda
                </a>
                <a href="{{ url('/about') }}" class="text-sm font-medium tracking-wide pb-1 transition-all duration-300 border-b-2 {{ Request::is('about') ? 'text-[#003A70] border-[#003A70]' : 'text-neutral-600 border-transparent hover:text-[#20622c]' }}">
                    Tentang BMW
                </a>
                <a href="{{ url('/menu') }}" class="text-sm font-medium tracking-wide pb-1 transition-all duration-300 border-b-2 {{ Request::is('menu') ? 'text-[#003A70] border-[#003A70]' : 'text-neutral-600 border-transparent hover:text-[#20622c]' }}">
                    Macam BMW
                </a>
                <a href="{{ url('/gallery') }}" class="text-sm font-medium tracking-wide pb-1 transition-all duration-300 border-b-2 {{ Request::is('gallery') ? 'text-[#003A70] border-[#003A70]' : 'text-neutral-600 border-transparent hover:text-[#20622c]' }}">
                    Galeri
                </a>
                <a href="{{ url('/order/dine-in') }}" class="inline-flex items-center justify-center px-4 py-2 text-sm font-semibold rounded-xl text-navy bg-[#6BBCE9] hover:bg-[#003A70] transition-all duration-300 shadow-sm {{ Request::is('order/dine-in') ? 'ring-2 ring-[#ebdcb9] bg-[#184620]' : '' }}">
                    My BMW
                </a>

            </div>

            <div class="flex items-center md:hidden">
                <button id="mobile-menu-toggle" type="button" class="text-neutral-700 hover:text-[#20622c] focus:outline-none p-2 rounded-lg hover:bg-neutral-100 transition-colors">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

        </div>
    </div>

    <div id="mobile-menu" class="hidden md:hidden bg-[#faf8f5] border-t border-[#ebdcb9]/40 py-4 px-6 space-y-2 shadow-inner">
        <a href="{{ url('/') }}" class="block px-4 py-2.5 rounded-xl text-base font-medium transition-colors {{ Request::is('/') ? 'bg-[#20622c]/5 text-[#20622c] font-semibold' : 'text-neutral-600 hover:bg-neutral-50' }}">
            BMW
        </a>
        <a href="{{ url('/about') }}" class="block px-4 py-2.5 rounded-xl text-base font-medium transition-colors {{ Request::is('about') ? 'bg-[#20622c]/5 text-[#20622c] font-semibold' : 'text-neutral-600 hover:bg-neutral-50' }}">
            Tentang BMW
        </a>
        <a href="{{ url('/menu') }}" class="block px-4 py-2.5 rounded-xl text-base font-medium transition-colors {{ Request::is('menu') ? 'bg-[#20622c]/5 text-[#20622c] font-semibold' : 'text-neutral-600 hover:bg-neutral-50' }}">
            Macam BMW
        </a>
        <a href="{{ url('/gallery') }}" class="block px-4 py-2.5 rounded-xl text-base font-medium transition-colors {{ Request::is('gallery') ? 'bg-[#20622c]/5 text-[#20622c] font-semibold' : 'text-neutral-600 hover:bg-neutral-50' }}">
            Galeri
        </a>
        <a href="{{ url('/order/dine-in') }}" class="block w-full text-center mt-4 px-4 py-3 rounded-xl text-base font-semibold text-white bg-[#20622c] hover:bg-[#6BBCE9] transition-colors shadow-sm">
            Pesan Dine-In
        </a>
    </div>
</nav>
