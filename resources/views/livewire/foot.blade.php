<div>
    <div class="container-fluid footer">
        <div class="container mt-5">
            <div class="row pt-5 pb-3">
                <div class="col-lg-4">
                    <img src="{{ asset('img/Logo-Pukllasunchis-blanco.png') }}" alt="Logo blanco EESPP Pukllasunchis">
                    <p class="mt-4"><span class="fa fa-map-marker"></span> Calle Siete Diablitos 222, San Blas, Cusco.
                    </p>
                    <p><span class="fa fa-phone"></span> +51 (84) 237918 - 261431 - 243308</p>
                    <p><span class="fa-solid fa-envelope"></span> <a
                            href="mailto:eespp@pukllasunchis.org">eespp@pukllasunchis.org</a></p>
                </div>
                <div class="col-lg-4">
                    <h3>Institución</h3>
                    <ul>
                        <li>EESP Pukllasunchis</li>
                        <li>Información Institucional</li>
                        <li>Repositorio</li>
                        <li>Bolsa de trabajo</li>
                        <li>Radio en la escuela</li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h3>Sociales</h3>
                    <ul class="listaSociales">
                        <li><a href="https://www.facebook.com/eesp.pukllasunchis" target='_blank'><i
                                    class="fa-brands fa-facebook-f social"></i></a></li>
                        <li><a href="https://www.instagram.com/eesp.pukllasunchis/"><i
                                    class="fa-brands fa-instagram social" target='_blank'></i></a></li>
                        <li><a href="https://www.tiktok.com/@eesp.pukllasunchis?is_from_webapp=1&sender_device=pc"><i
                                    class="fa-brands fa-tiktok social" target='_blank'></i></a></li>
                        <li><a href="https://www.youtube.com/@eesp.pukllasunchis"><i class="fa-brands fa-youtube social"
                                    target='_blank'></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-12 mt-3 pt-4" style="border-top:1px solid #ffffff52">
                    <p class="text-center"> 
                     <small>   EESP Pukllasunchis &copy; {{ date('Y') }} | Todos los derechos
                        reservados | Hecho por <a href="https://www.facebook.com/DjmWebMaster" target="_blank"
                            rel="nofollow" class="text-info">DJM2</small>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function() {
            $('.nav-link.search').click(function(e) {
                e.preventDefault();
                var searchInput = $(this).closest('.navbar-nav').find('.search-input');
                searchInput.show('slow');
                var icons = $(this).closest('.navbar-nav').find('.icon');
                icons.hide('slow');

            });

            $('.close-search').click(function(e) {
                e.preventDefault();
                var searchInput = $(this).closest('.search-input');
                searchInput.hide('slow');
                var icons = $(this).closest('.navbar-nav').find('.icon');
                icons.show('slow');
            });
        });
    </script>
</div>
