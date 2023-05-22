<x-guest-layout title="Bienvenidos">
    <x-website.page-cover 
        title="Es posible devolver la vida al Delta del Río Colorado "
        bgimg="{{ asset('img/restauremos_el_colorado_portada.jpg') }}" />

    <section class="py-7 bg-white">
        <div class="container">
            <h2 class="text-center text-primary text-xl md:text-2xl">
                El Río Colorado es nuestra principal fuente de agua y vida.
            </h2>
        </div>
    </section>

    <section class="py-7 bg-light">
        <div class="container">
            <h2 class="text-center text-xl md:text-2xl">
                El impacto de nuestra organización ha sido posible gracias a:
            </h2>
        </div>
    </section>

    <section class="py-10 md:py-16 lg:py-24 bg-white">
        <div class="container flex flex-col md:flex-row items-stretch space-y-10 md:space-y-0 md:space-x-10 text-center md:text-left">
            <div class="w-full md:w-1/3">
                <img src="{{ asset('img/alianzas_estrategicas_icono.png') }}" alt="Restauremos el Colorado - Alianzas estratégicas" class="w-20 h-auto mb-7 mx-auto md:ml-0" />
                <h3 class="mb-6">
                    Alianzas estratégicas
                </h3>
                <p>
                Formamos parte de la Alianza Revive el Río Colorado. Compartimos los conocimientos y experiencia técnica adquiridos en materia de gestión del agua y trabajamos de la mano con gobiernos de México y Estados Unidos, investigadores y usuarios agrícolas. 
                </p>
            </div>

            <div class="w-full md:w-1/3">
                <img src="{{ asset('img/compromiso_ambiental_icono.png') }}" alt="Restauremos el Colorado - Compromiso ambiental" class="w-20 h-auto mb-7 mx-auto md:ml-0" />
                <h3 class="mb-6">
                    Compromiso ambiental
                </h3>
                <p>
                Comprometidos con la conservación de nuestro hábitat natural, transformamos ecosistemas en beneficio de cientos de especies de flora y fauna y las comunidades de la región. 
                </p>
            </div>

            <div class="w-full md:w-1/3">
                <img src="{{ asset('img/credibilidad_icono.png') }}" alt="Restauremos el Colorado - Credibilidad" class="w-20 h-auto mb-7 mx-auto md:ml-0" />
                <h3 class="mb-6">
                    Credibilidad
                </h3>
                <p>
                Respaldamos nuestro trabajo, con datos científicos y experiencias de campo, ganando la confianza de los usuarios del agua, autoridades y comunidad. 
                </p>
            </div>
        </div>
    </section>

    <section class="bg-secondary-500">
        <div class="flex flex-col md:flex-row items-stretch">
            <div class="w-full md:w-7/12 h-80 md:h-auto bg-cover bg-no-repeat" style="background-image: url({{ asset('img/restauremos_el_colorado_programas.jpg') }})">
            </div>

            <div class="w-full md:w-5/12 px-6 py-10 md:px-16 md:py-16 text-white">
                <h2 class="pb-7 border-b-2 border-white text-2xl mb-7">
                    Cómo lo hacemos:
                </h2>
                <p class="text-base md:text-lg font-bold">
                Sabemos que la conservación del agua y la resiliencia hídrica sólo es posible si trabajamos de manera integral, por eso nuestros programas abarcan: 
                </p>
                <ol class="text-base md:text-lg flex flex-col space-y-3 mt-10 font-bold mb-7">
                    <li class="flex items-center space-x-2">
                        <i class="fa fa-angle-right"></i>
                        <span>
                        Gestión del agua
                        </span>
                    </li>
                    <li class="flex items-center space-x-2">
                        <i class="fa fa-angle-right"></i>
                        <span>
                        Restauración ambiental
                        </span>
                    </li>
                    <li class="flex items-center space-x-2">
                        <i class="fa fa-angle-right"></i>
                        <span>
                        Hidrología
                        </span>
                    </li>
                    <li class="flex items-center space-x-2">
                        <i class="fa fa-angle-right"></i>
                        <span>
                        Agroecología
                        </span>
                    </li>
                </ol>

                <a href="#" class="btn btn-primary w-full md:w-auto">
                    Conoce más de nuestros programas
                </a>
            </div>
        </div>
    </section>
</x-guest-layout>