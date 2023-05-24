<x-guest-layout title="Comunícate Con Nosotros">
    <x-website.page-cover 
        bgimg="{{ asset('img/restauremos_el_colorado_contacto.jpg') }}" />    
    
    <section class="py-10 md:py-16 lg:py-24 bg-light">
        <div class="container">
            <div class="w-9/12 mx-auto">
                <h1 class="title-bordered centered">
                    ¿Quieres saber más sobre nuestro trabajo o compartirnos una idea? 
                </h1>

                <p class="text-2xl text-center mt-6">
                    <i class="fa fa-phone-alt fa-sm text-secondary mr-2"></i>
                    <span>Llámanos: </span>
                    <a href="tel:+52 (686)568 1855" class="text-secondary-500 underline">
                        +52 (686)568 1855
                    </a>
                </p>
            </div>
        </div>
    </section>

    <section class="bg-white py-10 md:py-16 lg:py-24">
        <div class="container">
            <div class="flex flex-col md:flex-row items-start space-y-10 md:space-y-0 md:space-x-16">
                <div class="w-full md:w-5/12">
                    <h1 class="title-bordered">¡Queremos leerte!</h1>
                    <p class="text-lg">
                        Contáctanos para saber más de lo que hacemos en Restauremos el Colorado. Pregunta por nuestras capacitaciones o actividades de educación ambiental. 
                    </p>
                </div>
                <div class="w-full md:w-7/12">

                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                            <strong class="font-bold">¡Muy Bien!</strong>
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif

                    <form action="{{ route('contactPost') }}" method="POST">
                        @csrf
                        <div class="flex items-start flex-col md:flex-row md:space-x-7">
                            <div class="form-group flex-1">
                                <label for="">
                                    Nombre completo
                                </label>
                                <input type="text" class="form-control" name="name" required placeholder="Nombre(s) Apellido(s)" value="{{ old('name') }}" autofocus>
                                @error('name')
                                    <span class="text-red-500 text-xs font-bold">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group flex-1">
                                <label for="">
                                    Correo electrónico
                                </label>
                                <input type="email" class="form-control" name="email" required placeholder="usuario@dominio.com" value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-red-500 text-xs font-bold">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">
                                Asunto
                            </label>
                            <input type="text" class="form-control" name="subject" required placeholder="Asunto" value="{{ old('subject') }}">
                            @error('subject')
                                <span class="text-red-500 text-xs font-bold">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">
                                Mensaje
                            </label>
                            <textarea name="message" id="" cols="30" rows="3" class="form-control" required placeholder="Escríbe tu mensaje aquí...">{{ old('message') }}</textarea>
                            @error('message')
                                <span class="text-red-500 text-xs font-bold">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary w-full md:w-auto mt-5">
                            Enviar mensaje
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>