<div class="modal fade" role="dialog" id="removeuser">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Remove User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <h2 class="text-center">Are You Sure You Want <br> To <span class="text-danger">Remove</span> User</h2>
        </div>
        <div class="modal-footer">
            <form action="#"  id="user-delete" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger" ><i class="fas fa-trash"></i> Remove</button>
            </form>
        </div>
        </div>
    </div>
</div>
