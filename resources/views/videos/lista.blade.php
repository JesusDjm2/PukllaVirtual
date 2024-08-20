@extends('layouts.padre')
@section('titulo', '- Lista de videos')
@section('contenido')
    <div class="fixed-image-container">
        <img src="{{ asset('img/FIlmadora-Puklla-Virtual-Fondo.webp') }}" alt="Fondo Pukllasunchis" loading="lazy">
        <div class="overlay"></div>
        <div class="centered-content">
            <h2>VIDEOS</h2>
            <h1>ESPP Pukllasunchis</h1>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row mt-4">
            <div class="col-lg-4 mt-4">                
                <div class="custom-sidebar">
                    <h4 class="custom-sidebar-title">Secciones:</h4>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text btn btn-sm btn-primary" id="basic-addon1">Buscar</span>
                        </div>
                        <input type="text" id="search-input" placeholder="" class="form-control form-control-sm"
                            aria-label="Buscar libros por nombre o autor" aria-describedby="basic-addon1">
                    </div>
                    <ul class="custom-sidebar-menu">
                        @foreach ($categorias as $seccion)
                            <li class="custom-sidebar-menu-item">
                                <a href="{{ route('videoscat.show', $seccion->url) }}" class="custom-sidebar-link">
                                    {{ $seccion->nombre }} <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <h2 class="titulo2Puklla mb-5">Últimas publicaciones</h2>
                    @foreach ($videos as $video)
                        <div class="col-lg-6 p-3">
                            @if ($video->youtube)
                                <div class="cardVideos">                                   
                                    <div class="video-thumbnail" style="position: relative; width: 100%; height: 220px;">
                                        <img loading="lazy"
                                            src="https://img.youtube.com/vi/{{ $video->youtube }}/hqdefault.jpg"
                                            alt="Video Thumbnail" style="width: 100%; height: 100%;">
                                        <a href="https://www.youtube.com/watch?v={{ $video->youtube }}" target="_blank"
                                            style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                            <i class="fa-brands fa-youtube" style="color: red; font-size:60px"></i>
                                        </a>
                                    </div>
                                    <h6>{{ $video->nombre }}</h6>
                                    <p>{{ $video->descripcion }}</p>
                                </div>
                            @elseif($video->drive)
                                <div class="cardVideos">                                    
                                    <iframe width="100%" height="220" loading="lazy"
                                        src="https://drive.google.com/file/d/{{ $video->drive }}/preview"
                                        class="embed-responsive-item" allowfullscreen></iframe>
                                        <h6>{{ $video->nombre }}</h6>
                                    <p>{{ $video->descripcion }}</p>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script>
        //Tiperar texto en buscador:
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('search-input');
            const texts = [
                'Videos institucionales...',
                'Metodo montessori de educación en adolescentes...',
                'El docente como educador...'
            ];
            let textIndex = 0;
            let charIndex = 0;

            function typeText() {
                if (charIndex < texts[textIndex].length) {
                    searchInput.placeholder += texts[textIndex].charAt(charIndex);
                    charIndex++;
                    setTimeout(typeText, 100); // Velocidad de tipeo
                } else {
                    setTimeout(eraseText, 2000); // Tiempo antes de borrar el texto
                }
            }

            function eraseText() {
                if (charIndex > 0) {
                    searchInput.placeholder = searchInput.placeholder.slice(0, -1);
                    charIndex--;
                    setTimeout(eraseText, 50); // Velocidad de borrado
                } else {
                    textIndex = (textIndex + 1) % texts.length;
                    setTimeout(typeText, 500); // Tiempo antes de comenzar a tipear nuevamente
                }
            }

            setTimeout(typeText, 500); // Tiempo antes de comenzar la animación
        });

        //Menu lateral secciones:
        document.addEventListener('DOMContentLoaded', function() {
            var toggles = document.querySelectorAll('.custom-section-toggle');
            toggles.forEach(function(toggle) {
                toggle.addEventListener('click', function(e) {
                    e.preventDefault();
                    var icon = this.querySelector('.custom-toggle-icon');
                    var submenu = this.nextElementSibling;
                    submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
                    icon.classList.toggle('rotate');
                });
            });
        });
    </script>
@endsection
