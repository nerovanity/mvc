
<div class="modal fade" id="modalUserForm">
    <div class="modal-dialog">
        <div class="modal-content"> 
            <div class="modal-header">
                <h4 class="modal-title">Produit</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div> 
            <div class="modal-body">
                <form class="" action="" id="produitForm" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="edit_mode" id="edit_mode" value="0" readonly>
                    <input type="hidden" name="id" id="id" value="" readonly>
                    <div class="container">
                        <label for="designation" class="">Designation (*)</label>
                        <input type="text" class="form-control" name="designation" id="designation" required>
                    </div>
                    <div class="container">
                        <label for="prix" class="">Prix (*)</label>
                        <input type="text" class="form-control" name="prix" id="prix" required>
                    </div>
                    <div class="container">
                        <label for="photo" class="">Photo (*)</label>
                        <input type="file" class="form-control" name="photo" id="photo" required>
                    </div>
                    <div class="container">
                        <label for="id_categorie" class="">ID_categorie (*)</label>
                        <select class="form-control" name="id_categorie" id="id_categorie" required>
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="container">
                        <label for="id_commercial" class="">ID_commercial (*)</label>
                        <select class="form-control" name="id_commercial" id="id_commercial" required>
                            <option value=""></option>
                        </select>
                    </div>
                </form>
                <div class="alert alert-danger alert-dismissible fade show" role="alert" style="display:none;">
                    <p>Error</p>
                    <button type="button" class="close" aria-label="Close" onclick="$('.alert').hide()">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="User.save(this);">Save</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
