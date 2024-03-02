
<div class="modal fade" id="modalCommercialForm"> 
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Commercial</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form class="" action="" id="commercialForm" method="post">
                    <input type="hidden" name="edit_mode" id="edit_mode" value="0" readonly>
                    <input type="hidden" name="id" id="id" value="" readonly>
                    <div class="container">
                        <label for="commercial_name" class="">Commercial Name (*)</label>
                        <input type="text" class="form-control" name="commercial_name" id="commercial_name" required>
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
                <button type="button" class="btn btn-success" onclick="Commercial.save(this);">Save</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
