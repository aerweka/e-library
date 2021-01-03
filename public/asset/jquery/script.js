$(function () {


    $('.detPeminjaman').on('click', function () {
        // $('#judulModal').html('Ubah Data User');
        // $('.modal-footer button[type=submit]').html('Edit')
        // $('.modal-body form').attr('action', 'http://localhost/pbd_uas/public/users/edit')

        const id = $(this).data('id');

        $.ajax({
            url: '/peminjaman/detail',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#kode_buku').val(data.kode_buku);
                $('#id_peminjaman').val(data.id_peminjaman);
                $('#status_peminjaman').val(data.status_peminjaman);
                $('#denda_perbuku').val(data.denda_perbuku);
                $('#tanggal_harusKembali').val(data.tanggal_harusKembali);
                $('#tanggal_kembali').val(data.tanggal_kembali);
                $('#perpanjangan').val(data.perpanjangan);
                $('#status_verif').val(data.status_verif);
            }
        });
    });
});