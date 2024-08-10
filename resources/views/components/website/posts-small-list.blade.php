<h3 class="mb-4">
    {{ $title }}
</h3>
@if(count($posts))
<div class="flex flex-col space-y-2">
    @foreach($posts as $post)
    <a href="{{ route('post', $post->slug) }}" class="flex items-stretch space-x-4">
        <div>
            @if($post->cover)
            <div class="post-thumb" style="background-image: url('{{ asset('uploads/' . $post->cover) }}')">
            </div>
            @else
            <div class="post-thumb" style="background-image: url('{{ asset('img/blog_agro_img.png') }}')">
            </div>
            @endif
        </div>
        <div>
            <p class="small !mb-2">
                {{ $post->title }}
            </p>
            <p class="text-xs !m-0 opacity-75 flex items-center space-x-2">
                <i class="fa fa-calendar-alt"></i>
                <span>
                    {{ \Carbon\Carbon::parse($post->date)->format('d M, Y') }}
                </span>
            </p>
        </div>
    </a>
    @endforeach
</div>
@else
<p class="opacity-75">
    No hemos publicado nada aún. Pero pronto estaremos compartiendo información relevante.
</p>
@endif