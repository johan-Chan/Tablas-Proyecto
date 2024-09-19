<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contrato;
use App\Models\TipoContrato;

class ContratoController extends Controller
{
    public function create()
    {
        $tiposContrato = TipoContrato::all();
        return view('Contratos.formC', ['tiposContrato' => $tiposContrato]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'nullable|date',
            'estado_contrato' => 'required|string|min:2|max:100',
            'periodo_pago' => 'required|string|min:2|max:50',
            'id_tipo_contrato' => 'required|exists:tipo_contrato,id_tipo_contrato',
        ]);

        Contrato::create($validated);

        return redirect()->back()->with('success', 'Contrato creado correctamente');
    }

    public function index()
    {
        $contratos = Contrato::with('tipoContrato')->get();
        return view('Contratos.tablaC', ['contratos' => $contratos]);
    }
}
