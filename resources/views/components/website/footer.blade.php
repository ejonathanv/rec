<section class="py-10 md:py-16 lg:py-20 bg-secondary-900">
    <div class="container">
        <h1 class="text-white text-center mb-6 md:mb-16">
            Conoce a nuestros aliados
        </h1>

        <ul class="flex flex-wrap md:flex-nowrap md:flex-row items-center sponsors_logos justify-center">
            <li class="w-1/3 px-2">
                <img src="{{ asset('img/logos/mono/alianza_revive_el_rio_colorado.png') }}" alt="Alianza Revive el Río Colorado - Logo" class="w-full h-auto">
            </li>
            <li class="w-1/3 px-2">
                <img src="{{ asset('img/logos/mono/audubon.png') }}" alt="Audubon - Logo" class="w-full h-auto">
            </li>
            <li class="w-1/3 px-2">
                <img src="{{ asset('img/logos/mono/the_nature_conservancy.jpg') }}" alt="The Nature Conservancy - Logo" class="w-full h-auto">
            </li>
            <li class="w-1/3 px-2">
                <img src="{{ asset('img/logos/mono/sonoran_institute.jpg') }}" alt="Sonoran Institute - Logo" class="w-full h-auto">
            </li>
            <li class="w-1/3 px-2">
                <img src="{{ asset('img/logos/mono/redford_center.png') }}" alt="Redford Center - Logo" class="w-full h-auto">
            </li>
            <li class="w-1/3 px-2">
                <img src="{{ asset('img/logos/mono/pronatura.png') }}" alt="Pronatura - Logo" class="w-full h-auto">
            </li>
        </ul>
    </div>
</section>

<footer class="website-footer">
    <div class="container">
        <div class="flex flex-col md:flex-row items-start space-y-7 md:space-y-0 md:space-x-7">
            <div class="w-full md:w-1/4">
                <a href="{{ route('home') }}" class="logo inline-block mb-4">
                    <img src="{{ asset('img/logo_restauremos_el_colorado.png') }}" alt="Restauremos el Colorado - Logo">
                </a>
                <p class="small">
                    Síguenos y compartamos ideas para restaurar el Delta del Río Colorado.
                </p>
                <a href="#" class="inline-block mb-4">
                    <i class="fab fa-facebook fa-2x"></i>
                </a>
                <p class="small">
                    Contáctenos:
                </p>
                <p class="small">
                    <i class="fa fa-phone"></i>
                    +52 (686)568 1855
                </p>
                <p class="small">
                    <i class="fa fa-envelope"></i>
                    <a href="#">
                        Contáctenos
                    </a>
                </p>
                <p class="small">
                    <i class="fa fa-map-marker"></i>
                    República de Costa Rica #270 int.1 Colonia Cuauhtémoc Norte C.P. 21200
                </p>
            </div>
            <div class="w-full md:w-1/4">
                <h3 class="mb-4">Publicaciones Recientes</h3>
                <div class="flex flex-col space-y-2">
                    <a href="#" class="flex items-stretch space-x-4">
                        <div>
                            <div class="post-thumb">
                            </div>
                        </div>
                        <div>
                            <p class="small !mb-2">Taller de medición del agua</p>
                            <p class="small !m-0 opacity-75 flex items-center space-x-2">
                                <i class="fa fa-calendar-alt"></i>
                                <span>Mayo 5, 2023</span>
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="w-full md:w-1/4">
                <h3 class="mb-4">Nuestros Programas</h3>
                <p class="small">
                    Trabajamos con base en cuatro ejes de acción:
                </p>
                <ul class="text-sm list-links">
                    <li>
                        <a href="{{ route('programs', '#gestion-del-agua') }}">
                            <i class="fa fa-arrow-right"></i>
                            <span>Gestión del agua</span>
                        </a>
                    </li>
                    <li>
                    <a href="{{ route('programs', '#restauracion-ambiental') }}">
                            <i class="fa fa-arrow-right"></i>
                            <span>Restauración ambiental</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('programs', '#hidrologia') }}">
                            <i class="fa fa-arrow-right"></i>
                            <span>Hidrología</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('programs', '#agroecologia') }}">
                            <i class="fa fa-arrow-right"></i>
                            <span>Agroecología</span>
                        </a>
                    </li>
                </ul>
                <hr class="my-4 border-secondary">
                <ul class="text-sm list-links">
                    <li>
                        <a href="{{ route('login') }}">
                            <i class="fa fa-arrow-right"></i>
                            <span>Iniciar sesión</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="w-full md:w-1/4">
                <h3 class="mb-4">Sobre Nosotros</h3>
                <p class="small">
                    Somos una organización de la sociedad civil sin fines de lucro, tomando acciones para conservar nuestro entorno natural, conformada por un equipo de expertos que trabaja día a día, reviviendo el Delta del Río Colorado .
                </p>
                <p class="small">
                    Hemos desarrollado capacidades técnicas basados en la ciencia, para gestionar agua con fines ambientales y restaurar los ecosistemas.
                </p>
                <p class="small">
                    Logramos recuperar espacios naturales degradados por el impacto del cambio climático en la cuenca del Río Colorado, que serán un legado para futuras generaciones.
                </p>
            </div>
        </div>
    </div>
    <div class="border-t border-secondary py-7 mt-10">
        <div class="container flex items-center justify-between">
            <p class="small !m-0">
                © {{ date('Y') }} Restauremos el Colorado. Todos los derechos reservados.
            </p>
        </div>
    </div>
</footer>