 <style>
    .swal2-popup {
            font-size: 12px !important;
    }
</style>
<?php
    if (isset($_SESSION['status']) && $_SESSION['status'] !='') {
        ?>
            <script>
                    Swal.fire({
                    position: 'bottom-end',
                    text: '<?php echo $_SESSION['text'] ?>',
                    width: '17rem',
                    showConfirmButton: false,
                    timer: 1600
                })
            </script>
        <?php
        unset($_SESSION['status']);
    }
?>