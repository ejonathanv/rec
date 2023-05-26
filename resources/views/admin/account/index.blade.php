<x-guest-layout title="Mi cuenta">
    <section class="py-10 md:py-16 bg-white">
        <div class="container">
            <div class="w-full md:w-6/12 mx-auto">

                <h3 class="mb-6">
                    Actualizar datos
                </h3>


                @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative my-5" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
                @endif

                <form action="{{ route('update-account') }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="">
                            Nombre completo
                        </label>
                        <input type="text" class="form-control" name="name" required placeholder="Nombre(s) Apellido(s)" value="{{ old('name', auth()->user()->name) }}" autofocus>
                        @error('name')
                        <span class="text-red-500 text-xs font-bold">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">
                            Correo electrónico
                        </label>
                        <input type="email" class="form-control" name="email" required placeholder="usuario@empresa.com" value="{{ old('email', auth()->user()->email) }}">
                        @error('email')
                        <span class="text-red-500 text-xs font-bold">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>

                    <hr class="my-8 border-2 border-gray-200">

                    <h3 class="mb-6">
                        Cambiar contraseña
                    </h3>

                    <div class="form-group">
                        <label for="">
                            Contraseña
                        </label>
                        <input type="password" class="form-control" name="password" placeholder="Contraseña">
                    </div>

                    <button type="submit" class="btn btn-primary w-full md:w-auto mt-5">
                        Actualizar datos
                    </button>
                </form>

            </div>
        </div>
    </section>
</x-guest-layout>