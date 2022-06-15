@extends('layouts.app')

@section('template_title')
    Update Tiempo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Editar Tiempo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('consultor.index') }}"> Regresar</a>
                    </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tiempo.update', $tiempo->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('tiempos.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
