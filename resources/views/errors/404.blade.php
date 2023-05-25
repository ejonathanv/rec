<x-guest-layout title="Error 404">
    <section class="py-10 md:py-16 bg-white">
        <div class="container text-center">
            <h1 class="mb-7">
                Error 404
            </h1>
            <p>
                Lá página que buscas no existe o no está disponible. 
            </p>
            <p>
                Por favor verifica la URL e intenta de nuevo o bien puedes
                <a href="{{ route('home') }}" class="text-secondary-500 hover:text-secondary-900 hover:underline">
                    regresar al inicio
                </a>
            </p>
        </div>
    </section>
</x-guest-layout>