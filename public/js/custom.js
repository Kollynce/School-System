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
            $('#adm').val(response.adm);
            $('#course').val(response.course);
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
