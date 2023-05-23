<section class="bg-secondary-500">
    <div class="flex flex-col md:flex-row items-stretch">
        <div class="w-full md:w-7/12 h-80 md:h-auto bg-cover bg-no-repeat" style="background-image: url({{ $bgimg }})">
        </div>

        <div class="w-full md:w-5/12 px-6 py-10 md:px-16 md:py-16 text-white">
            {{ $slot }}
        </div>
    </div>
</section>