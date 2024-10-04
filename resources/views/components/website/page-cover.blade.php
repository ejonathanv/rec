<section class="flex items-center justify-center bg-primary bg-cover bg-no-repeat bg-bottom md:bg-fixed relative" x-data="init_owl_carousel()">
    <div class="owl-carousel owl-theme h-full">
        <!-- Ciénega de Santa Clara -->
        <div class="item h-full w-full" style="background-image: url('{{ asset('img/slider/2.jpg') }}');">
            <div class="item-content">
                <div class="container">
                    <div class="w-9/12 mx-auto">
                        <h2>
                            Ciénega de Santa Clara
                        </h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Presa de Morelos -->
        <div class="item h-full w-full" style="background-image: url('{{ asset('img/slider/3.jpg') }}');">
            <div class="item-content">
                <div class="container">
                    <div class="w-9/12 mx-auto">
                        <h2>
                            Presa Morelos
                        </h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- El Chausse -->
        <div class="item h-full w-full" style="background-image: url('{{ asset('img/slider/1.jpg') }}');">
            <div class="item-content">
                <div class="container">
                    <div class="w-9/12 mx-auto">
                        <h2>
                            El Chausse
                        </h2>
                        <h4>
                            Sitio de restauración
                        </h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- El Río Colorado es nuestra principal fuente de agua y vida -->
        <div class="item h-full w-full" style="background-image: url('{{ asset('img/restauremos_el_colorado_portada_2.jpg') }}');">
            <div class="item-content">
                <div class="container">
                    <div class="w-9/12 mx-auto">
                        <h2>
                            El Río Colorado es nuestra principal fuente de agua y vida
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

<style>
    .owl-carousel .item{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 50vh;
        min-height: 600px;
        max-height: 600px;
        background-color: #f1f1f1;
        background-position: center;
        background-size: cover;
    }
    .owl-carousel .item:before{
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.3);
    }
    .owl-carousel .item-content{
        position: relative;
        z-index: 1;
        color: #fff;
        text-align: center;
        width: 100%;
    }
    .owl-carousel .item-content h2{
        font-size: 2.8rem;
        line-height: 1.2;
        font-weight: 700;
        margin-bottom: 10px;
    }
    @media screen and (max-width: 768px){
        .owl-carousel .item {
            height: 50vh;
            min-height: 400px;
            max-height: 400px;
        }
        .owl-carousel .item-content h2{
            font-size: 1.8rem;
            line-height: 1.2;
        }
    }
    .owl-dots {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 20px;
        position: absolute;
        bottom: 0;
        padding: 20px 0;
        width: 100%;
    }
</style>

<script>
    function init_owl_carousel() {
        return {
            owl_carousel() {
                $('.owl-carousel').owlCarousel({
                    loop: true,
                    margin: 0,
                    nav: false,
                    dots: true,
                    items: 1,
                    autoplay: true,
                    autoplayTimeout: 4000,
                })
            },
            init() {
                this.owl_carousel()
            }
        }
    }
</script>