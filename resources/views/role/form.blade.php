<div class="box box-info padding-1">
  <div class="box-body">

    <div class="row gutters-tiny">
      <div class="col-sm-4">
        {{ Form::label('Nombre del rol') }}
        <div class="form-group">
          {{ Form::text('name', $role->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
          {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
      </div>
    </div>

    <div class="row gutters-tiny">
      <div class="col-sm-4">
        {{ Form::label('Descripción') }}
        <div class="form-group">
          {{ Form::text('guard_name', $role->guard_name, ['class' => 'form-control' . ($errors->has('guard_name') ? ' is-invalid' : ''), 'placeholder' => 'Descripción']) }}
          {!! $errors->first('guard_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
      </div>
    </div>

    <div class="row gutters-tiny">
      <div class="col-sm-4">
        {{ Form::label('Permisos') }}
        <div class="form-group">
           {{ Form::select('per_name', $permisos,['class' => 'form-control' . ($errors->has('per_name') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione permiso']) }}
           {!! $errors->first('per_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
      </div>
    </div>

    <br />
    <div class="box-footer mt20">
      <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
  </div>