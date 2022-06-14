<?php $__env->startSection('content'); ?>

<div class="container">
    <div id="agenda"></div>

</div>

<!-- Modal -->
<div class="modal fade" id="evento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Datos del evento</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" id="FormularioEventos">
<!--Crea token -->
        <?php echo csrf_field(); ?>


        <div class="form-group d-none">
          <label for="id">id:</label>
          <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
            <div class="form-group">
              <label for="Titulo">Título</label>
              <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Escibe el título del evento">
              <small id="helpId" class="form-text text-muted"></small>
            </div>

            <div class="form-group">
              <label for="Descripcion">Descripción</label>
              <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
            </div>

            <div class="form-group d-none">
              <label for="start">start</label>
              <input type="date" class="form-control" name="start" id="start" aria-describedby="helpId" placeholder="">
              <small id="helpId" class="form-text text-muted">Help text</small>
            </div>

            <div class="form-group d-none">
              <label for="end">end</label>
              <input type="date" class="form-control" name="end" id="end" aria-describedby="helpId" placeholder="">
              <small id="helpId" class="form-text text-muted">Help text</small>
            </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="btnGuardar">Guardar</button>
        <button type="button" class="btn btn-warning" id="btnModificar">Modificar</button>
        <button type="button" class="btn btn-danger" id="btnEliminar">Eliminar</button>

        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/http/agenda/resources/views/evento/index.blade.php ENDPATH**/ ?>