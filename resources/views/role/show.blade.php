@extends('layouts.app')

@section('template_title')
    {{ $role->name ?? 'Show Role' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalle de Rol</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('role.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $role->name }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $role->guard_name }}
                        </div>
                    
                        <div class="form-group">
                            <strong>Permisos:</strong>
                            @foreach ($permisos as $permiso)
                                
                                {{$permiso->name}}, 
                                
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
