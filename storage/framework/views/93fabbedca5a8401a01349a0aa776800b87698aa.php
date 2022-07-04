<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row gutters-tiny">
            <div class="col-sm-4">
                <?php echo e(Form::label('Nombre')); ?>

                <div class="form-group">
                    <?php echo e(Form::text('name', $user->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre'])); ?>

                    <?php echo $errors->first('name', '<div class="invalid-feedback">:message</div>'); ?>

                </div>
            </div>
        </div>

        <div class="box box-info padding-1">
            <div class="box-body">
                <div class="row gutters-tiny">
                    <div class="col-sm-4">
                        <?php echo e(Form::label('Email')); ?>

                        <div class="form-group">
                            <?php echo e(Form::email('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email'])); ?>

                            <?php echo $errors->first('email', '<div class="invalid-feedback">:message</div>'); ?>

                        </div>
                    </div>
                </div>

                <div class="row gutters-tiny">
                    <div class="col-sm-4">
                        <?php echo e(Form::label('password')); ?>

                        <?php echo Form::password('password', array('class' => 'form-control')); ?>

                        <?php echo $errors->first('password', '<div class="invalid-feedback">:message</div>'); ?>

                    </div>
                </div>

                <div class="row gutters-tiny">
                    <div class="col-sm-4">
                        <?php if(['route' => 'user.create']): ?>
                        <?php echo Form::model($user, ['route' => ['user.create', $user], 'method' =>'post']); ?>

                        <?php else: ?>
                        <?php echo Form::model($user, ['route' => ['user.update', $user], 'method' =>'put']); ?>

                        <?php endif; ?>
                        <?php echo e(Form::label('Rol')); ?>

                        <?php echo Form::select('$roles->role_id',$roles,'null',['class'=> 'form-control' , 'placeholder' => 'Seleccione Rol']); ?>

 
                    </div>
                </div>

                <br />
                <div class="box-footer mt20">
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </div><?php /**PATH /srv/http/agenda/resources/views/user/form.blade.php ENDPATH**/ ?>