@extends('layouts.app')

@section('template_title')
Agregar Tiempo
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <span class="card-title">Agregar Tiempo</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('tiempo.index') }}"> Regresar</a>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('tiempo.store') }}" role="form" enctype="multipart/form-data">
                        @csrf

                        @include('tiempos.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection