<div class="modal" id="modalDetails" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detalles del Local <span id="localNumber"></span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" class="row">
                    <div class="col-12 text-center">
                        <img src="{{asset('storage/companies/logos/logo_wens_sas.jpg')}}" alt="Logo">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="company">Compañia</label>
                        <input type="text" class="form-control" id="company" readonly disabled>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="RFC">RFC</label>
                        <input type="text" class="form-control" id="RFC" readonly disabled>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="start_date">Fecha inicio</label>
                        <input type="text" class="form-control" id="start_date" readonly disabled>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="end_date">Fecha fin</label>
                        <input type="text" class="form-control" id="end_date" readonly disabled>
                    </div>
                    <div class="form-group col-12">
                        <label for="description">Descripción</label>
                        <input type="text" class="form-control" id="description" readonly disabled>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
