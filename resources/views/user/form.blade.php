<div class="box box-info padding-1">
    <div class="box-body">
        
    <div class="row gutters-tiny">
    <div class="col-sm-4">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $user->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>

    <div class="row gutters-tiny">
    <div class="col-sm-4">
            {{ Form::label('email') }}
            {{ Form::text('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>

    <div class="row gutters-tiny">
    <div class="col-sm-4">
            {{ Form::label('password') }}
            {!! Form::password('password', array('class' => 'form-control')) !!}
            {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>

    <div class="row gutters-tiny">
    <div class="col-sm-4">
            {{ Form::label('Roles') }}
            {!! Form::select('roles[]',$roles,[], array('class' => 'form-control')) !!}
            {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>
    
<br/>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>