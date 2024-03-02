
<div class="modal fade" id="modalCategorieForm"> 
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Categorie</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form class="" action="" id="categorieForm" method="post">
                    <input type="hidden" name="edit_mode" id="edit_mode" value="0" readonly>
                    <div class="container">
                        <label for="id" class="">ID (*)</label>
                        <input type="text" class="form-control" name="id" id="id" required>
                    </div>
                    <div class="container">
                        <label for="categorie_name" class="">Categorie Name (*)</label>
                        <input type="text" class="form-control" name="categorie_name" id="categorie_name" required>
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
                <button type="button" class="btn btn-success" onclick="Categorie.save(this);">Save</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
