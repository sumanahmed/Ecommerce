
</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{ asset('/admin/') }}/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('/admin/') }}/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{ asset('/admin/') }}/vendor/metisMenu/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="{{ asset('/admin/') }}/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('/admin/') }}/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="{{ asset('/admin/') }}/vendor/datatables-responsive/dataTables.responsive.js"></script>


<!-- Morris Charts JavaScript -->
<script src="{{ asset('/admin/') }}/vendor/raphael/raphael.min.js"></script>
<script src="{{ asset('/admin/') }}/vendor/morrisjs/morris.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="{{ asset('/admin/') }}/dist/js/sb-admin-2.js"></script>
<script src="{{ asset('/admin/') }}/ckeditor/ckeditor.js"></script>
<script> CKEDITOR.replace( 'long_description' ); </script>
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>

</body>

</html>
