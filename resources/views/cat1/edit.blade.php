<!-- Modal -->
<div class="modal fade" id="editcat1" tabindex="-1" role="dialog" aria-labelledby="cat1Modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cat1Modal">Enter Student Marks</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="cat1-edit" action="#" method="POST">
        @method('PATCH')
        @csrf
        <div class="modal-body">
          <div class="form-group">
            <label for="unitName">Student</label>
            <input type="text" class="form-control" name="student" id="student">
          </div>

          <div class="form-group">
            <label for="">Admission Number</label>
            <input type="text" class="form-control" name="adm" id="adm">
          </div>

          <div class="form-group">
            <label for="">Course</label>
            {{-- <input type="text" class="form-control" name="course" id="course"> --}}
            <div class="form-group">
                <select name="course" class="form-control">
                    <option>Select Course</option>
                    <option value="Bachelor of Commerce">Bachelor of Commerce</option>
                    <option value="Bachelor of Arts International Relations">Bachelor of Arts International Relations</option>
                    <option value="Bachelor of Science in IT">Bachelor of Science in IT</option>
                </select>
            </div>
            
          </div>

          <div class="form-group">
            <label for="">Unit</label>
            <input type="text" class="form-control" name="unit" id="unit1">
          </div>

          <div class="form-group">
            <label for="">Exam</label>
            <select name="exam" class="form-control">
              <option>Select Exam Type</option>
              <option value="CAT 1">CAT 1</option>
              <option value="CAT 2">CAT 2</option>
              <option value="Main Exams">Main Exams</option>
            </select>
          </div>
          
          <div class="form-group">
            <label for="">Total Marks</label>
            <input type="text" class="form-control" name="total" id="total">
          </div>

          <div class="form-group">
            <label for="">Grade</label>
            <input type="text" class="form-control" name="grade" id="grade">
          </div>

        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary" value="Edit Marks" name="register" id="">
        </div>
      </form>
    </div>
  </div>
</div>