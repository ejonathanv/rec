@if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-4" role="alert">
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
@endif

<form action="{{ $route }}" method="POST" class="mt-4" enctype="multipart/form-data">
    @csrf
    @method($method)
    <div class="form-group">
        <label for="">
            Portada
        </label>
        <div>
            <input type="file" name="cover" accept="image/*">
        </div>
        @error('cover')
        <span class="text-red-500 text-xs font-bold">
            {{ $message }}
        </span>
        @enderror
    </div>

    @if(isset($post) && $post->cover)
    <div class="post-cover shadow rounded lg" style="background-image: url('{{ asset('uploads/' . $post->cover) }}')">
    </div>
    @endif

    <!-- Fecha -->
    <div class="form-group">
        <label for="">
            Fecha:
        </label>
        <input type="date" name="date" class="form-control" value="{{ isset($post) ? $post->date : old('date') }}" required>
        @error('date')
        <span class="text-red-500 text-xs font-bold">
            {{ $message }}
        </span>
        @enderror
    </div>

    <!-- Titulo -->
    <div class="form-group">
        <label for="">
            Título
        </label>
        <input type="text" name="title" class="form-control" value="{{ isset($post) ? $post->title : old('title') }}" required autofocus>
        @error('title')
        <span class="text-red-500 text-xs font-bold">
            {{ $message }}
        </span>
        @enderror
    </div>

    <!-- Resumen -->
    <div class="form-group">
        <label for="">
            Resumen
        </label>
        <input type="text" name="resume" class="form-control" value="{{ isset($post) ? $post->resume : old('resume') }}" required>
        @error('resume')
        <span class="text-red-500 text-xs font-bold">
            {{ $message }}
        </span>
        @enderror
    </div>

    <!-- Contenido -->
    <div class="form-group">
        <label for="">Contenido</label>
        <input type="hidden" name="content" id="postContent" value="{{ isset($post) ? $post->content : old('content') }}">
        <div id="editor">
            {!! isset($post) ? $post->content : old('content') !!}
        </div>
        @error('content')
        <span class="text-red-500 text-xs font-bold">
            {{ $message }}
        </span>
        @enderror
    </div>

    <!-- Clasificacion -->
    <div class="form-group">
        <label for="">
            Classificación
        </label>
        <select name="category" class="form-control" required>
            <option value="">Seleccione una opción</option>
            <option value="Comunicados"
                @if(isset($post) && $post->category) 
                    @if($post->category->name == 'Comunicados')
                        selected
                    @endif
                @endif
                >
                Comunicados
            </option>
            <option value="Noticias"
                @if(isset($post) && $post->category)                
                    @if($post->category->name == 'Noticias')
                        selected
                    @endif
                @endif
                >
                Noticias
            </option>
            <option value="Artículos"
                @if(isset($post) && $post->category)
                    @if($post->category->name == 'Artículos')
                        selected
                    @endif
                @endif
                >
                Artículos
            </option>
            <option value="Extensionismo Agroecológico"
                @if(isset($post) && $post->category)
                    @if($post->category->name == 'Extensionismo Agroecológico')
                        selected
                    @endif
                @endif
                >
                Extensionismo Agroecológico
            </option>
        </select>
    </div>

    <!-- Autor -->
    <div class="form-group">
        <label for="">
            Autor
        </label>
        <input type="text" name="author" class="form-control" value="{{ isset($post) ? $post->author : old('author') }}" required>
        @error('author')
        <span class="text-red-500 text-xs font-bold">
            {{ $message }}
        </span>
        @enderror
    </div>

    <!-- Estatus -->
    <div class="form-group">
        <label class="flex items-center space-x-2">
            <input type="checkbox" name="draft" {{ isset($post) && $post->status == 'draft' ? 'checked' : '' }}>
            <span>
                Guardar como borrador
            </span>
        </label>
    </div>

    <!-- Boton -->
    <div>
        <button type="submit" class="btn btn-primary">
            Actualizar
        </button>
    </div>
</form>
@if($method == 'PUT')
<hr class="my-8 border-b-2 border-secondary">

<form action="{{ route('posts.destroy', $post) }}" method="POST" class="mt-4" onsubmit="return confirm('¿Estás seguro de eliminar esta publicación?, esta acción no se puede deshacer')">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">
        Eliminar
    </button>
</form>
@endif