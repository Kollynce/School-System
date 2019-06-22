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

$('body').on('click', '.user-delete', function(e){
    e.preventDefault();

    url = $(this).attr('data-url');

    $('#user-delete').attr('action', url);
});
