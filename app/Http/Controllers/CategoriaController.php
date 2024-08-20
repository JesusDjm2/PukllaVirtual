<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Seccion;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        return view('libros.categorias.index', compact('categorias'));
    }

    // Mostrar el formulario para crear una nueva categoría
    public function create()
    {
        $secciones = Seccion::all(); // Asumiendo que necesitas secciones para un dropdown
        return view('libros.categorias.create', compact('secciones'));
    }

    // Almacenar una nueva categoría en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'url' => 'required|string|max:255',
            'seccion_id' => 'required|exists:seccions,id',
        ]);

        Categoria::create($request->all());

        return redirect()->route('categorias.index')->with('success', 'Categoría creada exitosamente.');
    }

    // Mostrar una categoría específica
    public function show($url)
    {
        $secciones = Seccion::all();
        $categoria = Categoria::where('url', $url)->firstOrFail();
        $libros = $categoria->libros;
        return view('libros.categorias.show', compact('categoria', 'secciones', 'libros'));
    }

    // Mostrar el formulario para editar una categoría existente
    public function edit($id)
    {
        $categoria = Categoria::findOrFail($id);
        $secciones = Seccion::all(); // Asumiendo que necesitas secciones para un dropdown
        return view('libros.categorias.edit', compact('categoria', 'secciones'));
    }

    // Actualizar una categoría existente en la base de datos
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'url' => 'required|string|max:255',
            'seccion_id' => 'required|exists:seccions,id',
        ]);

        $categoria = Categoria::findOrFail($id);
        $categoria->update($request->all());

        return redirect()->route('categorias.index')->with('success', 'Categoría actualizada exitosamente.');
    }

    // Eliminar una categoría existente
    public function destroy($id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();

        return redirect()->route('categorias.index')->with('success', 'Categoría eliminada exitosamente.');
    }
}
