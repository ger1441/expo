<div class="modal" id="modalReserve" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="#" id="formReserve" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title">Reservar Local <span class="localNumber"></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="company">Compañia</label>
                            <input type="text" class="form-control" name="company" id="company" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="RFC">RFC</label>
                            <input type="text" class="form-control" name="rfc" id="RFC">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="start_date">Fecha inicio</label>
                            <input type="date" class="form-control" name="start_date" id="start_date" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="end_date">Fecha fin</label>
                            <input type="date" class="form-control" name="end_date" id="end_date" required>
                        </div>
                        <div class="form-group col-12">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                        <div class="form-group col-12">
                            <label for="description">Descripción</label>
                            <textarea name="description" id="description" class="form-control" required></textarea>
                        </div>
                        <div class="form-group col-12">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="uploadLogo" id="uploadLogo" value="upload">
                                <label class="form-check-label" for="uploadLogo">Cargar logo</label>
                            </div>
                        </div>
                        <div class="form-group col-12 d-none" id="contentLogo">
                            <input type="file" name="logo" id="logo" class="form-control" accept="image/*">
                            <input type="hidden" name="local" id="local">
                        </div>
                        <div class="col-12" id="result"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" id="btnRegister">Aceptar</button>
                </div>
            </form>
        </div>
    </div>
</div>
