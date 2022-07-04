<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row gutters-tiny">
            <div class="col-sm-4">
                {{ Form::label('Nombre') }}
                <div class="form-group">
                    {{ Form::text('name', $user->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                    {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>

        <div class="box box-info padding-1">
            <div class="box-body">
                <div class="row gutters-tiny">
                    <div class="col-sm-4">
                        {{ Form::label('Email') }}
                        <div class="form-group">
                            {{ Form::email('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
                            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
                        </div>
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
                        @if (['route' => 'user.create'])
                        {!! Form::model($user, ['route' => ['user.create', $user], 'method' =>'post'])!!}
                        @else
                        {!! Form::model($user, ['route' => ['user.update', $user], 'method' =>'put'])!!}
                        @endif
                        {{ Form::label('Rol') }}
                        {!! Form::select('$roles->role_id',$roles,'null',['class'=> 'form-control' , 'placeholder' => 'Seleccione Rol']) !!}
 
                    </div>
                </div>

                <br />
                <div class="box-footer mt20">
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </div>