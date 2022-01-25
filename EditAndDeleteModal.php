<!-- Editar --> 
<div class="modal fade" id="edit_<?php echo $row['idPersona']; ?>" tabindex="-1"
role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <center> <h4 class="modal-title">Edit Contact</h4> </center>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="Edit.php?id=<?php echo $row['idPersona']; ?>">
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label">Name: </label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="ContactName" value="<?php echo $row['Nombre']; ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label">Number:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="PhoneNumber" value="<?php echo $row['Telefono']; ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label">Mail:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="Mail" value="<?php echo $row['Correo']; ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label">Address:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="direct" value="<?php echo $row['Direccion']; ?>">
                            </div>
                        </div>
                        <div class="modal-footer row justify-content-between">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="
                            fa fa-close"></span> Cancel</button>
                            <button type="sumbit" name="EditProfile" class="btn btn-success" ><span class="
                            fa fa-check"></span>  Change</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Eliminar -->
