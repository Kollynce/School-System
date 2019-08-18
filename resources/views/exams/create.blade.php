<!-- Modal -->
<div class="modal fade" id="createtable" tabindex="-1" role="dialog" aria-labelledby="createtable" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createtable">Add Exams Schedule</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('exams.store')}}" method="POST">
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
            <input type="text" class="form-control" name="unit" placeholder="Exams Unit">
          </div>
          <div class="form-group">
            <label for="">Day</label>
            <div class="form-group">
              <select name="day" class="form-control">
                <option>Select Day</option>
                <option value="Monday">Monday</option>
                <option value="Monday">Tuesday</option>
                <option value="Monday">Wednesday</option>
                <option value="Monday">Thursday</option>
                <option value="Monday">Friday</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="">Time</label>
            <input type="text" class="form-control" name="time" placeholder="Set the Time">
          </div>
          <div class="form-group">
            <label for="">Room</label>
            <input type="text" class="form-control" name="room" placeholder="Enter the room">
          </div>
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary" value="Submit" name="addStudent" id="">
        </div>
      </form>
    </div>
  </div>
</div>