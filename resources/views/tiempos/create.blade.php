@extends('layouts.app')

@section('template_title')
    Agregar Tiempo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Agregar Tiempo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tiempo.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('tiempos.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
