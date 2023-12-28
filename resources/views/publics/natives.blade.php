@extends('layouts.app')
@section('content')
<div class="w-full">
    <img class="w-full" src="{{ asset('images/natives/banner-indigenas.jpg') }}" alt="">
</div>
<div class="mt-10 mx-auto px-4">
    <div class="carousel-container relative float-left mr-4 overflow-hidden w-1/2" style="height: 400px;">
        <div class="carousel flex transition duration-300 ease-out">
            <!-- Imágenes del carrusel -->
            <img src="{{ asset('images/comunities/1.JPG') }}" class="carousel-slide" alt="Imagen 1">
            <img src="{{ asset('images/comunities/2.jpeg') }}" class="carousel-slide" alt="Imagen 2">
            <img src="{{ asset('images/comunities/3.jpg') }}" class="carousel-slide" alt="Imagen 3">
            <!-- Más imágenes si es necesario -->
        </div>

        <button id="prev" class="carousel-arrow left-arrow"></button>
        <button id="next" class="carousel-arrow right-arrow right-0"></button>
    </div>
    <div>
        <h1 class="text-[2.5rem] text-center my-6 text-[#0B0B61]">
            Presentación
        </h1>
        <p class="text-xl">Colombia, conocida por su diversidad cultural y natural, es también el hogar de una rica y variada población indígena. Estas comunidades, guardianas de una herencia milenaria, representan una parte vital del mosaico cultural del país. Con más de 102 grupos indígenas reconocidos, cada uno con su propio idioma, tradiciones, y prácticas culturales, Colombia se destaca como un país de inmensa riqueza étnica y cultural. Los pueblos indígenas de Colombia han habitado estas tierras desde tiempos ancestrales, adaptándose a los diversos ecosistemas del país, desde los frondosos bosques amazónicos hasta las altas cumbres andinas. Su conocimiento profundo de la naturaleza, sus prácticas agrícolas, y su respeto por el medio ambiente son un testimonio de una relación armónica y sostenible con la tierra. Estas comunidades han contribuido significativamente a la identidad nacional de Colombia, no solo a través de sus conocimientos tradicionales y prácticas culturales, sino también mediante su arte, su música, y sus cosmovisiones. El legado indígena se refleja en numerosos aspectos de la vida colombiana, desde el arte y la artesanía hasta la medicina tradicional y las festividades. Sin embargo, los pueblos indígenas de Colombia también enfrentan desafíos significativos en la actualidad. La lucha por la preservación de sus tierras, culturas y lenguas en un mundo en constante cambio es una preocupación central. A pesar de estos retos, las comunidades indígenas colombianas continúan defendiendo sus derechos y trabajando por el mantenimiento de sus tradiciones y su modo de vida.</p>

    </div>
</div>
<div>
    <h1 class="text-[2.5rem] text-center my-6 text-[#0B0B61]">
        Estadísticas comunidades
    </h1>
    <div class="grid grid-cols-4 gap-4">
        <div class="flex items-center flex-col">
            <img class="w-[80px]" src="{{ asset('images/natives/icons/nativo-americano_2.gif')}}" alt="">
            <span class="text-[#0B0B61] text-2xl font-bold my-2">{{ App\Models\Community::where('type_community', 1)->count(); }}</span>
            <p class="text-2xl text-[#61A5E4]">No. Consejos</p>
        </div>
        <div class="flex items-center flex-col">
            <img class="w-[80px]" src="{{ asset('images/natives/icons/mapas.gif')}}" alt="">
            <span class="text-[#0B0B61] text-2xl font-bold my-2">
            {{ 
                DB::table('communities')
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
                    ->where('communities.type_community', 1)
                    ->sum('census.number_of_families');
                }}
            </span>
            <p class="text-2xl text-[#61A5E4]">No. Familias</p>
        </div>
        <div class="flex items-center flex-col">
            <img class="w-[80px]" src="{{ asset('images/natives/icons/cabina.gif')}}" alt="">
            <span class="text-[#0B0B61] text-2xl font-bold my-2">
                {{ App\Models\Community::where('type_community', 1)->sum('occupied_area'); }}
            </span>
            <p class="text-2xl text-[#61A5E4]">No. ha ocupadas</p>
        </div>
        <div class="flex items-center flex-col">
            <img class="w-[80px]" src="{{ asset('images/natives/icons/nativo-americano_1.gif')}}" alt="">
            <span class="text-[#0B0B61] text-2xl font-bold my-2">
                {{ App\Models\Community::distinct('municipality_id')->where('type_community', 1)->count('municipality_id'); }}
            </span>
            <p class="text-2xl text-[#61A5E4]">No. municipios habitados</p>
        </div>
    </div>
</div>
<div>
    <h1 class="text-[2.5rem] text-center my-6 text-[#0B0B61]">
        Comunidades
    </h1>
    @livewire('tables.dashboard.communities.get-all-communities-public-table')
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