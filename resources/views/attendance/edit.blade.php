<!-- Modal -->
<div class="modal fade" id="editattendance" tabindex="-1" role="dialog" aria-labelledby="cat1Modal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="cat1Modal">Edit Student Attendance</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="edit-attendance" action="#" method="POST">
          @method('PATCH')
          @csrf
          <div class="modal-body">
            {{-- <div class="form-group">
              <label for="unitName">Student</label>
              <input type="text" class="form-control" name="student" id="student">
            </div> --}}

            <div class="form-group">
              <label for="">unit</label>
              <input type="text" class="form-control" name="unit" id="unit-edit">
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
              <label for="">Monday</label>
              <div class="form-group">
                  <select name="monday" class="form-control">
                      <option>Select Attendance</option>
                      <option value="Attended">Attended</option>
                      <option value="Not Attended">Not Attended</option>
                  </select>
              </div>
            </div>

            <div class="form-group">
              <label for="">Tuesday</label>
              <div class="form-group">
                  <select name="tuesday" class="form-control">
                      <option>Select Attendance</option>
                      <option value="Attended">Attended</option>
                      <option value="Not Attended">Not Attended</option>
                  </select>
              </div>
            </div>

            <div class="form-group">
              <label for="">Wednesday</label>
              <div class="form-group">
                  <select name="wednesday" class="form-control">
                      <option>Select Attendance</option>
                      <option value="Attended">Attended</option>
                      <option value="Not Attended">Not Attended</option>
                  </select>
              </div>
            </div>

            <div class="form-group">
              <label for="">Thursday</label>
              <div class="form-group">
                  <select name="thursday" class="form-control">
                      <option>Select Attendance</option>
                      <option value="Attended">Attended</option>
                      <option value="Not Attended">Not Attended</option>
                  </select>
              </div>
            </div>

            <div class="form-group">
              <label for="">Friday</label>
              <div class="form-group">
                  <select name="friday" class="form-control">
                      <option>Select Attendance</option>
                      <option value="Attended">Attended</option>
                      <option value="Not Attended">Not Attended</option>
                  </select>
              </div>
            </div>

          </div>
          <div class="modal-footer">
            <input type="submit" class="btn btn-primary" value="Edit Attendance" name="editAttendance" id="">
          </div>
        </form>
      </div>
    </div>
  </div>
