<?php $__env->startSection('template_title'); ?>
    Update Consultor
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">
    
                <?php if ($__env->exists('partials.errors')) echo $__env->make('partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Actualizar Consultor</span>
                        </div>

                    <div class="float-right">
                            <a class="btn btn-primary" href="<?php echo e(route('consultor.index')); ?>"> Regresar</a>
                    </div>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('consultor.update', $consultor->id)); ?>"  role="form" enctype="multipart/form-data">
                            <?php echo e(method_field('PATCH')); ?>

                            <?php echo csrf_field(); ?>

                            <?php echo $__env->make('consultors.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/http/agenda/resources/views/consultors/edit.blade.php ENDPATH**/ ?>