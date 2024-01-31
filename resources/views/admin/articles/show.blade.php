<x-guest-layout title="{{ $article->title }}">
    <section class="py-10 md:py-16 bg-white">
        <div class="container">
            <div class="w-full md:w-6/12 mx-auto">

                <a href="{{ route('pdf-articles') }}" class="link flex items-center space-x-2">
                    <i class="fas fa-arrow-left"></i>
                    <span>
                    Regresar a la lista de artículos
                    </span>
                </a>

                <x-website.article-form :article="$article" method="PUT" />

            </div>
        </div>
    </section>
</x-guest-layout>