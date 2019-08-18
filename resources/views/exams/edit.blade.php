<!-- Modal -->
<div class="modal fade" id="edit-table" tabindex="-1" role="dialog" aria-labelledby="createtable" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createtable">Add Exams Schedule</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="edit-examtable" action="#" method="POST">
        @method('PATCH')
        @csrf
        <div class="modal-body">
          <div class="form-group">
            <label for="">Exam</label>
            <div class="form-group">
              <select name="exam" class="form-control">
                <option>Select Day</option>
                <option value="CAT 1">CAT 1</option>
                <option value="CAT 2">CAT 2</option>
                <option value="MAIN EXAM">MAIN EXAM</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="">Course</label>
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
            <label for="unitName">Unit</label>
            <input type="text" class="form-control" name="unit" id="unit-table">
          </div>
          <div class="form-group">
            <label for="">Day</label>
            <div class="form-group">
              <select name="day" class="form-control">
                <option>Select Day</option>
                <option value="Monday">Monday</option>
                <option value="Tuesday">Tuesday</option>
                <option value="Wednesday">Wednesday</option>
                <option value="Thursday">Thursday</option>
                <option value="Friday">Friday</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="">Time</label>
            <input type="text" class="form-control" name="time" id="time">
          </div>
          <div class="form-group">
            <label for="">Room</label>
            <input type="text" class="form-control" name="room" id="room">
          </div>
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary" value="Submit" name="addStudent" id="">
        </div>
      </form>
    </div>
  </div>
</div>