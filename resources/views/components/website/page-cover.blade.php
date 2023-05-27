<section class="flex items-center justify-center py-16 md:py-32 lg:py-60 bg-primary bg-cover bg-no-repeat bg-bottom md:bg-fixed relative" 
    style="background-image: url({{ $bgimg }})">
    <div class="absolute top-0 left-0 w-full h-full bg-black" style="opacity: .15"></div>
    <div class="container relative z-10">
        <div class="w-full md:w-9/12 mx-auto">
            @if($title)
                <h1 class="text-center text-white text-3xl md:text-5xl !leading-relaxed">{{ $title }}</h1>
            @endif
        </div>
    </div>
</section>