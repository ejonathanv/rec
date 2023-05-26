<x-guest-layout>
    <section class="py-10 md:py-16 bg-white">
        <div class="container">
            <div class="w-full md:w-4/12 mx-auto">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />


                <h3 class="mb-5">
                    ¡Hola de nuevo! Introduce tus datos para iniciar sesión.
                </h3>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="form-group">
                        <label for="">Correo electrónico</label>
                        <input type="text" class="form-control" name="email" required placeholder="Ingresa tu usuario" value="{{ old('email') }}" autofocus>
                        @error('email')
                            <span class="text-red-500 text-xs font-bold">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="form-group">
                        <label for="">Contraseña</label>
                        <input type="password" class="form-control" name="password" required placeholder="Ingresa tu contraseña">
                        @error('password')
                            <span class="text-red-500 text-xs font-bold">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <!-- Remember Me -->
                    {{--
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                    --}}

                    <div class="flex items-center justify-start mt-4">
                        @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                        @endif

                        <button type="submit" class="btn btn-primary">
                            Ingresar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-guest-layout>