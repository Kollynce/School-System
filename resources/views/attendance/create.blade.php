<!-- Modal -->
<div class="modal fade" id="addattendance" tabindex="-1" role="dialog" aria-labelledby="cat1Modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="cat1Modal">Add Student Attendance</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('attendance.store')}}" method="POST">
          @csrf
          <div class="modal-body">
            <div class="form-group">
              <label for="unitName">Student</label>
              <input type="text" class="form-control" name="student" placeholder="Student Name">
            </div>

            <div class="form-group">
              <label for="">unit</label>
              <input type="text" class="form-control" name="unit" placeholder="Student Admission Number">
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

          </div>
          <div class="modal-footer">
            <input type="submit" class="btn btn-primary" value="Add Student" name="addStudent" id="">
          </div>
        </form>
      </div>
    </div>
  </div>
