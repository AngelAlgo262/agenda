<?php $__env->startSection('template_title'); ?>
    <?php echo e($tiempo->name ?? 'Show Tiempo'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalle del tiempo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="<?php echo e(route('tiempo.index')); ?>"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                    
                    <div class="form-group">
                            <strong>Nombre Consultor:</strong>
                            <?php echo e($tiempo->nombre_consultor); ?>

                        </div>

                        <div class="form-group">
                            <strong>Horas Acumuladas:</strong>
                            <?php echo e($tiempo->horas_acumuladas); ?>

                        </div>
                        <div class="form-group">
                            <strong>Tiene Derecho:</strong>
                            <?php echo e($tiempo->tiene_derecho); ?>

                        </div>
                        <div class="form-group">
                            <strong>Horas Consumidas:</strong>
                            <?php echo e($tiempo->horas_consumidas); ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/http/agenda/resources/views/tiempos/show.blade.php ENDPATH**/ ?>