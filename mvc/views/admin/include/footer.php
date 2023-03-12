
<footer class="page-footer">

    <div class="font-13">© Copyright <b>IT-Zone</b>. All Rights Reserved</div>

    <div class="to-top" style="display: block;"><i class="fa fa-circle-up"></i></div>

</footer>
</div>

<script src="public/assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>

<script src="public/assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>

<script src="public/assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>

<script src="public/assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>

<script src="public/assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="public/assets/vendors/jquery-sparkline/dist/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="public/assets/js/scripts/sparkline-demo.js" type="text/javascript"></script>
<!-- PAGE LEVEL PLUGINS-->
<!-- CORE SCRIPTS-->
<script src="public/assets/js/app.min.js" type="text/javascript"></script>
<!-- PAGE LEVEL SCRIPTS-->


<script src="public/assets/vendors/DataTables/datatables.min.js" type="text/javascript"></script>

<script type="text/javascript">
$(function() {

    $('#example-table').DataTable({

        pageLength: 10,

        //"ajax": 'assets/demo/data/table_data.json',

        /*"columns": [
            { "data": "name" },

            { "data": "office" },

            { "data": "extn" },

            { "data": "start_date" },

            { "data": "salary" }

        ]*/

    });

    $('#example-tables').DataTable({
        pageLength: 10,
        //"ajax": 'assets/demo/data/table_data.json',
        /*"columns": [
            { "data": "name" },
            { "data": "office" },
            { "data": "extn" },
            { "data": "start_date" },
            { "data": "salary" }
        ]*/
    });
})
</script>

<script>
if (window.history.replaceState) {

    window.history.replaceState(null, null, window.location.href);

}
</script>

<script>
CKEDITOR.replace('contentpost');

config.resize_maxWidth = 800;

config.resize_maxHeight = 600;
</script>

</body>



</html>