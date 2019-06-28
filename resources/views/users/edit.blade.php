<div class="modal fade" id="edituser">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Edit User</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
        <form id="user-edit" action="#" enctype="multipart/form-data" method="POST">
            @method('PATCH')
            @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <input type="text" name="adm" class="form-control" id="adm">
                    </div>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="avatar" lang="en">
                            <label class="custom-file-label" for="customFileLang">Select file</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <select name="course" class="form-control">
                            <option value="Bachelor of Commerce">Bachelor of Commerce</option>
                            <option value="Bachelor of Arts International Relations">Bachelor of Arts International Relations</option>
                            <option value="Bachelor of Science in IT">Bachelor of Science in IT</option>
                        </select>
                    </div>
                    <div class="form-group">
                         <select name="gender" class="form-control">
                            <option >Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                         <select name="user_type" class="form-control">
                            <option value="student">student</option>
                            <option value="lecturer">lecturer</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="phone_number" class="form-control" id="phone_number">
                        <input type="hidden" name="dob" class="form-control" id="dob">
                        <input type="hidden" name="id_number" class="form-control" id="id_number">
                        <input type="hidden" name="gudian_name" class="form-control" id="gudian_name">
                        <input type="hidden" name="gudian_number" class="form-control" id="gudian_number">
                        <input type="hidden" name="year_joined" class="form-control" id="year_joined">
                        <input type="hidden" name="current_year" class="form-control" id="current_year">
                        <input type="hidden" name="county" class="form-control" id="county">
                        <input type="hidden" name="division" class="form-control" id="division">
                        <input type="hidden" name="district" class="form-control" id="district">
                        <input type="password" name="password" class="form-control" placeholder="Enter Default Password" id="">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Update" name="update" id="">
                </div>
            </form>
        </div>
    </div>
</div>
