<x-guest-layout title="Conoce Más">
    <x-website.page-cover 
        bgimg="{{ asset('img/restauremos_el_colorado_conoce_mas.jpg') }}" />        

    <x-website.slogan-bar 
        theme="primary"
        slogan="Entérate del trabajo multidisciplinario que se realiza en el Delta del Río Colorado, de los avances, los retos y de cómo puedes ser parte del esfuerzo por devolverle la vida al río." />

    <section class="py-10 md:py-16 lg:py-24 bg-white">
        <div class="container">
            @if(count($posts))
            <div class="mb-16">
                <form action="{{ route('knowMore') }}" method="GET"
                    class="w-6/12 mx-auto flex items-stretch space-x-2">
                    <div class="form-group !m-0">
                        <input type="text" name="consulta" class="form-control" placeholder="Buscar...">
                    </div>
                    <button class="btn btn-secondary">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
            <div>

                @isset($request)
                    @if($request->consulta)
                        <div class="mb-16">
                            <h2 class="text-secondary-500 mb-6">
                                Resultados de la búsqueda
                            </h2>
                            <p class="mb-6">
                                Se encontraron {{ $posts->total() }} resultados para la búsqueda "{{ $request->consulta }}"
                            </p>
                        </div>
                    @endif
                @endisset

                @foreach($posts as $post)
                    <div class="flex items-start space-x-7 mb-16">
                        <div class="w-4/12">
                            <a href="{{ route('post', $post->slug) }}">
                                <div class="post-cover lg shadow rounded" style="background-image: url({{ $post->cover }})">
                                </div>
                            </a>
                        </div>
                        <div class="w-8/12">
                            <p class="text-gray-400 flex items-center space-x-2">
                                <i class="fa fa-calendar-alt fa-sm"></i>
                                <span>
                                {{ $post->created_at->format('d M, Y') }}
                                </span>
                            </p>
                            <h2 class="mb-6">
                                <a href="{{ route('post', $post->slug) }}" class="text-secondary-500 hover:text-secondary-900 hover:underline">
                                    {{ $post->title }}
                                </a>
                            </h2>
                            <h4>
                                {{ $post->resume }}
                            </h4>
                            <p>
                                {{ $post->content }}
                            </p>
                            <a href="{{ route('post', $post->slug) }}" class="inline-block">
                                <span class="text-secondary-500 hover:text-secondary-900 hover:underline">
                                    Leer más
                                </span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div>
                {{ $posts->links() }}
            </div>
            @else
                <h3 class="text-center">
                    No hemos publicado nada aún. Pero pronto estaremos compartiendo información relevante. 
                </h3>
            @endif
        </div>
    </section>
</x-guest-layout>