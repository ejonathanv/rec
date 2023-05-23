<section class="py-10 md:py-16 lg:py-32 bg-cover bg-center bg-no-repeat {{ $styles }}" @if($bgimg) style="background-image: url({{ $bgimg }})" @endif>
    <div class="container flex flex-col md:flex-row space-y-10 md:space-y-0 items-center md:space-x-16">
        <div class="w-full md:w-7/12">
            <img src="{{ $img }}" alt="{{ $alt }}" class="shadow-lg rounded">
        </div>
        <div class="w-full md:w-5/12">
            {{ $slot }}
        </div>
    </div>
</section>