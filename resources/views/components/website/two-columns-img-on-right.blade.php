<section class="py-10 md:py-16 lg:py-32 {{ $styles }}" 
    @if($bgimg) style="background-image: url({{ $bgimg }})" @endif
    id="{{ $id }}">
    <div class="container flex flex-col md:flex-row space-y-10 md:space-y-0 items-center md:space-x-16">
        <div class="w-full md:w-5/12">
            {{ $slot }}
        </div>
        <div class="w-full md:w-7/12">
            <img src="{{ $img }}" alt="{{ $alt }}" class="shadow-lg rounded">
        </div>
    </div>
</section>