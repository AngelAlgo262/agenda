<?php

namespace App\Http\Controllers;

use App\Models\Consultor;
use Illuminate\Http\Request;

/**
 * Class ConsultorController
 * @package App\Http\Controllers
 */
class ConsultorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultors = Consultor::paginate();

        return view('consultors.index', compact('consultors'))
            ->with('i', (request()->input('page', 1) - 1) * $consultors->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $consultor = new Consultor();
        return view('consultors.create', compact('consultor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Consultor::$rules);

        $consultor = Consultor::create($request->all());

        return redirect()->route('consultor.index')
            ->with('success', 'Consultor creado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consultor = Consultor::find($id);

        return view('consultors.show', compact('consultor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultor = Consultor::find($id);

        return view('consultors.edit', compact('consultor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Consultor $consultor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consultor $consultor)
    {
        request()->validate(Consultor::$rules);

        $consultor->update($request->all());

        return redirect()->route('consultor.index')
            ->with('success', 'Datos actualizados');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $consultor = Consultor::find($id)->delete();

        return redirect()->route('consultor.index')
            ->with('success', 'Consultor eliminado');
    }
}
