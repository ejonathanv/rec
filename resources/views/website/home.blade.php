<x-guest-layout title="Bienvenidos">
    <!-- This is the page cover -->
    <x-website.page-cover  
        title="El Río Colorado es nuestra principal fuente de agua y vida." 
        bgimg="{{ asset('img/restauremos_el_colorado_portada_2.jpg') }}" />

    <!-- This is a title before the specs -->
    <x-website.slogan-bar 
        theme="light" 
        slogan="El impacto de nuestra organización ha sido posible gracias a:" />

    <!-- This is the specs section -->
    <x-website.specs />

    <!-- This is the two sections with full background on the left -->
    <x-website.two-sections-with-full-bg-on-the-left 
        bgimg="{{ asset('img/restauremos_el_colorado_programas.jpg') }}">
        <!-- This is the slot content to show how we do it -->
        <x-website.how-we-do-it />
    </x-website.two-sections-with-full-bg-on-the-left>

    <!-- This are the recent posts on the blog -->
    <x-website.recent-posts />
</x-guest-layout>