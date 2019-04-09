    $(document).ready(function () {
    $('#content').on('keyup', function () {
        $.ajax({
            url: '/articles',
            type: 'GET',
            dataType: 'json',
            data: {
                'content': $('#content').val()
            },
            success: function (data) {
                $('#data-content').html(data['view']);
            },
            error: function (xhr, status) {
                console.log(xhr.error + "ERROR STATUS :" + status);
            },
            complete: function () {
                alreadyloading = false;
            }
        });
    });
});