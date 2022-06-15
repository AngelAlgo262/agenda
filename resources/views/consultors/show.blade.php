@extends('layouts.app')

@section('template_title')
    {{ $consultor->name ?? 'Show Consultor' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalle del Consultor</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('consultor.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $consultor->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Departamento:</strong>
                            {{ $consultor->departamento }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
