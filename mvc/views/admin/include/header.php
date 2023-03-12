<?php Session::checkSession();
 ?>
<?php
$admin = $this->PermissionModel->Admin(Session::get('id_student'));

$block = $this->PermissionModel->Block(Session::get('id_student'));

$personnel = $this->PermissionModel->Personnel(Session::get('id_student'));

$attendance = $this->PermissionModel->Attendance(Session::get('id_student'));


?>

<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width initial-scale=1.0">

    <title>IT-Zone - Trường ĐH Tôn Đức Thắng</title>

    <!-- GLOBAL MAINLY STYLES-->

    <base href="https://it-zone.club/">
  <script src="https://cdn.ckeditor.com/4.19.1/standard-all/ckeditor.js"></script>
    <link href="public/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- <link href="public/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" /> -->

    <link href="public/assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />

    <!-- PLUGINS STYLES-->

    <link href="public/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />

    <!-- THEME STYLES-->

    <link rel="icon"
        href="public/assets/img/logo.jpg"
        type="image/x-icon">

       <link rel='shortcut icon' href='public/assets/img/logo.jpg'>

	<link rel="stylesheet" href="https://unpkg.com/webtour@1.1.0/dist/webtour.min.css">
	<script src="https://unpkg.com/webtour@1.1.0/dist/webtour.min.js"></script>
    <link href="public/assets/css/main.min.css" rel="stylesheet" />

    <link href="public/assets/vendors/DataTables/datatables.min.css" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>

    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script src="https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.16.2/ckeditor.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>



    <style>
    .input-group-append {

        display: none;

    }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />



<body class="fixed-navbar">

    <?php 

    if(isset($data['alert']))

        echo $data['alert'];

?>



    <div class="page-wrapper">

        <!-- START HEADER-->

        <header class="header">

            <div class="page-brand">

                <a class="link" href="Home/Dashboard">

                    <span class="brand">IT-ZONE

                        <!-- <span class="brand-tip">ITZONE</span> -->

                    </span>

                    <span class="brand-mini"> <img src="https://it-zone.club/public/assets/img/logo.jpg" width="50px;"></span>

                </a>

            </div>

            <div class="flexbox flex-1">

                <!-- START TOP-LEFT TOOLBAR-->

                <ul class="nav navbar-toolbar">

                    <li>

                        <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>

                    </li>

                    <!-- <li>

                 <form class="navbar-search" action="javascript:;">

                     <div class="rel">

                         <span class="search-icon"><i class="ti-search"></i></span>

                         <input class="form-control" placeholder="Search here...">

                     </div>

                 </form>

             </li> -->

                </ul>

                <!-- END TOP-LEFT TOOLBAR-->

                <!-- START TOP-RIGHT TOOLBAR-->

                <ul class="nav navbar-toolbar">

                    <li class="dropdown dropdown-inbox">

                        <a class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell rel">
                        <?php if($data['countsupport']>0){echo '<span class="notify-signal" style="background: #e74c3c;">'; }else{}?></i></span>
                            <!-- <span class="badge badge-danger envelope-badge"></span> -->

                        </a>

                        <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media">

                            <li class="dropdown-menu-header">

                                <div>

                                    <span><strong>Có <?php echo $data['countsupport'];?> thông báo mới!</strong></span>

                                    <!-- <a class="pull-right" href="mailbox.html">view all</a> -->

                                </div>

                            </li>

                            <li class="list-group list-group-divider scroller" data-height="200px" data-color="#71808f">

                                <div>

                                    <?php 

                             while($row = mysqli_fetch_array($data["listsupport"])){?>

                                    <a class="list-group-item">

                                        <div class="media">

                                            <div class="media-img">

                                            <?php 
                                            $ran = rand(1, 6);
                                            if ($ran == 1){
                                                echo '<span class="badge badge-default badge-big"><i class="fa fa-solid fa-laptop-medical"></i></span>';
                                            }else if  ($ran == 2){
                                                echo '<span class="badge badge-primary badge-big"><i class="fa fa-solid fa-laptop-medical"></i></span>';
                                            }else if  ($ran == 3){
                                                echo '<span class="badge badge-success badge-big"><i class="fa fa-solid fa-laptop-medical"></i></span>';
                                            }else if  ($ran == 4){
                                                echo '<span class="badge badge-danger badge-big"><i class="fa fa-solid fa-laptop-medical"></i></span>';
                                            }else if  ($ran == 5){
                                                echo '<span class="badge badge-warning badge-big"><i class="fa fa-solid fa-laptop-medical"></i></span>';
                                            }else{
                                                echo '<span class="badge badge-info badge-big"><i class="fa fa-solid fa-laptop-medical"></i></span>';
                                            }
                                            ?>                                            </div>

                                            <div class="media-body">

                                                <div class="font-strong"> </div><?php echo $row['fullname'] ?><small
                                                    class="text-muted float-right"><?php if($row['shift']=="1"){
                                                echo '<span class="badge badge-danger m-l-5"><i class="ti-alarm-clock"></i> Ca 1</span>';}
                                                elseif($row['shift']=="2"){
                                                echo '<span class="badge badge-success m-l-5"><i class="ti-alarm-clock"></i> Ca 2</span>';}
                                                elseif($row['shift']=="3"){
                                                    echo '<span class="badge badge-primary m-l-5"><i class="ti-alarm-clock"></i> Ca 3</span>';}
                                                else{
                                                    echo '<span class="badge badge-secondary m-l-5"><i class="ti-alarm-clock"></i> Ca 4</span>';}
                                        
                                            ?></small>
                                            <small class="text-muted"><?php echo $row['timebook']?></small>
                                            <small class="text-muted"><?php $date =$row['date']; echo date("d/m/Y", strtotime($date));?></small>


                                            </div>

                                        </div>

                                    </a>
                                    <?php }

                                ?>

                                </div>

                            </li>

                        </ul>

                    </li>

                    <li class="dropdown dropdown-user">

                        <a class="nav-link dropdown-toggle link" data-toggle="dropdown">

        <img class="img-circle" src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" width="45px" />

                            <span></span><?php echo Session::get("fullname")?><i class="fa fa-angle-down m-l-5"></i></a>
    	<?php 
		 if($admin == true){?>

                <ul style="padding-top: 10px; box-sizing: content-box; margin: 0; padding: 0 0 14px 14px; width: 338px;"

                     class="dropdown-menu dropdown-menu-right">

                     <li

                         style="display: inline-block; height: 84px; list-style-type: none; padding: 6px; position: relative; transition: transform .2s cubic-bezier(.333,0,0,1); vertical-align: top; width: 84px;">

                         <a class="text-center"

                             href="Home/Dashboard"

                             

                             >

                             <div class="text-center"><img src="https://amisplatform.misacdn.net/images/iconapps/market/newsfeed.svg" alt="" style="width: 50%; height: auto" srcset=""><span 

                                     style="background-image: url('https://lh3.google.com/u/0/ogw/ADea4I5emc1qkl-QTXYcb4K7IzEhYg2c5jBPLLpRgWxT=s128-b16-cc-rp-mo');"></span>

                             </div><br><span class="text-center">Dashboard</span>

                         </a>

                     </li>

                     <li

                         style="display: inline-block; height: 84px; list-style-type: none; padding: 6px; position: relative; transition: transform .2s cubic-bezier(.333,0,0,1); vertical-align: top; width: 84px;">

                         <a class="text-center"

                             href="Home/ManageAccount">

                             <div class="text-center"><img src="https://amisplatform.misacdn.net/images/iconapps/system.svg?_=20211108" alt="" s style="width: 50%; height: auto" srcset=""><span

                                     style="background-image: url('https://lh3.google.com/u/0/ogw/ADea4I5emc1qkl-QTXYcb4K7IzEhYg2c5jBPLLpRgWxT=s128-b16-cc-rp-mo');"></span>

                             </div><br><span class="text-center">Tài khoản</span>

                         </a>

                     </li>

                     <li

                         style="display: inline-block; height: 84px; list-style-type: none; padding: 6px; position: relative; transition: transform .2s cubic-bezier(.333,0,0,1); vertical-align: top; width: 84px;">

                         <a class="text-center"

                             href="Home/ManageMember">

                             <div class="text-center"><img src="https://amisplatform.misacdn.net/images/iconapps/market/employeeself.svg" alt="" s style="width: 50%; height: auto" srcset=""><span

                                     style="background-image: url('https://lh3.google.com/u/0/ogw/ADea4I5emc1qkl-QTXYcb4K7IzEhYg2c5jBPLLpRgWxT=s128-b16-cc-rp-mo');"></span>

                             </div><br><span class="text-center">Thành viên</span>

                         </a>

                     </li>

                     <li

                         style="display: inline-block; height: 84px; list-style-type: none; padding: 6px; position: relative; transition: transform .2s cubic-bezier(.333,0,0,1); vertical-align: top; width: 84px;">

                         <a class="text-center"

                             href="Home/ManageCalendar">

                             <div class="text-center"><img src="https://amisplatform.misacdn.net/images/iconapps/market/amiscrm2.svg" alt="" s style="width: 50%; height: auto" srcset=""><span

                                     style="background-image: url('https://lh3.google.com/u/0/ogw/ADea4I5emc1qkl-QTXYcb4K7IzEhYg2c5jBPLLpRgWxT=s128-b16-cc-rp-mo');"></span>

                             </div><br><span class="text-center">Lịch trực</span>

                         </a>

                     </li>

                     <li

                         style="display: inline-block; height: 84px; list-style-type: none; padding: 6px; position: relative; transition: transform .2s cubic-bezier(.333,0,0,1); vertical-align: top; width: 84px;">

                         <a class="text-center"

                             href="Home/ManageEvent">

                             <div class="text-center"><img src="https://amismisa.misacdn.net/apps/aimarketing/assets/images/ai-newlogo.png" alt=""  style="width: 50%; height: auto" srcset=""><span

                                     style="background-image: url('https://lh3.google.com/u/0/ogw/ADea4I5emc1qkl-QTXYcb4K7IzEhYg2c5jBPLLpRgWxT=s128-b16-cc-rp-mo');"></span>

                             </div><br><span class="text-center">Sự kiện</span>

                         </a>

                     </li>

                     <li

                         style="display: inline-block; height: 84px; list-style-type: none; padding: 6px; position: relative; transition: transform .2s cubic-bezier(.333,0,0,1); vertical-align: top; width: 84px;">

                         <a class="text-center"

                             href="Home/ManageFix">

                             <div class="text-center"><img src="https://amisplatform.misacdn.net/images/iconapps/market/task.svg" alt="" s style="width: 50%; height: auto" srcset=""><span

                                     style="background-image: url('https://lh3.google.com/u/0/ogw/ADea4I5emc1qkl-QTXYcb4K7IzEhYg2c5jBPLLpRgWxT=s128-b16-cc-rp-mo');"></span>

                             </div><br><span class="text-center">Sửa máy</span>

                         </a>

                     </li>

                     <li

                         style="display: inline-block; height: 84px; list-style-type: none; padding: 6px; position: relative; transition: transform .2s cubic-bezier(.333,0,0,1); vertical-align: top; width: 84px;">

                         <a class="text-center"

                             href="Home/Attendance">

                             <div class="text-center"><img src="https://amisplatform.misacdn.net/images/iconapps/market/timesheet.svg" alt="" s style="width: 50%; height: auto" srcset=""><span

                                     style="background-image: url('https://lh3.google.com/u/0/ogw/ADea4I5emc1qkl-QTXYcb4K7IzEhYg2c5jBPLLpRgWxT=s128-b16-cc-rp-mo');"></span>

                             </div><br><span class="text-center">Điểm danh</span>

                         </a>

                     </li>



                     <li

                         style="display: inline-block; height: 84px; list-style-type: none; padding: 6px; position: relative; transition: transform .2s cubic-bezier(.333,0,0,1); vertical-align: top; width: 84px;">

                         <a class="text-center"

                             href="Home/InfoSoftWare">

                             <div class="text-center"><img src="https://amisplatform.misacdn.net/images/iconapps/market/process.svg" alt="" s style="width: 50%; height: auto" srcset=""><span

                                     style="background-image: url('https://lh3.google.com/u/0/ogw/ADea4I5emc1qkl-QTXYcb4K7IzEhYg2c5jBPLLpRgWxT=s128-b16-cc-rp-mo');"></span>

                             </div><br><span class="text-center">Thông tin</span>

                         </a>

                     </li>

                     <li

                         style="display: inline-block; height: 84px; list-style-type: none; padding: 6px; position: relative; transition: transform .2s cubic-bezier(.333,0,0,1); vertical-align: top; width: 84px;">

                         <a class="text-center"

                             href="Auth/Logout">

                             <div class="text-center"><img src="https://externalapi.mshopkeeper.vn/resources/images/Logo_eShop_1.svg" alt="" s style="width: 50%; height: auto" srcset=""><span

                                     style="background-image: url('https://lh3.google.com/u/0/ogw/ADea4I5emc1qkl-QTXYcb4K7IzEhYg2c5jBPLLpRgWxT=s128-b16-cc-rp-mo');"></span>

                             </div><br><span class="text-center">Đăng xuất</span>

                         </a>

                     </li>



                 </ul>

                 <?php       
        }else if($block == true){?>
      <ul class="dropdown-menu dropdown-menu-right hide" x-placement="bottom-end" style="position: absolute; transform: translate3d(-14px, 30px, 0px); top: 0px; left: 0px; will-change: transform;">
                            <a class="dropdown-item" href="Home/Profile"><i class="fa fa-user"></i>Thông tin cá nhân</a>
                            <a class="dropdown-item" href="Home/ChangePassWord"><i class="fa fa-cog"></i>Đổi mật khẩu</a>
                            <a class="dropdown-item" href="https://youtu.be/0-u4w861c-w"><i class="fa-solid fa-circle-info"></i>Hướng dẫn sử dụng</a>
                            <li class="dropdown-divider"></li>
                            <a class="dropdown-item" href="Auth/Logout"><i class="fa fa-power-off"></i>Đăng xuất</a>
                        </ul>   

  <?php }
        else if($personnel== true){?>
        <ul class="dropdown-menu dropdown-menu-right hide" x-placement="bottom-end" style="position: absolute; transform: translate3d(-14px, 30px, 0px); top: 0px; left: 0px; will-change: transform;">
                            <a class="dropdown-item" href="Home/Profile"><i class="fa fa-user"></i>Thông tin cá nhân</a>
                            <a class="dropdown-item" href="Home/ChangePassWord"><i class="fa fa-cog"></i>Đổi mật khẩu</a>
                            <a class="dropdown-item" href="https://youtu.be/0-u4w861c-w"><i class="fa-solid fa-circle-info"></i>Hướng dẫn sử dụng</a>
                            <li class="dropdown-divider"></li>
                            <a class="dropdown-item" href="Auth/Logout"><i class="fa fa-power-off"></i>Đăng xuất</a>
                        </ul>   
<?php }

        else if($attendance == true){?>
             <ul class="dropdown-menu dropdown-menu-right hide" x-placement="bottom-end" style="position: absolute; transform: translate3d(-14px, 30px, 0px); top: 0px; left: 0px; will-change: transform;">
                            <a class="dropdown-item" href="Home/Profile"><i class="fa fa-user"></i>Thông tin cá nhân</a>
                            <a class="dropdown-item" href="Home/ChangePassWord"><i class="fa fa-cog"></i>Đổi mật khẩu</a>
                            <a class="dropdown-item" href="https://youtu.be/0-u4w861c-w"><i class="fa-solid fa-circle-info"></i>Hướng dẫn sử dụng</a>
                            <li class="dropdown-divider"></li>
                            <a class="dropdown-item" href="Auth/Logout"><i class="fa fa-power-off"></i>Đăng xuất</a>
                        </ul>   

<?php } ?>

                <!-- END TOP-RIGHT TOOLBAR-->

            </div>

        </header>

        <!-- END HEADER-->