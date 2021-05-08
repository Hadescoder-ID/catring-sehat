<script src="<?= base_url('assets/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/moment/moment.min.js') ?>"></script>
<script src="<?= base_url('assets/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') ?>"></script>
<script src="<?= base_url('assets/js/adminlte.js') ?>"></script>
<script src="<?= base_url('assets/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('assets/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('assets/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
<script src="<?= base_url('assets/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('assets/datatables-buttons/js/dataTables.buttons.min.js') ?>"></script>
<script src="<?= base_url('assets/datatables-buttons/js/buttons.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('assets/jszip/jszip.min.js') ?>"></script>
<script src="<?= base_url('assets/pdfmake/pdfmake.min.js') ?>"></script>
<script src="<?= base_url('assets/pdfmake/vfs_fonts.js') ?>"></script>
<script src="<?= base_url('assets/datatables-buttons/js/buttons.html5.min.js') ?>"></script>
<script src="<?= base_url('assets/datatables-buttons/js/buttons.print.min.js') ?>"></script>
<script src="<?= base_url('assets/datatables-buttons/js/buttons.colVis.min.js') ?>"></script>
<script>
    $(document).ready(() => {
        $("#datable").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#datable_wrapper .col-md-6:eq(0)')
    })
</script>