<header class="bg-primary text-white py-3 website-header">
    <div class="container flex items-center justify-between">
        <a href="{{ route('home') }}" class="logo">
            <img src="{{ asset('img/logo_restauremos_el_colorado.png') }}" 
                alt="Restauremos el Colorado - Logo">
        </a>

        <nav class="hidden lg:flex items-center space-x-5 website-nav">
            <x-website.navigation-links></x-website.navigation-links>
        </nav>

        <div class="flex lg:hidden website-mobile-nav relative">
            <a href="#" id="mobile-nav-btn">
                <i class="fa fa-bars fa-2x"></i>
            </a>

            <div class="hidden nav" id="mobile-nav">
                <div class="flex flex-col w-full h-full items-center justify-center relative">
                    <a href="#" id="mobile-nav-close-btn">
                        <i class="fa fa-times"></i>
                    </a>
                    <img src="{{ asset('img/logo_restauremos_el_colorado.png') }}" 
                        alt="Restauremos el Colorado - Logo" class="logo mb-10">
                    <x-website.navigation-links></x-website.navigation-links>
                </div>
            </div>
        </div>
    </div>
</header>