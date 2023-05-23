<section class="py-10 md:py-16 lg:py-32 bg-white bg-cover bg-bottom" style="background-image: url({{ asset('img/restauremos_el_colorado_publicaciones.jpg') }})">
    <div class="container">
        <h1 class="text-center mb-8 text-secondary-500">
            Conoce más
        </h1>
        <p class="text-lg text-center">
            Compartimos nuestros conocimientos, experiencia técnica y científica para mejorar la gestión del agua en la región.
        </p>

        <div class="flex flex-col md:flex-row items-stretch space-y-7 md:space-y-0 md:space-x-9 mt-20">
            @foreach($posts as $post)
                <x-website.post-card :post="$post" />
            @endforeach
        </div>
    </div>
</section>