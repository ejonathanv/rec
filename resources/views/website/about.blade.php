<x-guest-layout title="Quiénes Somos">
    <x-website.page-cover 
        bgimg="{{ asset('img/restauremos_el_colorado_quienes_somos.jpg') }}" />

    <x-website.slogan-bar 
        theme="white"
        slogan="Ante el impacto del cambio climático, unimos trabajo basado en la ciencia y voluntad para plantear soluciones." />

    <x-website.two-columns-img-on-right 
        theme="primary" 
        img="{{ asset('img/restauremos_el_colorado_quienes_somos_2.jpg') }}">
            <h1 class="title-bordered">
                Compromiso ambiental con el Delta del Río Colorado y las comunidades. 
            </h1>
            <p class="small">
                Somos un equipo de expertos dedicados a la restauración del medio ambiente en el Delta del Río Colorado y a la implementación de mejoras para la gestión del agua. Uno de nuestros sitios de restauración llamado “El Chaussé”, es un referente de cómo una región degradada, puede recuperar su equilibrio, convirtiéndose en bello paisaje natural.
            </p>

            <p class="small !mb-0">
                Aportamos capacidades técnicas basadas en el trabajo científico, estableciendo alianzas con organizaciones civiles, comunidades, gobiernos, agricultores y academia, para juntos, ser parte de la solución. A través de los años, hemos obtenido mayor experiencia en la medición del agua, que sirve para implementar estrategias de resiliencia hídrica, ante el cambio climático, la sequía y otras amenazas al ecosistema. 
            </p>
    </x-website.two-columns-img-on-right>

    <x-website.two-columns theme="light">
        <x-slot name="left">
            <h1 class="title-bordered">
            Compromiso ambiental con el Delta del Río Colorado y las comunidades
            </h1>
            <p class="text-lg mb-10">
                Trabajamos todos los días para lograr una gestión del agua más eficiente, que sirva a todos los usuarios en la región, protegiendo la preservación de flora y fauna nativa del Delta.
            </p>
            <div class="flex flex-col md:flex-row space-y-7 md:space-y-0 md:space-y-0 md:space-x-10">
                <div>
                    <h3 class="mb-4">Nuestra misión</h3>
                    <p class="!mb-0">
                        Contribuir a la restauración de los ecosistemas en el Delta del Río Colorado y compartir experiencias y conocimientos entre los usuarios para impulsar la resiliencia hídrica. 
                    </p>
                </div>
                <div>
                    <h3 class="mb-4">Nuestra visión</h3>
                    <p class="!mb-0">
                        Ser una organización clave en la toma de decisiones sobre la conservación del agua y medio ambiente en la cuenca del Río Colorado. 
                    </p>
                </div>
            </div>
        </x-slot>
        <x-slot name="right">
            <div class="px-10 py-16 bg-cover bg-center bg-no-repeat text-center" style="background-image: url({{ asset('img/restauremos_el_colorado_publicaciones.jpg') }})">
                <h3 class="title-bordered centered">
                    REC ha sido posible gracias a:
                </h3>

                <ul class="flex flex-col space-y-4 text-xl mb-16">
                    <li>Alianzas estratégicas</li>
                    <li>Compromiso ambiental</li>
                    <li>Credibilidad y transparencia.</li>
                </ul>

                <a href="#" class="btn btn-secondary">
                    Conoce los programas
                </a>
            </div>
        </x-slot>
    </x-website.two-columns>
</x-guest-layout>