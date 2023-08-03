<x-guest-layout title="Administración">
    <section class="py-10 md:py-16 bg-white">
        <div class="container">
            <div class="w-full md:w-9/12 mx-auto">

                <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row items-start md:items-center justify-between mb-6">
                    <h3>
                        Lista de publicaciones
                    </h3>

                    <a href="{{ route('posts.create') }}"
                        class="btn btn-primary">
                        Nueva publicación
                    </a>
                </div>

                @if(count($posts))

                @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative my-5" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
                @endif

                <div>
                    @foreach($posts as $post)
                        <div class="flex flex-col md:flex-row mb-4 space-y-5 md:space-y-0 space-x-0 md:space-x-10 bg-white p-6 border rounded">
                            <div class="w-full md:w-4/12">
                                <a href="{{ route('posts.show', $post) }}">
                                    <div class="post-cover sm !m-0" style="background-image: url({{ asset('uploads/' . $post->cover) }})"></div>
                                </a>
                            </div>

                            <div class="w-full md:8/12">
                                <p class="small">
                                    {{ \Carbon\Carbon::parse($post->date)->format('d/m/Y') }}
                                </p>
                                <a href="{{ route('posts.show', $post) }}" class="link">
                                    <h3 class="mb-4 text-secondary-500">
                                        {{ $post->title }}
                                    </h3>
                                </a>
                                <h4 class="mb-4">
                                    {{ $post->resume }}
                                </h4>
                                <a href="{{ route('posts.show', $post) }}" class="link"
                                    class="link">
                                    Editar
                                </a>

                                <p class="mt-6">
                                    Estatus: 
                                    <span class="mt-5 @if($post->status == 'draft') text-orange-500 @else text-green-500 @endif">
                                        {{ $post->status == 'draft' ? 'Borrador' : 'Publicado' }}
                                    </span>
                                </p>

                                <p class="!m-0">
                                    Clasificación: {{ $post->category ? $post->category->name : 'Sin clasificación' }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div>
                    {{ $posts->links() }}
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