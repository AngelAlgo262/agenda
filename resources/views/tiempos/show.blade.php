@extends('layouts.app')

@section('template_title')
    {{ $tiempo->name ?? 'Show Tiempo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalle del tiempo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tiempo.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                    
                    <div class="form-group">
                            <strong>Nombre Consultor:</strong>
                            {{ $tiempo->nombre_consultor }}
                        </div>

                        <div class="form-group">
                            <strong>Horas Acumuladas:</strong>
                            {{ $tiempo->horas_acumuladas }}
                        </div>
                        <div class="form-group">
                            <strong>Tiene Derecho:</strong>
                            {{ $tiempo->tiene_derecho }}
                        </div>
                        <div class="form-group">
                            <strong>Horas Consumidas:</strong>
                            {{ $tiempo->horas_consumidas }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
