@extends('layouts.padre')
@section('titulo', '- Página de Inicio')
@section('contenido')
    <div class="fixed-image-container">
        <img src="{{ asset('img/biblioteca-muestra.jpg') }}" alt="Imagen Fija">
        <div class="overlay"></div>
        <div class="centered-content">
            <h2>EESP Pukllasunchis</h2>
            <h1>Sistema Bibliotecario</h1>
        </div>
    </div>
    <div class="container mt-4 contenedorContenido">
        <div class="row cardIndex">
            <div class="col-lg-4">
                <div class="contenedor">
                    <img src="{{ asset('img/min/libros-Pukllasunchis-min.webp') }}" alt="Libros Puklla" class="img-fluid">
                    <h2 class="position-absolute text-center text-white">Libros</h2>
                    <a href="{{ route('libros') }}">Ver lista</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contenedor">
                    <img src="{{ asset('img/min/formacion-continua-pukllasunchis-01.webp') }}" alt="Libros Puklla"
                        class="img-fluid">
                    <h2 class="position-absolute text-center text-white">Videos Institucionales</h2>
                    <a href="">Ver lista</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contenedor">
                    <img src="{{ asset('img/min/videos-otros-Pukllasunchis.webp') }}" alt="Libros Puklla" class="img-fluid">
                    <h2 class="position-absolute text-center text-white">Videos otros</h2>
                    <a href="">Ver lista</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contenedor">
                    <img src="{{ asset('img/min/canciones-Pukllasunchis.webp') }}" alt="Libros Puklla" class="img-fluid">
                    <h2 class="position-absolute text-center text-white">Canciones</h2>
                    <a href="">Ver lista</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contenedor">
                    <img src="{{ asset('img/min/radio-Pukllasunchis.webp') }}" alt="Libros Puklla" class="img-fluid">
                    <h2 class="position-absolute text-center text-white">Sisichakunay</h2>
                    <a href="">Ver lista</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contenedor">
                    <img src="{{ asset('img/min/libros-Pukllasunchis-min.webp') }}" alt="Libros Puklla" class="img-fluid">
                    <h2 class="position-absolute text-center text-white">Varios</h2>
                    <a href="">Ver lista</a>
                </div>
            </div>
        </div>
        <div class="row mb-4 mb-2">
            <div class="col-lg-12">
                <h2 class="titulosDos">
                    Últimas publicaciones Sisichakunay <a href="https://www.facebook.com/Sisichakunaq"
                    class="verMas" target="_blank">→ Ver en FaceBook <i class="fab fa-facebook" style="font-size: 15px"></i></a>
                </h2>
            </div>
            <div class="col-lg-6">
                <iframe
                    src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FSisichakunaq%2Fvideos%2F1151742156064563%2F&show_text=true&width=560&t=0"
                    width="100%" height="430" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                    allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                    allowFullScreen="true"></iframe>
            </div>
            <div class="col-lg-6">
                <iframe
                    src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FSisichakunaq%2Fposts%2Fpfbid02g5iVzi3YiRQzm9HGSDpw6MVYhYyimdEV8Tvka7nvMixaLJWSpSvUhV5KFbJ75pGil&show_text=true&width=500"
                    width="100%" height="430" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                    allowfullscreen="true"
                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mt-4 mb-2">
                <h2 class="titulosDos">Últimas publicaciones Sisichakunay <a href="{{ route('libros') }}"
                    class="verMas">→ Ver en Spotify <i class="fab fa-spotify" style="font-size: 15px"></i> </a></h2>
            </div>
            <div class="col-lg-3 p-3">
                <iframe style="border-radius:12px"
                    src="https://open.spotify.com/embed/episode/2jdkuFtfvjoEDqPryvBMAK?utm_source=generator&theme=0"
                    width="100%" height="352" frameBorder="0" allowfullscreen=""
                    allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                    loading="lazy"></iframe>
            </div>
            <div class="col-lg-3 p-3">
                <iframe style="border-radius:12px"
                    src="https://open.spotify.com/embed/episode/59RAn2Ev1KkZy0dUBTJfKw?utm_source=generator" width="100%"
                    height="352" frameBorder="0" allowfullscreen=""
                    allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                    loading="lazy"></iframe>
            </div>
            <div class="col-lg-3 p-3">
                <iframe style="border-radius:12px"
                    src="https://open.spotify.com/embed/episode/5IJQXlHveuE3iAP0dNvRoW?utm_source=generator&theme=0"
                    width="100%" height="352" frameBorder="0" allowfullscreen=""
                    allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                    loading="lazy"></iframe>
            </div>
            <div class="col-lg-3 p-3">
                <iframe style="border-radius:12px"
                    src="https://open.spotify.com/embed/episode/6qdHD2sbWtUcDtpzZWh6Yb?utm_source=generator"
                    width="100%" height="352" frameBorder="0" allowfullscreen=""
                    allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                    loading="lazy"></iframe>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-12">
                <h2 class="mt-3 mb-4 titulosDos">Últimas publicaciones de libros <a href="{{ route('libros') }}"
                        class="verMas">→ Ver todos los libros</a></h2>
            </div>
            <div class="normalSize">
                <div class="row">
                    @foreach ($libros as $libro)
                        <div class="col-lg-3 mb-4 cardLibros" data-nombre="{{ $libro->nombre }}"
                            data-autor="{{ $libro->autor }}">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class='text-center'>{{ $libro->nombre }}</h5>
                                    <p class="text-center"><i style="font-size: 12px" class="fa fa-user"></i>
                                        {{ $libro->autor }}
                                    </p>
                                    @php
                                        $idDocumento = $libro->identificador;
                                        $urlVistaPrevia = "https://drive.google.com/thumbnail?id={$idDocumento}&sz=w1000";
                                    @endphp
                                    <div class="contenedorLibro">
                                        <div class="contenedorImagen">
                                            <img class="vistaPrevia" src="{{ $urlVistaPrevia }}"
                                                alt="Vista previa del PDF">
                                            <div class="overlay">
                                                <a href="https://drive.google.com/file/d/{{ $libro->identificador }}/preview"
                                                    target="_blank">
                                                    <button class="btnAbrirPDF">Abrir PDF</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="responsive">
                <div class="row">
                    @foreach ($libros->take(5) as $libro)
                        <div class="col-lg-3 mb-4 cardLibros p-3" data-nombre="{{ $libro->nombre }}"
                            data-autor="{{ $libro->autor }}">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class='text-center'>{{ $libro->nombre }}</h5>
                                    <p class="text-center"><i style="font-size: 12px" class="fa fa-user"></i>
                                        {{ $libro->autor }}
                                    </p>
                                    @php
                                        $idDocumento = $libro->identificador;
                                        $urlVistaPrevia = "https://drive.google.com/thumbnail?id={$idDocumento}&sz=w1000";
                                    @endphp
                                    <div class="contenedorLibro">
                                        <div class="contenedorImagen">
                                            <img class="vistaPrevia" src="{{ $urlVistaPrevia }}"
                                                alt="Vista previa del PDF">
                                            <div class="overlay">
                                                <a href="https://drive.google.com/file/d/{{ $libro->identificador }}/preview"
                                                    target="_blank">
                                                    <button class="btnAbrirPDF">Abrir PDF</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="normalSize">
            <div class="row mt-4">
                <div class="col-lg-12">
                    <h2 class="titulosDos">
                        Últimos videos
                    </h2>
                </div>
                <!------Video en Drive--------->
                @foreach ($videos as $video)
                    <div class="col-lg-4 p-3">
                        @if ($video->youtube)
                            <h4>{{ $video->nombre }}</h4>
                            <div class="video-thumbnail" style="position: relative; width: 100%; height: 261px;">
                                <img loading="lazy" src="https://img.youtube.com/vi/{{ $video->youtube }}/hqdefault.jpg"
                                    alt="Video Thumbnail" style="width: 100%; height: 100%;">
                                <a href="https://www.youtube.com/watch?v={{ $video->youtube }}" target="_blank"
                                    style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                    <i class="fa-brands fa-youtube" style="color: red; font-size:60px"></i>
                                </a>
                            </div>
                        @elseif($video->drive)
                            <h4>{{ $video->nombre }}</h4>
                            <iframe width="100%" height="261" loading="lazy"
                                src="https://drive.google.com/file/d/{{ $video->drive }}/preview"
                                class="embed-responsive-item" allowfullscreen></iframe>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
        <div class="responsive">
            <div class="row mt-4">
                <div class="col-lg-12">
                    <h2 class="titulosDos">
                        Últimos videos
                    </h2>
                </div>
                <!------Video en Drive--------->
                @foreach ($videos->take(4) as $video)
                    <div class="col-lg-4 p-3">
                        @if ($video->youtube)
                            <h4>{{ $video->nombre }}</h4>
                            <div class="video-thumbnail" style="position: relative; width: 100%; height: 261px;">
                                <img loading="lazy" src="https://img.youtube.com/vi/{{ $video->youtube }}/hqdefault.jpg"
                                    alt="Video Thumbnail" style="width: 100%; height: 100%;">
                                <a href="https://www.youtube.com/watch?v={{ $video->youtube }}" target="_blank"
                                    style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                    <i class="fa-brands fa-youtube" style="color: red; font-size:60px"></i>
                                </a>
                            </div>
                        @elseif($video->drive)
                            <h4>{{ $video->nombre }}</h4>
                            <iframe width="100%" height="261" loading="lazy"
                                src="https://drive.google.com/file/d/{{ $video->drive }}/preview"
                                class="embed-responsive-item" allowfullscreen></iframe>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>

@endsection
