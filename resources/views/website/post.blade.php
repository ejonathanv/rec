<x-guest-layout title="Conoce Más">
    <x-website.page-cover 
        bgimg="{{ asset('img/restauremos_el_colorado_conoce_mas.jpg') }}" />        

    <x-website.slogan-bar 
        theme="primary"
        slogan="Entérate del trabajo multidisciplinario que se realiza en el Delta del Río Colorado, de los avances, los retos y de cómo puedes ser parte del esfuerzo por devolverle la vida al río." />

    <section class="py-10 md:py-16 lg:py-24 bg-white">
        <div class="container">
            <div class="flex flex-col md:flex-row space-y-7 md:space-y-0 md:space-x-10">
                <div class="w-full md:w-8/12">
                    <div class="post-cover xl shadow rounded" style="background-image: url({{ asset('uploads/' . $post->cover) }})">
                    </div>
                    <div class="mt-10 md:mt-16">
                        <p class="small mb-6">
                            <i class="fa fa-calendar-alt fa-sm"></i>
                            <span>
                                {{ $post->created_at->format('d M, Y') }} | {{ $post->category ? $post->category->name : 'Sin clasificación' }}
                            </span>
                        </p>
                        <h1 class="mb-10 text-secondary-500">
                            {{ $post->title }}
                        </h1>
                        <h3 class="mb-10">
                            {{ $post->resume }}
                        </h3>
                        <p>
                            {!! $post->content !!}
                        </p>
                    </div>
                </div>
                @if(count($otherPosts))
                <div class="w-full md:w-4/12">
                    <x-website.posts-small-list title="Otras Publicaciones" :posts="$otherPosts" />
                </div>
                @endif
            </div>
        </div>
    </section>
</x-guest-layout>