<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            <div class="col-sm-4">
                {{ Form::label('nombre') }}
                <div class="form-group">
                    {{ Form::text('nombre', $consultor->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                    {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-4">
                {{ Form::label('departamento') }}
                {{ Form::text('departamento', $consultor->departamento, ['class' => 'form-control' . ($errors->has('departamento') ? ' is-invalid' : ''), 'placeholder' => 'Departamento']) }}
                {!! $errors->first('departamento', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
    </div>

</div>
<div class="box-footer mt20">
    <br />
    <button type="submit" class="btn btn-success">Guardar</button>
</div>
</div>