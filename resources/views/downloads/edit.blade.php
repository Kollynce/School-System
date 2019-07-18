<!-- Modal -->
<div class="modal fade" id="editfile" tabindex="-1" role="dialog" aria-labelledby="editFile" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editfile">Upload A File</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="edit-download" action="#" enctype="multipart/form-data" method="POST">
        @method('PATCH')
        @csrf
        <div class="modal-body">
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title-edit">
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control" id="description-edit">
          </div>
          <div class="form-group">
            <label for="file_upload">Select A File</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="file_upload" lang="en">
                <label class="custom-file-label" for="file_upload">Select file</label>
            </div>
          </div>
          <div class="form-group">
            <label for="owner">Posted By</label>
            <input type="text" name="owner" class="form-control" id="owner-edit">
          </div>
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary" value="Upload" name="upload" id="">
        </div>
      </form>
    </div>
  </div>
</div>