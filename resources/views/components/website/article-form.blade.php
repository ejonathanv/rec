@if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-4" role="alert">
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
@endif

<form action="{{ $route }}" method="POST" class="mt-4" enctype="multipart/form-data">
    @csrf
    @method($method)

    <!-- Agregar documento PDF -->
    <div class="form-group">
        <label for="">
            Documento PDF
        </label>
        <div style="margin-top: 0.5rem;">
            <input type="file" name="pdf" accept="application/pdf">
        </div>
        @error('pdf')
        <span class="text-red-500 text-xs font-bold">
            {{ $message }}
        </span>
        @enderror
    </div>

    @if(isset($article) && $article->pdfPath)
    <iframe src="{{ asset('pdfs/' . $article->pdfPath) }}" frameborder="0" class="w-full h-96"></iframe>
    @endif

    <!-- Fecha -->
    <div class="form-group">
        <label for="">
            Fecha:
        </label>
        <input type="date" name="date" class="form-control" value="{{ isset($article) ? $article->date : old('date') }}" required>
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
        <input type="text" name="title" class="form-control" value="{{ isset($article) ? $article->title : old('title') }}" required autofocus>
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
        <input type="text" name="resume" class="form-control" value="{{ isset($article) ? $article->resume : old('resume') }}" required>
        @error('resume')
        <span class="text-red-500 text-xs font-bold">
            {{ $message }}
        </span>
        @enderror
    </div>

    <!-- Clasificacion -->
    <div class="form-group">
        <label for="">
            Clasificación
        </label>
        <select name="category" class="form-control" required>
            <option value="">Seleccione una opción</option>
            <option value="Comunicados"
                @if(isset($article) && $article->category) 
                    @if($article->category->name == 'Comunicados')
                        selected
                    @endif
                @endif
                >
                Comunicados
            </option>
            <option value="Noticias"
                @if(isset($article) && $article->category)                
                    @if($article->category->name == 'Noticias')
                        selected
                    @endif
                @endif
                >
                Noticias
            </option>
            <option value="Artículos"
                @if(isset($article) && $article->category)
                    @if($article->category->name == 'Artículos')
                        selected
                    @endif
                @endif
                >
                Artículos
            </option>
            <option value="Extensionismo Agroecológico"
                @if(isset($article) && $article->category)
                    @if($article->category->name == 'Extensionismo Agroecológico')
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
        <input type="text" name="author" class="form-control" value="{{ isset($article) ? $article->author : old('author') }}" required>
        @error('author')
        <span class="text-red-500 text-xs font-bold">
            {{ $message }}
        </span>
        @enderror
    </div>

    <!-- Estatus -->
    <div class="form-group">
        <label class="flex items-center space-x-2">
            <input type="checkbox" name="draft" {{ isset($article) && $article->status == 'draft' ? 'checked' : '' }}>
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

<form action="{{ route('pdf-articles-destroy', $article) }}" method="POST" class="mt-4" onsubmit="return confirm('¿Estás seguro de eliminar este artículo?, esta acción no se puede deshacer')">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">
        Eliminar
    </button>
</form>
@endif