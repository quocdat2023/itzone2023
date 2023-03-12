<!-- START HEADER-->
<?php
            include('mvc/views/admin/include/header.php');
       ?>
<!-- END HEADER-->
<!-- START SIDEBAR-->
<?php
            include('mvc/views/admin/include/sidebar.php');
       ?>
<!-- END SIDEBAR-->
<!-- START PAGE CONTENT-->
<?php
                 require_once "mvc/views/admin/".$data["page"].".php";

            ?>
<!-- END PAGE CONTENT-->

<?php
            include('mvc/views/admin/include/footer.php');
       ?>