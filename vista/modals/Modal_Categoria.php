<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!--<div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nueva Categoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>-->
            <div class="modal-body">
                <form id="form-insert">
                    <div class="form-group">
                        <label for="Nombre Categoria">Nombre categoria</label>
                        <input type="text" class="form-control" id="C_nombre" placeholder="" name="C_nombre">
                    </div>
                    <div class="form-group">
                        <label for="Descripcion Categoria">Descripcion categoria</label>
                        <textarea class="form-control" id="C_descripcion" rows="3" id="C_descripcion"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="Estado Categoria">Estado categoria</label>
                        <select class="form-control" id="C_estado" rows="3" name="C_estado">
                            <option value="Activa">Activa</option>
                            <option value="Inactiva">Inactiva</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-success" id="btnCrearCategoria">Guardar</button>
            </div>
        </div>
    </div>
</div>