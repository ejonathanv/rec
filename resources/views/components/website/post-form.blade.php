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

    <div class="form-group">
        <label class="flex items-center space-x-2">
            <input type="checkbox" name="draft" {{ isset($post) && $post->status == 'draft' ? 'checked' : '' }}>
            <span>
                Guardar como borrador
            </span>
        </label>
    </div>

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