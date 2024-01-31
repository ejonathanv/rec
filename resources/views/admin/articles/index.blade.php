<x-guest-layout title="Lista de artículos PDF">
    <section class="py-10 md:py-16 bg-white">
        <div class="container">
            <div class="w-full md:w-9/12 mx-auto">

                <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row items-start md:items-center justify-between mb-6">
                    <h3>
                        Lista de artículos PDF
                    </h3>

                    <a href="{{ route('pdf-articles-create') }}"
                        class="btn btn-primary">
                        Nuevo artículo
                    </a>
                </div>

                @if(count($articles))

                @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative my-5" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
                @endif

                <div>
                    @foreach($articles as $article)
                        <div class="flex flex-col md:flex-row mb-4 space-y-5 md:space-y-0 space-x-0 md:space-x-10 bg-white p-6 border rounded">
                            <div class="w-full md:w-full">
                                <p class="small">
                                    {{ \Carbon\Carbon::parse($article->date)->format('d/m/Y') }}
                                </p>
                                <a href="{{ route('pdf-articles-show', $article) }}" class="link">
                                    <h3 class="mb-4 text-secondary-500">
                                        {{ $article->title }}
                                    </h3>
                                </a>
                                <p class="mb-5 text-gray-400 text-sm">
                                    Autor: {{ $article->author }}
                                </p>
                                <h4 class="mb-4">
                                    {{ $article->resume }}
                                </h4>
                                <a href="{{ route('pdf-articles-show', $article) }}" class="link"
                                    class="link">
                                    Editar
                                </a>

                                <p class="mt-6">
                                    Estatus: 
                                    <span class="mt-5 @if($article->status == 'draft') text-orange-500 @else text-green-500 @endif">
                                        {{ $article->status == 'draft' ? 'Borrador' : 'Publicado' }}
                                    </span>
                                </p>

                                <p class="!m-0">
                                    Clasificación: {{ $article->category ? $article->category->name : 'Sin clasificación' }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div>
                    {{ $articles->links() }}
                </div>

                @else
                    <p>
                        No se han publicado artículos aún.
                    </p>
                @endif
            </div>
        </div>
    </section>
</x-guest-layout>