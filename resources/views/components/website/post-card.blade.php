<a href="{{ route('post', $post->slug) }}" class="block w-full md:w-1/3 bg-white bg-opacity-75 post-card">
    @if($post->type == 'post')
    <div class="post-cover" style="background-image: url('{{ asset('uploads/' . $post->cover) }}')">
    </div>
    @else
        @if($post->cover)
        <div class="post-cover" style="background-image: url('{{ asset('uploads/' . $post->cover) }}')">
        </div>
        @else
        <div class="post-cover" style="background-image: url('{{ asset('img/blog_agro_img.png') }}')">
        </div>
        @endif
    @endif
    <div class="p-4">
        <p class="small">
            {{ $post->created_at->format('d M, Y') }} | {{ $post->category ? $post->category->name : 'Sin clasificación' }}
        </p>
        <h2 class="mb-4">
            {{ $post->title }}
        </h2>
        <p class="small">
            {{ $post->resume }}
        </p>
    </div>
</a>