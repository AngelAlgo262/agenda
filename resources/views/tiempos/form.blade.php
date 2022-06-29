<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row gutters-tiny">
            <div class="col-sm-4">
                {{ Form::label('consultors_id') }}
                <div class="form-group">
                    {{ Form::select('consultors_id',$consultor, $tiempo->consultors_id, ['class' => 'form-control' . ($errors->has('consultors_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione Consultor']) }}
                    {!! $errors->first('consultors_id', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>

        <div class="row gutters-tiny">
            <div class="col-sm-4">
                {{ Form::label('Nombre_consultor') }}
                <div class="form-group">
                    {{ Form::select('nombre_consultor',$nom_consul, $tiempo->nombre_consultor, ['class' => 'form-control' . ($errors->has('nombre_consultor') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione Nombre']) }}
                    {!! $errors->first('nombre_consultor', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>


        <div class="row  gutters-tiny">
            <div class="col-sm-4">
                <label>Horas acumuladas</label>
                <div class="form-group">
                    <input type="text" class="form-control" name="horas_acumuladas" id="horas_acumuladas" value="" />
                    {!! $errors->first('horas_acumuladas', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>

        <div class="row  gutters-tiny">
            <div class="col-sm-4">
                <label>Tiene Derecho</label>
                <div class="form-group">
                    <input type="text" class="form-control" name="tiene_derecho" id="tiene_derecho" value="" />
                </div>
            </div>
        </div>

        <div class="row  gutters-tiny">
            <div class="col-sm-4">
                <label>Horas Consumidas</label>
                <div class="form-group">
                    <input type="text" class="form-control" name="horas_consumidas" id="horas_consumidas" value="" />
                </div>
            </div>
        </div>

    </div>
    <br />
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-success">Guardar</button>
    </div>
</div>


<script>
    $(function() {

        $(document).on('change', '#horas_acumuladas', function() {
            $('#tiene_derecho').val('').trigger('change');
            let horasacum = $('#horas_acumuladas').val();
            if (typeof horasacum !== 'undefined' && horasacum >= 10) {
                $('#tiene_derecho').val('SI').trigger('change');
            } else {
                $('#tiene_derecho').val('NO').trigger('change');
            }
        });
    });
    s