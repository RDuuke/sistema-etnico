@extends('layouts.app')
@section('content')
<div class="w-full">
    <img class="w-full" src="{{ asset('images/afrocolombianos/banner-afrocolombianos.jpg') }}" alt="">
</div>
<div class="mt-10 mx-auto px-4">
    <div class="carousel-container relative float-left mr-4 overflow-hidden w-1/2" style="height: 400px;">
        <div class="carousel flex transition duration-300 ease-out">
            <!-- Imágenes del carrusel -->
            <img src="{{ asset('images/comunities/4.JPG') }}" class="carousel-slide" alt="Imagen 1">
            <img src="{{ asset('images/comunities/5.JPG') }}" class="carousel-slide" alt="Imagen 2">
            <img src="{{ asset('images/comunities/6.JPG') }}" class="carousel-slide" alt="Imagen 3">
            <!-- Más imágenes si es necesario -->
        </div>

        <!-- Botones de control -->
        <button id="prev" class="carousel-arrow left-arrow"></button>
        <button id="next" class="carousel-arrow right-arrow right-0"></button>
    </div>
    <div>
        <h1 class="text-[2.5rem] text-center my-6 text-[#0B0B61]">
            Presentación
        </h1>
        <p class="text-xl">En el corazón de Colombia, entre la exuberante vegetación de sus paisajes y el ritmo contagioso de su música, reside una comunidad con una historia rica y una cultura vibrante: la comunidad afrocolombiana. Este grupo, descendiente de los africanos traídos a Colombia durante el periodo colonial, ha jugado un papel fundamental en la formación de la identidad nacional, enriqueciendo el país con su diversidad cultural, musical, gastronómica y artística. La influencia afrocolombiana se extiende a lo largo y ancho del país, dejando huellas imborrables en aspectos tan variados como la gastronomía, donde ingredientes y técnicas africanas se han fusionado con los sabores locales para crear platos únicos. En la música, ritmos como la cumbia y el vallenato, que hoy son símbolos de la identidad colombiana, tienen raíces profundas en las tradiciones africanas. Además, la comunidad afrocolombiana ha sido un pilar en la lucha por los derechos civiles y la igualdad, enfrentando desafíos históricos y actuales con una fortaleza y resiliencia admirables. Su contribución al desarrollo social, económico y político de Colombia es indiscutible, a pesar de las adversidades y la marginalización que han enfrentado a lo largo de los años. Este texto busca explorar y celebrar la riqueza de la comunidad afrocolombiana, reconociendo su importancia en la construcción de una Colombia diversa y llena de color. A través de un viaje por su historia, sus tradiciones, y sus logros, se pretende dar un merecido reconocimiento a esta comunidad vital en el tejido social y cultural de Colombia. </p>
    </div>
</div>
<div>
    <h1 class="text-[2.5rem] text-center my-6 text-[#0B0B61]">
        Estadísticas comunidades
    </h1>
    <div class="grid grid-cols-4 gap-4">
        <div class="flex items-center flex-col">
            <img class="w-[80px]" src="{{ asset('images/natives/icons/nativo-americano_2.gif')}}" alt="">
            <span class="text-[#0B0B61] text-2xl font-bold my-2">
            {{ App\Models\Community::where('type_community', 2)->count(); }}
            </span>
            <p class="text-2xl text-[#61A5E4]">No. Consejos</p>
        </div>
        <div class="flex items-center flex-col">
            <img class="w-[80px]" src="{{ asset('images/natives/icons/mapas.gif')}}" alt="">
            <span class="text-[#0B0B61] text-2xl font-bold my-2">
             {{ DB::table('communities')
                    ->join('census', 'communities.id', '=', 'census.community_id')
                    ->joinSub(
                        DB::table('census')
                            ->select('community_id', DB::raw('MAX(year) as latest_date'))
                            ->groupBy('community_id'),
                        'latest_census',
                        function ($join) {
                            $join->on('census.community_id', '=', 'latest_census.community_id')
                                 ->on('census.year', '=', 'latest_census.latest_date');
                        }
                    )
                    ->where('communities.type_community', 2)
                    ->sum('census.number_of_families'); }}
            </span>
            <p class="text-2xl text-[#61A5E4]">No. Familias</p>
        </div>
        <div class="flex items-center flex-col">
            <img class="w-[80px]" src="{{ asset('images/natives/icons/cabina.gif')}}" alt="">
            <span class="text-[#0B0B61] text-2xl font-bold my-2">
                {{ App\Models\Community::where('type_community', 2)->sum('occupied_area'); }}
            </span>
            <p class="text-2xl text-[#61A5E4]">No. ha ocupadas</p>
        </div>
        <div class="flex items-center flex-col">
            <img class="w-[80px]" src="{{ asset('images/natives/icons/nativo-americano_1.gif')}}" alt="">
            <span class="text-[#0B0B61] text-2xl font-bold my-2">
                {{ App\Models\Community::distinct('municipality_id')->where('type_community', 2)->count('municipality_id'); }}
            </span>
            <p class="text-2xl text-[#61A5E4]">No. municipios habitados</p>
        </div>
    </div>
</div>
<div>
    <h1 class="text-[2.5rem] text-center my-6 text-[#0B0B61]">
        Comunidades
    </h1>
    @livewire('tables.dashboard.communities.get-all-communities-public-table', ['type_community' => 2])
</div>
@endsection

@stack('scripts')
@stack('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.querySelector('.carousel');
            const carouselContainer = document.querySelector('.carousel-container');
            let currentIndex = 0;
            let slideWidth;
            const slides = carousel.querySelectorAll('img').length;

            function updateSlideWidth() {
                slideWidth = carouselContainer.offsetWidth; // Ancho dinámico del contenedor
                updateCarousel();
            }

            window.addEventListener('resize', updateSlideWidth); // Actualizar en cambio de tamaño
            updateSlideWidth(); // Inicialización

            document.getElementById('next').addEventListener('click', function() {
                currentIndex = (currentIndex + 1) % slides;
                updateCarousel();
            });

            document.getElementById('prev').addEventListener('click', function() {
                currentIndex = (currentIndex - 1 + slides) % slides;
                updateCarousel();
            });

            function updateCarousel() {
                carousel.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
            }
        });


    </script>