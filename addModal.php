<div class="modal fade" id="addNew" tabindex="-1"
role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <center> <h4 class="modal-title">Add Contact</h4> </center>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="AddContact.php">
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label">Name: </label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="ContactName">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label">Number:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="PhoneNumber">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label">Mail:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="Mail">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label">Address:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="Address">
                            </div>
                        </div>
                        <div class="modal-footer row justify-content-between">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="
                            fa fa-close"></span> Cancelar</button>
                            <button type="sumbit" name="AddC" class="btn btn-primary" ><span class="
                            fa fa-save"></span>  Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>