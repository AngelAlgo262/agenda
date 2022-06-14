<?php $__env->startSection('template_title'); ?>
    Tiempo
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <?php echo e(__('Listado de Tiempos')); ?>

                            </span>

                             <div class="float-right">
                                <a href="<?php echo e(route('tiempo.create')); ?>" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  <?php echo e(__('Nuevo')); ?>

                                </a>
                              </div>
                        </div>
                    </div>
                    <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success">
                            <p><?php echo e($message); ?></p>
                        </div>
                    <?php endif; ?>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
                                        <td>Nombre Consultor</td>
										<th>Horas Acumuladas</th>
										<th>Tiene Derecho</th>
										<th>Horas Consumidas</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $tiempos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tiempo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(++$i); ?></td>
                                            
                                            <td><?php echo e($tiempo->nombre_consultor); ?></td>
											<td><?php echo e($tiempo->horas_acumuladas); ?></td>
											<td><?php echo e($tiempo->tiene_derecho); ?></td>
											<td><?php echo e($tiempo->horas_consumidas); ?></td>

                                            <td>
                                                <form action="<?php echo e(route('tiempo.destroy',$tiempo->id)); ?>" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="<?php echo e(route('tiempo.show',$tiempo->id)); ?>"><i class="fa fa-fw fa-eye"></i>Ver Ficha</a>
                                                    <a class="btn btn-sm btn-warning" href="<?php echo e(route('tiempo.edit',$tiempo->id)); ?>"><i class="fa fa-fw fa-edit"></i>Modificar</a>
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php echo $tiempos->links(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/http/agenda/resources/views/tiempos/index.blade.php ENDPATH**/ ?>