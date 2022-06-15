@extends('layouts.app')

@section('template_title')
    Tiempo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Listado de Tiempos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tiempo.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
                                        <td>Nombre Consultor</td>
										<th>Horas Acumuladas</th>
										<th>Tiene Derecho</th>
										<th>Horas Consumidas</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tiempos as $tiempo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
                                            <td>{{ $tiempo->nombre_consultor }}</td>
											<td>{{ $tiempo->horas_acumuladas }}</td>
											<td>{{ $tiempo->tiene_derecho }}</td>
											<td>{{ $tiempo->horas_consumidas }}</td>

                                            <td>
                                                <form action="{{ route('tiempo.destroy',$tiempo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tiempo.show',$tiempo->id) }}"><i class="fa fa-fw fa-eye"></i>Ver Ficha</a>
                                                    <a class="btn btn-sm btn-warning" href="{{ route('tiempo.edit',$tiempo->id) }}"><i class="fa fa-fw fa-edit"></i>Modificar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tiempos->links() !!}
            </div>
        </div>
    </div>
@endsection
