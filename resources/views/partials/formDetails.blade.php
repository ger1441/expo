<div class="modal" id="modalDetails" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detalles del Local <span class="localNumber"></span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" class="row">
                    <div class="col-12 text-center" id="contentImage">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="detailCompany">Compañia</label>
                        <input type="text" class="form-control" id="detailCompany" readonly disabled>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="detailRFC">RFC</label>
                        <input type="text" class="form-control" id="detailRFC" readonly disabled>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="detailStartDate">Fecha inicio</label>
                        <input type="text" class="form-control" id="detailStartDate" readonly disabled>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="detailEndDate">Fecha fin</label>
                        <input type="text" class="form-control" id="detailEndDate" readonly disabled>
                    </div>
                    <div class="form-group col-12">
                        <label for="detailDescription">Descripción</label>
                        <textarea class="form-control" id="detailDescription" readonly disabled></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
