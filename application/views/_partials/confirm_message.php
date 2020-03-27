<script type="text/javascript">
    $('.link-delete').on('click', function(e) {
        e.preventDefault();
        const href = $(this).attr('href');
        Swal.fire({
            title: 'Are you sure?',
            text: "Apakah Anda Yakin Ingin Menghapus",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Saya Yakin!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.value) {
                document.location.href = href
            }
        })

    })
</script>
<script type="text/javascript">
    $('.link-logout').on('click', function(e) {
        e.preventDefault();
        const href = $(this).attr('href');
        Swal.fire({
            title: 'Are you sure?',
            text: "Apakah Anda Yakin Ingin Keluar",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Saya Yakin!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.value) {
                document.location.href = href
            }
        })

    })
</script>