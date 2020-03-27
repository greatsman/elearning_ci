<?php if ($this->session->flashdata('success_message')) { ?>
    <script type="text/javascript">
        Swal.fire({
            type: 'success',
            title: 'Berhasil',
            text: '<?php echo $this->session->flashdata('success_message'); ?>',
        })
    </script>
<?php } ?>
<?php if ($this->session->flashdata('error_message')) { ?>
    <script type="text/javascript">
        Swal.fire({
            type: 'error',
            title: 'Kesalahan',
            text: '<?php echo $this->session->flashdata('eror_message'); ?>',
        })
    </script>
<?php } ?>