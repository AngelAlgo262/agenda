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
        <label for ="">Permisos</label>
        <div class="form-group">
                        <select name='permission_id'>
                          <option value = "" placeholder = "--Seleccione un permiso--"></option>
                          <?php $__currentLoopData = <?php echo e($permissions); ?>; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permissions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value=<?php echo e($permissions ['id']); ?> ><?php echo e($permissions['name']); ?> </option>                
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </select>
          </div>
          </div>
          </div>

    <br />
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div><?php /**PATH /srv/http/agenda/resources/views/role/form.blade.php ENDPATH**/ ?>