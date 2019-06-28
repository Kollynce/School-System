<!-- Modal -->
<div class="modal fade" id="units" tabindex="-1" role="dialog" aria-labelledby="unitsModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="unitsModal">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('units.store')}}" method="POST">
        @csrf
        <div class="modal-body">
          <div class="form-group">
            <label for="unitName">Unit Name</label>
            <input type="text" name="unit_name" class="form-control" placeholder="Inro to programing">
          </div>
          <div class="form-group">
            <label for="unitCode">Unit Code</label>
            <input type="text" name="unit_code" class="form-control" placeholder="BSIT 1232">
          </div>
          <div class="form-group">
            <label for="unitName">Course</label>
            <select name="course" class="form-control">
              <option>Select couse unit belongs to</option>
              <option value="Bachelor of Commerce">Bachelor of Commerce</option>
              <option value="Bachelor of Arts International Relations">Bachelor of Arts International Relations</option>
              <option value="Bachelor of Science in IT">Bachelor of Science in IT</option>
            </select>
          </div>
          <div class="form-group">
            <label for="lecturer">Lecturer</label>
            <input type="text" name="lecturer" class="form-control" placeholder="David Solomon">
          </div>
          <div class="form-group">
            <label for="year">Year</label>
            <input type="text" name="year" class="form-control" placeholder="3.2">
          </div>
          <div class="form-group">
            <label for="duration">Duration</label>
            <input type="text" name="duration" class="form-control" placeholder="30 Hrs">
          </div>
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary" value="Add Unit" name="add" id="">
        </div>
      </form>
    </div>
  </div>
</div>