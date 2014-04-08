		<!-- Location Modal -->
<div class="modal fade" id="locationModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="locationModalTitle">Ubicación aproximada de la Mascota perdida/encontrada</h4>
      </div>
      <div class="modal-body">
        <input id="address" type="text" class="form-control" placeholder="Ingrese dirección aproximada">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="$('#locationModal').modal('hide'); markLocation(document.getElementById('address').value + ' <?php echo MAIN_CITY ?>', 'Ubicacion seleccionada. Haga click en el marcador para continuar.'); ">Enviar Dirección</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->