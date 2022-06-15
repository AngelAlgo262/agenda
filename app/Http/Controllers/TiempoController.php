<?php

namespace App\Http\Controllers;

use App\Models\Tiempo;
use App\Models\Consultor;
use Illuminate\Http\Request;

/**
 * Class TiempoController
 * @package App\Http\Controllers
 */
class TiempoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiempos = Tiempo::paginate();

        return view('tiempos.index', compact('tiempos'))
            ->with('i', (request()->input('page', 1) - 1) * $tiempos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tiempo = new Tiempo();
        $consultor = Consultor::pluck('nombre','id');
        $nom_consul = Consultor::pluck('nombre','nombre');
        return view('tiempos.create', compact('tiempo', 'consultor','nom_consul'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tiempo::$rules);

        $tiempo = Tiempo::create($request->all());

        return redirect()->route('tiempo.index')
            ->with('success', 'Tiempo creado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tiempo = Tiempo::find($id);

        return view('tiempos.show', compact('tiempo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tiempo = Tiempo::find($id);
        $consultor = Consultor::pluck('nombre', 'id');
        $nom_consul = Consultor::pluck('nombre','nombre');

        return view('tiempos.edit', compact('tiempo', 'consultor','nom_consul'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tiempo $tiempo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tiempo $tiempo)
    {
        request()->validate(Tiempo::$rules);

        $tiempo->update($request->all());

        return redirect()->route('tiempo.index')
            ->with('success', 'Datos actualizados');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($consultors_nombre)
    {
        $tiempo = Tiempo::find($consultors_nombre)->delete();

        return redirect()->route('tiempo.index')
            ->with('success', 'Tiempo eliminado');
    }
}
