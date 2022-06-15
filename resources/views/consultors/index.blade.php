@extends('layouts.app')

@section('template_title')
    Consultor
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Listado de Consultores') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('consultor.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Nombre</th>
										<th>Departamento</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($consultors as $consultor)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $consultor->nombre }}</td>
											<td>{{ $consultor->departamento }}</td>

                                            <td>
                                                <form action="{{ route('consultor.destroy',$consultor->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('consultor.show',$consultor->id) }}"><i class="fa fa-fw fa-eye"></i> Ver Ficha</a>
                                                    <a class="btn btn-sm btn-warning" href="{{ route('consultor.edit',$consultor->id) }}"><i class="fa fa-fw fa-edit"></i>Modifica</a>
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
                {!! $consultors->links() !!}
            </div>
        </div>
    </div>
@endsection
