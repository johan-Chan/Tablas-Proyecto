<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoContrato;

class TipoContratoController extends Controller
{
    public function create()
    {
        return view('Contratos.formTC');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'tipo_contrato' => 'required|string|min:2|max:100',
        ]);

        TipoContrato::create([
            'tipo_contrato' => $validated['tipo_contrato'],
        ]);

        return redirect()->back()->with('success', 'Tipo de contrato creado correctamente');
    }

    public function index()
    {
        $tiposContrato = TipoContrato::all();
        return view('Contratos.tablaTC', ['tiposContrato' => $tiposContrato]);
    }
}
