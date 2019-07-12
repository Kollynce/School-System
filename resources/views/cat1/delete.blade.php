<div class="modal fade" role="dialog" id="removecat1">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Remove CAT1 Marks</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="swal2-icon swal2-warning swal2-animate-warning-icon" style="display: flex;"><span class="swal2-icon-text">!</span></div>
            <h2 class="text-center">Are You Sure You Want <br> To <span class="text-danger">Remove</span> CAT1 Marks</h2>
        </div>
        <div class="modal-footer">
            <form action="#"  id="cat1-delete" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger" ><i class="fas fa-trash"></i> Remove</button>
            </form>
        </div>
        </div>
    </div>
</div>
