<div>
    <nav class="navbar navbar-expand-lg fixed-top menuPuklla">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('img/logo-iesp-pukllasunchis.png') }}"
                    alt="Logo" class="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('libros') }}">Biblioteca</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('videos') }}">Videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cancionesPuklla') }}">Canciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sisichakunay</a>
                    </li>
                </ul>
                <ul class="navbar-nav m-2 mt-4 d-flex flex-row flex-wrap justify-content-between position-relative">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fab fa-facebook-f icon"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fab fa-twitter icon"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fab fa-instagram icon"></i></a>
                    </li>
                    <li class="nav-item">
                        @if (Auth::check() && Auth::user()->hasRole('alumno'))
                            <div class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link icon" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-user"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                            <!------- Redireccion a administradores -------->
                        @elseif (Auth::check() && Auth::user()->hasRole('biblioteca'))
                            <a class="nav-link icon" href="{{ route('bibliotecario') }}">
                                <i class="fas fa-user"></i>
                            </a>
                        @elseif (Auth::check() && Auth::user()->hasRole('videos'))
                            <a class="nav-link icon" href="{{ route('adminVideos') }}">
                                <i class="fas fa-user"></i>
                            </a>
                        @elseif (Auth::check() && Auth::user()->hasRole('audios'))
                            <a class="nav-link icon" href="{{ route('adminCanciones') }}">
                                <i class="fas fa-user"></i>
                            </a>
                        @elseif (Auth::check() && Auth::user()->hasRole('sisicha'))
                            <a class="nav-link icon" href="{{ route('adminSisicha') }}">
                                <i class="fas fa-user"></i>
                            </a>
                        @else
                            <a class="nav-link icon" href="{{ route('home') }}">
                                <i class="fas fa-user"></i>
                            </a>
                        @endif
                    </li>

                    <li>
                        <a class="nav-link search icon" href="#">
                            <i class="fas fa-search"></i>
                        </a>
                    </li>
                    <li class="nav-item searchButtom">
                        <form action="{{ route('busqueda') }}" method="GET" class="search-form">
                            <div class="search-input" style="display: none;">
                                <div class="input-group">
                                    <input type="text" name="query" class="form-control form-control-sm"
                                        placeholder="Buscar..." aria-label="Buscar..." aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-sm btn-outline-secondary close-search" type="button"><i
                                                class="fas fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<script>
    $(document).ready(function() {
        // Mostrar/ocultar barra de búsqueda
        $('.searchButtom').click(function() {
            $('.search-input').toggle();
        });

        // Cerrar la barra de búsqueda
        $('.close-search').click(function() {
            $('.search-input').hide();
        });

        // Enviar el formulario al presionar Enter en el campo de búsqueda
        $('.search-form').submit(function(event) {
            event.preventDefault(); // Evitar el envío normal del formulario

            var query = $(this).find('input[name="query"]').val().trim();

            if (query.length >= 3) {
                window.location.href = "{{ route('busqueda') }}?query=" + query;
            }
        });
    });
</script>
