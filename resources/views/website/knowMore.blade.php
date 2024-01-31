<x-guest-layout title="Conoce Más">
    <x-website.page-cover 
        bgimg="{{ asset('img/restauremos_el_colorado_conoce_mas.jpg') }}" />        

    <x-website.slogan-bar 
        theme="primary"
        slogan="Entérate del trabajo multidisciplinario que se realiza en el Delta del Río Colorado, de los avances, los retos y de cómo puedes ser parte del esfuerzo ambiental." />

    <section class="py-10 md:py-16 lg:py-24 bg-white">
        <div class="container">
            @if(count($posts))
            <div class="mb-7 md:mb-16">
                <form action="{{ route('knowMore') }}" method="GET"
                    class="w-full md:w-6/12 mx-auto flex items-stretch space-x-2">
                    <div class="form-group !m-0">
                        <input type="text" name="consulta" class="form-control" placeholder="Buscar...">
                    </div>
                    <button class="btn btn-secondary">
                        <i class="fas fa-search"></i>
                    </button>
                </form>

                <nav class="flex flex-col md:flex-row space-y-3 md:space-y-0 items-center md:space-x-6 justify-center mt-5">
                    <a href="{{ route('knowMore') }}"
                        class="@empty($request) link @endempty">
                        Todos los temas
                    </a>
                    <a href="{{ route('knowMore', ['clasificacion' => 'comunicados']) }}" class="@isset($request) @if($request->clasificacion == 'comunicados') link @endif @endisset">
                        Comunicados
                    </a>
                    <a href="{{ route('knowMore', ['clasificacion' => 'noticias']) }}" class="@isset($request) @if($request->clasificacion == 'noticias') link @endif @endisset">
                        Noticias
                    </a>
                    <a href="{{ route('knowMore', ['clasificacion' => 'articulos']) }}"
                        class="@isset($request) @if($request->clasificacion == 'articulos') link @endif @endisset">
                        Artículos
                    </a>
                    <a href="{{ route('knowMore', ['clasificacion' => 'extensionismo agroecologico']) }}"
                        class="@isset($request) @if($request->clasificacion == 'extensionismo agroecologico') link @endif @endisset"> 
                        Extensionismo Agroecológico                       
                    </a>
                </nav>
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
                    <div class="flex flex-col md:flex-row space-y-7 md:space-y-0 items-start md:space-x-7 mb-16">
                        @if($post->type == 'post')
                        <div class="w-full md:w-4/12">
                            <a href="{{ route('post', $post->slug) }}">
                                <div class="post-cover lg shadow rounded" style="background-image: url({{ asset('uploads/' . $post->cover) }})">
                                </div>
                            </a>
                        </div>
                        @endif
                        @if($post->type = 'post')
                        <div class="w-full md:w-8/12">
                        @else
                        <div class="w-full">
                        @endif
                            <p class="text-gray-400 flex items-center space-x-2">
                                <i class="fa fa-calendar-alt fa-sm"></i>
                                <span>
                                {{ \Carbon\Carbon::parse($post->date)->format('d M, Y') }} | {{ $post->category ? $post->category->name : 'Sin clasificación' }}
                                </span>
                            </p>
                            <h2 class="mb-5">
                                <a href="{{ route('post', $post->slug) }}" class="text-secondary-500 hover:text-secondary-900 hover:underline">
                                    {{ $post->title }}
                                </a>
                            </h2>
                            <p class="mb-5 text-gray-400 text-sm">
                                Autor: {{ $post->author }}
                            </p>
                            <h4 class="mb-4">
                                {{ $post->resume }}
                            </h4>
                            <p>
                                {!! \Str::limit($post->content, 120) !!}
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