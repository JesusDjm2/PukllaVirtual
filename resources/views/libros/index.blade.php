@extends('layouts.app')
@section('titulo', 'Libros')
@section('contenido')
    <div class="row">
        <div class="col-md-12">
            <h3>Libros
                <a href="{{ route('libros.create') }}" class="btn btn-info btn-sm float-right">Agregar nuevo Libro</a>
            </h3>

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <input type="text" id="search" class="form-control form-control-sm mt-3" placeholder="Buscar libro...">
            <div class="table-responsive">
                <table class="table table-hover mt-4">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Categorias</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="tablaLibros">
                        @php $counter = 1; @endphp
                        @foreach ($libros as $libro)
                            <tr>
                                <td>{{ $counter }}</td>
                                <td>{{ $libro->nombre }}</td>
                                <td>
                                    <ul>
                                        @foreach ($libro->categorias as $categoria)
                                            <li>
                                                {{ $categoria->nombre }}
                                                <small>&nbsp;
                                                    <i class="fa fa-angle-right font-weight-bold text-info"></i>
                                                    <i class="fa fa-angle-right font-weight-bold text-info"></i>
                                                </small> &nbsp;
                                                {{ $categoria->seccion->nombre }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td>
                                    <a href="{{ route('libros.show', $libro->id) }}" class="btn btn-sm btn-info"><i
                                            class="fa fa-eye"></i></a>
                                    <a href="{{ route('libros.edit', $libro->id) }}" class="btn btn-sm btn-warning"><i
                                            class="fa fa-edit"></i></a>
                                    <button type="button" class="btn btn-sm btn-danger"
                                        onclick="confirmDelete('{{ route('libros.destroy', $libro->id) }}', '{{ $libro->nombre }}')">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            @php $counter++; @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirmar Eliminación</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <p>¿Estás seguro de que deseas eliminar este Libro?
                        <span><p class="text-primary">'<strong id="libroNombre"></strong>'</p></span>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Cancelar</button>
                    <form id="deleteForm" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function confirmDelete(url, nombreLibro) {
            $('#deleteModal').modal('show');
            document.getElementById('deleteForm').action = url;
            document.getElementById('libroNombre').textContent = nombreLibro;
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('search');
            const tablaLibros = document.getElementById('tablaLibros');

            searchInput.addEventListener('input', function() {
                const searchTerm = searchInput.value.toLowerCase();

                const libros = @json($libros); // Convierte los libros de PHP a JSON

                // Función para remover tildes y caracteres especiales
                function removeAccents(str) {
                    return str.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
                }

                // Filtrar los libros que coincidan con el término de búsqueda ignorando tildes
                const filteredLibros = libros.filter(libro => {
                    const nombreSinTildes = removeAccents(libro.nombre.toLowerCase());
                    return nombreSinTildes.includes(removeAccents(searchTerm));
                });

                // Mostrar los libros filtrados en la tabla
                renderLibros(filteredLibros);
            });

            function renderLibros(libros) {
                tablaLibros.innerHTML = ''; // Limpiar contenido actual de la tabla
                let counter = 1;

                libros.forEach(libro => {
                    const categoriasHTML = libro.categorias.map(categoria => `
                        <li>
                            ${categoria.nombre}
                            <small>&nbsp;
                                <i class="fa fa-angle-right font-weight-bold text-info"></i>
                                <i class="fa fa-angle-right font-weight-bold text-info"></i>
                            </small> &nbsp;
                            ${categoria.seccion.nombre}
                        </li>
                    `).join('');

                    const rowHTML = `
                        <tr>
                            <td>${counter}</td>
                            <td>${libro.nombre}</td>
                            <td>
                                <ul>${categoriasHTML}</ul>
                            </td>
                            <td>
                                <a href="{{ route('libros.show', '__libro_id__') }}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                <a href="{{ route('libros.edit', '__libro_id__') }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                <button type="button" class="btn btn-sm btn-danger" onclick="confirmDelete('{{ route('libros.destroy', '__libro_id__') }}')"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                    `;

                    // Reemplazar placeholders en los enlaces de acciones con el ID real del libro
                    const rowHTMLWithIds = rowHTML
                        .replace(/__libro_id__/g, libro.id);

                    tablaLibros.innerHTML += rowHTMLWithIds;
                    counter++;
                });
            }
        });
    </script>
@endsection
