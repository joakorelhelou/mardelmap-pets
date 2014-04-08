<!-- Type Selection Modal -->
<div class="modal fade" id="foundLostModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title" id="locationModalTitle">Seleccione el tipo de publicación que desea </h4>
			</div>
			<div class="modal-body">
				<select class="form-control" id="postType">
					<option value="0">Seleccionar</option>
					<option value="1">Mascota Perdida</option>
					<option value="2">Mascota Encontrada/Avistada</option>
					<option value="3">Mascota en Adopcion</option>
					<option value="4">Mascota en Transito</option>
					<option value="5">Mascota en Necesidad Medica</option>
				</select>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">
					Cerrar
				</button>
				<button type="button" class="btn btn-primary" onclick="validateSelect()">
					Enviar
				</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
	function validateSelect() {

		var e = document.getElementById("postType");
		var strUser = e.options[e.selectedIndex].value;

		if (strUser == "0")
			alert("Debe seleccionar el tipo de publicación")
		else {
			document.getElementById('postTypef').value = strUser;
			$('#foundLostModal').modal('hide');
			$('#locationModal').modal('show');
		}
	}

</script>