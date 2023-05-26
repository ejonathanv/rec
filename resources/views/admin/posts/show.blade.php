<x-guest-layout title="{{ $post->title }}">
    <section class="py-10 md:py-16 bg-light">
        <div class="container">
            <div class="w-full md:w-6/12 mx-auto">

                <a href="{{ route('posts.index') }}" class="link flex items-center space-x-2">
                    <i class="fas fa-arrow-left"></i>
                    <span>
                    Regresar a la lista de publicaciones
                    </span>
                </a>

                <x-website.post-form :post="$post" method="PUT" />
            </div>
        </div>
    </section>
</x-guest-layout>