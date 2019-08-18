$('body').on('click', '.user-edit', function(e){
    e.preventDefault();

    url = $(this).attr('data-url');

    $('#user-edit').attr('action', url);

    console.log(url);

    $.ajax({
        url: url,
        method: 'GET',
        data: JSON,
        success: function(response){
            $('#name').val(response.name);
            $('#email').val(response.email);
            $('#adm').text(response.adm);
            $('#phone_number').val(response.phone_number);
            $('#dob').val(response.dob);
            $('#id_number').val(response.id_number);
            $('#gudian_name').val(response.gudian_name);
            $('#gudian_number').val(response.gudian_number);
            $('#year_joined').val(response.year_joined);
            $('#current_year').val(response.current_year);
            $('#county').val(response.county);
            $('#district').val(response.district);
            $('#division').val(response.division);
            $('#course').val(response.course);
            $('#admtry').val(response.adm);
        }
    });

});

$('body').on('click', '.profile-edit', function(e){
    e.preventDefault();

    url = $(this).attr('data-url');

    $('#profile-edit').attr('action', url);

    console.log(url);

    $.ajax({
        url: url,
        method: 'GET',
        data: JSON,
        success: function(response){
            $('#name').val(response.name);
            $('#email').val(response.email);
            $('#adm').text(response.adm);
            $('#phone_number').val(response.phone_number);
            $('#dob').val(response.dob);
            $('#id_number').val(response.id_number);
            $('#gudian_name').val(response.gudian_name);
            $('#gudian_number').val(response.gudian_number);
            $('#year_joined').val(response.year_joined);
            $('#current_year').val(response.current_year);
            $('#county').val(response.county);
            $('#district').val(response.district);
            $('#division').val(response.division);
            $('#course').val(response.course);
        }
    });

});

$('body').on('click', '.user-delete', function(e){
    e.preventDefault();

    url = $(this).attr('data-url');

    $('#user-delete').attr('action', url);
});


$('body').on('click', '.unit-edit', function(e){
    e.preventDefault();

    url = $(this).attr('data-url');

    $('#unit-edit').attr('action', url);

    console.log(url);

    $.ajax({
        url: url,
        method: 'GET',
        data: JSON,
        success: function(response){
            $('#unit_name').val(response.unit_name);
            $('#unit_code').val(response.unit_code);
            $('#course').text(response.course);
            $('#lecturer').val(response.lecturer);
            $('#year').val(response.year);
            $('#duration').val(response.duration);
        }
    });

});

$('body').on('click', '.unit-delete', function(e){
    e.preventDefault();

    url = $(this).attr('data-url');

    $('#unit-delete').attr('action', url);
});

$('body').on('click', '.regunit-delete', function(e){
    e.preventDefault();

    url = $(this).attr('data-url');

    $('#regunit-delete').attr('action', url);
});

//jrhehe
$('body').on('click', '.cat1edit', function(e){
    e.preventDefault();

    url = $(this).attr('data-url');

    $('#cat1-edit').attr('action', url);

    console.log(url);

    $.ajax({
        url: url,
        method: 'GET',
        data: JSON,
        success: function(response){
            $('#student').val(response.student);
            $('#adm').val(response.adm);
            $('#unit1').val(response.unit);
            $('#total').val(response.total);
            $('#grade').val(response.grade);
            $('#course').val(response.course);
        }
    });

});

$('body').on('click', '.cat1-delete', function(e){
    e.preventDefault();

    url = $(this).attr('data-url');

    $('#cat1-delete').attr('action', url);
});


$('body').on('click', '.download-edit', function(e){
    e.preventDefault();

    url = $(this).attr('data-url');

    $('#edit-download').attr('action', url);

    console.log(url);

    $.ajax({
        url: url,
        method: 'GET',
        data: JSON,
        success: function(response){
            $('#title-edit').val(response.title);
            $('#description-edit').val(response.description);
            $('#owner-edit').val(response.owner);
        }
    });

});

$('body').on('click', '.download-delete', function(e){
    e.preventDefault();

    url = $(this).attr('data-url');

    $('#download-delete').attr('action', url);
});

$('body').on('click', '.assignment-delete', function(e){
    e.preventDefault();

    url = $(this).attr('data-url');

    $('#assignment-delete').attr('action', url);
});

$('body').on('click', '.attendance-edit', function(e){
    e.preventDefault();

    url = $(this).attr('data-url');

    $('#edit-attendance').attr('action', url);

    console.log(url);

    $.ajax({
        url: url,
        method: 'GET',
        data: JSON,
        success: function(response){
            $('#student').val(response.student);
            $('#unit-edit').val(response.unit);
        }
    });

});

$('body').on('click', '.attendance-delete', function(e){
    e.preventDefault();

    url = $(this).attr('data-url');

    $('#attendance-delete').attr('action', url);
});

$('body').on('click', '.table-edit', function(e){
    e.preventDefault();

    url = $(this).attr('data-url');

    $('#edit-examtable').attr('action', url);

    console.log(url);

    $.ajax({
        url: url,
        method: 'GET',
        data: JSON,
        success: function(response){
            $('#unit-table').val(response.unit);
            $('#time').val(response.time);
            $('#room').val(response.room);
        }
    });

});

$('body').on('click', '.table-delete', function(e){
    e.preventDefault();

    url = $(this).attr('data-url');

    $('#table-delete').attr('action', url);
});