<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;

class DepartamentoController extends Controller
{
    public function create()
    {
        return view('departamentos.formD');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre_depto' => 'required|string|min:2|max:100',
        ]);

        Departamento::create([
            'nombre_depto' => $validated['nombre_depto'],
        ]);

        return redirect()->back()->with('success', 'Departamento creado correctamente');
    }

    public function index()
    {
        $departamentos = Departamento::all();
        return view('departamentos.tablaD', ['departamentos' => $departamentos]);
    }
}
