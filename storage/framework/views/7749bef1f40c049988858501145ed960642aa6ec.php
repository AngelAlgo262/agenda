<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            <div class="col-sm-4">
                <?php echo e(Form::label('nombre')); ?>

                <div class="form-group">
                    <?php echo e(Form::text('nombre', $consultor->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre'])); ?>

                    <?php echo $errors->first('nombre', '<div class="invalid-feedback">:message</div>'); ?>

                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-4">
                <?php echo e(Form::label('departamento')); ?>

                <?php echo e(Form::text('departamento', $consultor->departamento, ['class' => 'form-control' . ($errors->has('departamento') ? ' is-invalid' : ''), 'placeholder' => 'Departamento'])); ?>

                <?php echo $errors->first('departamento', '<div class="invalid-feedback">:message</div>'); ?>

            </div>
        </div>
    </div>

</div>
<div class="box-footer mt20">
    <br />
    <button type="submit" class="btn btn-success">Guardar</button>
</div>
</div><?php /**PATH /srv/http/agenda/resources/views/consultors/form.blade.php ENDPATH**/ ?>