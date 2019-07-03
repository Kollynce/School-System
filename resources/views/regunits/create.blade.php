<!-- Modal -->
<div class="modal fade" id="regunits" tabindex="-1" role="dialog" aria-labelledby="unitsModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="unitsModal">Register Unit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('regunits.store')}}" method="POST">
        @csrf
        <div class="modal-body">
          <div class="form-group">
            <label for="unitName">Course</label>
              </br>
            <label for="unitName"><b> {{Auth::user()->course}}</b></label>

            {{-- <select name="course" class="form-control">
              <option>Select couse unit belongs to</option>
              <option value="Bachelor of Commerce">Bachelor of Commerce</option>
              <option value="Bachelor of Arts International Relations">Bachelor of Arts International Relations</option>
              <option value="Bachelor of Science in IT">Bachelor of Science in IT</option>
            </select> --}}
          </div>
          <div class="form-group">
            <label for="unitReg">Unit</label>
            <select name="unit" class="form-control">
              <option>Select couse unit belongs to</option>
              @foreach($unit as $units)
                @if($units->course == Auth::user()->course)
                  <option value="{{$units->unit_name}}">{{$units->unit_name}}</option>
                @endif  
              @endforeach
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary" value="Register Unit" name="register" id="">
        </div>
      </form>
    </div>
  </div>
</div>