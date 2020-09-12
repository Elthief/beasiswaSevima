$(document).ready(() => {

    $('.loader').hide();
    $('#tombol-cari').hide();
    $('#keyword').on('keyup', () => {
        $('.loader').show();

        $.get('ajax/buku.php?keyword=' + $('#keyword').val(), data => {
            $('#container').html(data);
            $('.loader').hide();
        })

    });

});