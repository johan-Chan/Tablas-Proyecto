<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudio;

class EstudioController extends Controller
{
    public function create()
    {
        return view('estudios.form');
    }

    public function store(Request $request)
    {
        $validados = $request->validate([
            'institucion' => 'required|string|min:2|max:100',
            'año_inicio' => 'required|date',
            'año_fin' => 'nullable|date',
            'titulo' => 'required|string|min:2|max:100',
            'nivel_estudio' => 'required|string|min:2|max:50',
        ]);

        Estudio::create([
            'institucion' => $validados['institucion'],
            'año_inicio' => $validados['año_inicio'],
            'año_fin' => $validados['año_fin'],
            'titulo' => $validados['titulo'],
            'nivel_estudio' => $validados['nivel_estudio'],
        ]);

        return redirect()->back()->with('success', 'Estudio creado correctamente');
    }

    public function index()
    {
        $estudios = Estudio::all();
        return view('estudios.tablaE', ['estudios' => $estudios]);
    }
}
