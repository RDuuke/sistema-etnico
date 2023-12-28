@extends('layouts.app')
@section('content')
<div class="mx-6 py-6 sm:px-6 lg:px-10">
    <div class="flex justify-center">
        <a href="{{ route('afrocolombianos') }}">
            <img class="logo-circle" src="{{ asset('images/home/afros.png') }}" alt="">
        </a>
        <a href="{{ route('natives') }}">
            <img class="logo-circle" height="150" src="{{ asset('images/home/indigena.png') }}" alt="">
        </a>
    </div>
    <p class="my-8">
        Ut commodo massa vel justo volutpat, sit amet pretium risus tempus. Suspendisse nisi tellus, varius tristique ante quis, viverra auctor orci. Donec ultrices ante at leo tincidunt, quis tristique nisi aliquet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque mi lorem, tristique id erat congue, aliquet congue odio. Ut ligula nibh, ultrices nec nisi non, dictum vestibulum massa. Vivamus non convallis leo, a dapibus nibh. Nullam consectetur elit vitae erat rhoncus, in viverra ligula sodales. Sed at molestie ligula.
    </p>
    <div class="cards-container">
        <a href="https://www.corantioquia.gov.co/capitulo-etnico-pgar-2020-2031/" class="card-wrapper" target="_blank">
            <div class="card front-face" style="background-image: url({{ asset('images/home/card5.png') }});">
                <div class="text-overlay">Capítulo Etnico</div>
            </div>
            <div class="card back-face">
                <img src="{{ asset('images/home/capituloEtnico.png') }}" alt="Información sobre Capítulo Etnico" class="back-face-img" />
                <div class="info">
                    <div class="title">Capítulo Étnico</div>
                    <p>Modelo de coordinación entre los consejos comunitarios, sus autoridades y la Corporación Autónoma Regional del Centro de Antioquia</p>
                </div>
            </div>
        </a>
        <a href="https://www.youtube.com/@CORANTIOQUIAOFICIAL" class="card-wrapper" target="_blank">
            <div class="card front-face" style="background-image: url({{ asset('images/home/card4.png') }});">
                <div class="text-overlay">Multimedia</div>
            </div>
            <div class="card back-face">
                <img src="{{ asset('images/home/logo2.png') }}" alt="Información sobre Capítulo Etnico" class="back-face-img" />
                <div class="info">
                    <div class="title">Multimedia</div>
                    <p>
                        <b>
                            Descubre la Riqueza Cultural de las Comunidades Étnicas
                        Indígenas y Afrocolombianas.
                        </b>
                        <br />
                        Explora este fascinante mundo a través de nuestra
                        selección especial de videos
                    </p>
                </div>
            </div>
        </a>
        <a href="https://www.corantioquia.gov.co/educacion-ambiental/" class="card-wrapper" target="_blank">
            <div class="card front-face" style="background-image: url({{ asset('images/home/card1.png') }});">
                <div class="text-overlay">Educación</div>
            </div>
            <div class="card back-face">
                <img src="{{ asset('images/home/logo3.png') }}" alt="Información sobre Capítulo Etnico" class="back-face-img" />
                <div class="info">
                    <div class="title">Educación</div>
                    <p>
                        <b>
                            Únete a la Aventura de Aprender y Proteger Nuestro Planeta.

                        </b>
                        <br />
                        Descubre cómo puedes hacer la diferencia con nuestra serie
                        educativa
                    </p>
                </div>
            </div>
        </a>
</div>
</div>
@endsection