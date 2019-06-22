<div class="modal fade" id="createuser">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Create User</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
        <form action="{{route('users.store')}}" enctype="multipart/form-data" method="POST">
            @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Enter User Full Name" id="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Enter Employee Email" id="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="adm" class="form-control" placeholder="BIT/0342/2012" id="">
                    </div>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="avatar" lang="en">
                            <label class="custom-file-label" for="customFileLang">Select file</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="course" class="form-control" placeholder="Enter Course if Applicable" id="">
                    </div>
                    <div class="form-group">
                         {{-- {{Form::select('user_type', ['student' => 'student', 'lecturer' => 'lecturer'], '',['class' => 'form-control','placeholder' => 'Select One'])}} --}}
                         <select name="user_type" class="form-control">
                            <option value="student">student</option>
                            <option value="lecturer">lecturer</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Enter Default Password" id="">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Create" name="add" id="">
                </div>
            </form>
        </div>
    </div>
</div>
