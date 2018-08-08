<form method="POST" v-on:submit.prevent="createKeep">
  <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            <h4 class="modal-title">Crear</h4>
        </div>
        <div class="modal-body">
            <label for="keep">Nueva Tarea</label>
            <input type="text" name="keep" class="form-control" v-model="newKeep">
            <span v-for="error in errors" class="text-danger">@{{ error }}</span>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Guardar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>
</form>