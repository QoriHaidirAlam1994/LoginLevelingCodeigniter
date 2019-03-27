$(function () {
    $('.tombolTambahData').on('click', function () {
        $('#newSubMenuModalLabel').html('Add New Sub Menu');
        $('.modal-footer button[type=submit]').html('Add');
    });

    $('.tampilModalUbah').on('click', function () {
        $('#newSubMenuModalLabel').html('Edit Sub Menu');
        $('.modal-footer button[type=submit]').html('Edit');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/wpu-login/menu/editSubMenu',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                console.log(data);
            }
        });
    });
});