<div class="box box-info padding-1">
  <div class="box-body">

    <div class="row gutters-tiny">
      <div class="col-sm-4">
        <?php echo e(Form::label('Nombre del rol')); ?>

        <div class="form-group">
          <?php echo e(Form::text('name', $role->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre'])); ?>

          <?php echo $errors->first('name', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
      </div>
    </div>

    <div class="row gutters-tiny">
      <div class="col-sm-4">
        <?php echo e(Form::label('Descripción')); ?>

        <div class="form-group">
          <?php echo e(Form::text('guard_name', $role->guard_name, ['class' => 'form-control' . ($errors->has('guard_name') ? ' is-invalid' : ''), 'placeholder' => 'Descripción'])); ?>

          <?php echo $errors->first('guard_name', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
      </div>
    </div>

    <div class="row gutters-tiny">
      <div class="col-sm-4">
        <?php echo e(Form::label('Permisos')); ?>

        <div class="form-group">
           <?php echo e(Form::select('per_name', $permisos,['class' => 'form-control' . ($errors->has('per_name') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione permiso'])); ?>

           <?php echo $errors->first('per_name', '<div class="invalid-feedback">:message</div>'); ?>

        </div>
      </div>
    </div>

    <br />
    <div class="box-footer mt20">
      <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
  </div><?php /**PATH /srv/http/agenda/resources/views/role/form.blade.php ENDPATH**/ ?>