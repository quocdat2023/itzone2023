<?php
$admin = $this->PermissionModel->Admin(Session::get('id_student'));

$block = $this->PermissionModel->Block(Session::get('id_student'));

$personnel = $this->PermissionModel->Personnel(Session::get('id_student'));

$attendance = $this->PermissionModel->Attendance(Session::get('id_student'));
?>
<nav class="page-sidebar" id="sidebar">

    <div id="sidebar-collapse">

        <div class="admin-block d-flex">

            <div>
 <img class="img-circle" src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" width="45px" />
            </div>

            <div class="admin-info">

                <div class="font-strong"><?php echo Session::get('fullname')?></div>
                <small><i class="fa fa-circle text-success"></i> Online</small>

            </div>

        </div>

        <?php 

        if($admin == true){?>

        <ul id="myUL" class="side-menu metismenu">

            <li>

                <a target="_self" class="active" href="Home/Dashboard"><i class="sidebar-item-icon fa fa-gauge"></i>

                    <span class="nav-label">Bảng điều khiển</span>

                </a>

            </li>

            <li class="heading">THAO TÁC CHUNG</li>

          <li>

                <a target="_self" href="Home/ManageMember"><i class="sidebar-item-icon fa fa-users-gear"
                        aria-hidden="true"></i>

                    <span class="nav-label">Quản lý thành viên</span></a>

            </li> 
            <li>

                <a target="_self" href="Home/ManageSemesterSchoolYear"><i class="sidebar-item-icon fa fa-calendar"></i>

                    <span class="nav-label">Quản lý học kỳ & năm học</span></a>

            </li>
          <li>

                <a target="_self" href="Home/ManageTeam"><i class="fa-brands sidebar-item-icon fa-teamspeak"></i>
                    <span class="nav-label">Quản lý team</span></a>

            </li>

            <li>

                <a target="_self" href="Home/ManageEvent"><i class="sidebar-item-icon fa fa-gift"></i>

                    <span class="nav-label">Quản lý sự kiện & bài viết</span></a>

            </li>

            <li>

                <a target="_self" href="Home/ManageAccount"><i class="sidebar-item-icon fa fa-user-gear"></i>

                    <span class="nav-label">Quản lý tài khoản</span></a>

            </li>

            <li>

                <a target="_self" href="Home/ManageCalendar"><i class="sidebar-item-icon fa fa-calendar-check"></i>

                    <span class="nav-label">Quản lý lịch trực</span></a>

            </li>

                      <li>

                <a target="_self" href="javascript:;"><i class="sidebar-item-icon fa-solid fa-laptop-medical"></"></i>

                    <span class="nav-label">Quản lý sửa máy</span><i class="fa fa-angle-left arrow"></i></a>

                <ul class="nav-2-level collapse">

                    <li>

                        <a target="_self" href="Home/StaticFix">Thống kê sửa máy</a>

                    </li>

                    <li>

                        <a target="_self" href="Home/ManageFix">Dữ liệu sửa máy</a>

                    </li>

                </ul>



            </li>

            <li>

                <a target="_self" href="javascript:;"><i class="sidebar-item-icon fa-solid fa-circle-check"></"></i>

                    <span class="nav-label">Quản lý điểm danh</span><i class="fa fa-angle-left arrow"></i></a>

                <ul class="nav-2-level collapse">

                    <li>

                        <a target="_self" href="Home/StaticAttendance">Thống kê điểm danh</a>

                    </li>

                    <li>

                        <a target="_self" href="Home/Attendance">Dữ liệu điểm danh</a>

                    </li>

                </ul>

            </li>

            <li class="heading">THAO TÁC KHÁC</li>

            <li>

                <a target="_blank"
                    href="https://youtu.be/0-u4w861c-w"><i
                        class="sidebar-item-icon fa fa-book"></i>

                    <span class="nav-label">Hướng dẫn sử dụng</span></a>

            </li>
            <li>

                <a target="_self" href="Home/InfoSoftWare"><i class="sidebar-item-icon fa fa-circle-info"></i>

                    <span class="nav-label">Thông tin phần mềm</span></a>

            </li>

            <li>

                <a target="_self" href="Home/ChangePassWord"><i class="sidebar-item-icon fa fa-key"></i>

                    <span class="nav-label">Đổi mật khẩu</span></a>

            </li>
            <li>

                <a target="_self" href="Auth/Logout"><i class="sidebar-item-icon fa fa-power-off"></i>

                    <span class="nav-label">Đăng xuất</span></a>

            </li>

        </ul>

        <?php

            

        }else if($block == true){?>

        <ul id="myUL" class="side-menu metismenu">



            <li class="heading">THAO TÁC KHÁC</li>
            <li>

                <a target="_self" href="Home/InfoSoftWare"><i class="sidebar-item-icon fa fa-circle-info"></i>

                    <span class="nav-label">Thông tin phần mềm</span></a>

            </li>
            <li>

                <a target="_self" href="Home/ChangePassWord"><i class="sidebar-item-icon fa fa-key"></i>

                    <span class="nav-label">Đổi mật khẩu</span></a>

            </li>

            <li>

                <a target="_self" href="Auth/Logout"><i class="sidebar-item-icon fa fa-power-off"></i>

                    <span class="nav-label">Đăng xuất</span></a>

            </li>

        </ul>

        <?php }else if($personnel == true){?>

        <ul id="myUL" class="side-menu metismenu">

            <li>

                <a target="_self" class="active" href="Home/Dashboard"><i class="sidebar-item-icon fa fa-gauge"></i>

                    <span class="nav-label">Bảng điều khiển</span>

                </a>

            </li>

            <li class="heading">THAO TÁC CHUNG</li>

            <li>

                <a target="_self" href="Home/ManageCalendar"><i class="sidebar-item-icon fa fa-calendar-check"></i>

                    <span class="nav-label">Quản lý lịch trực</span></a>

            </li>
            <li>

                <a target="_self" href="javascript:;"><i class="sidebar-item-icon fa-solid fa-laptop-medical"></"></i>

                    <span class="nav-label">Quản lý sửa máy</span><i class="fa fa-angle-left arrow"></i></a>

                <ul class="nav-2-level collapse">

                    <li>

                        <a target="_self" href="Home/StaticFix">Thống kê dữ liệu</a>

                    </li>

                    <li>

                        <a target="_self" href="Home/ManageFix">Thêm mới dữ liệu</a>

                    </li>

                </ul>



            </li>
          


            <li>

                <a target="_self" href="Home/StaticAttendance"><i
                        class="sidebar-item-icon fa-solid fa-circle-check"></i>

                    <span class="nav-label">Dữ liệu điểm danh</span></a>

            </li>
            <li class="heading">THAO TÁC KHÁC</li>
            <li>

                <a target="_self" href="Home/InfoSoftWare"><i class="sidebar-item-icon fa fa-circle-info"></i>

                    <span class="nav-label">Thông tin phần mềm</span></a>

            </li>
            <li>

                <a target="_self" href="Home/ChangePassWord"><i class="sidebar-item-icon fa fa-key"></i>

                    <span class="nav-label">Đổi mật khẩu</span></a>

            </li>

            <li>

                <a target="_self" href="Auth/Logout"><i class="sidebar-item-icon fa fa-power-off"></i>

                    <span class="nav-label">Đăng xuất</span></a>

            </li>


        </ul>

        <?php }

        else if($attendance == true){?>

        <ul id="myUL" class="side-menu metismenu">

            <li>

                <a target="_self" class="active" href="Home/Dashboard"><i class="sidebar-item-icon fa fa-gauge"></i>

                    <span class="nav-label">Bảng điều khiển</span>

                </a>

            </li>

            <li class="heading">THAO TÁC CHUNG</li>

            <li>

                <a target="_self" href="Home/Attendance"><i class="sidebar-item-icon fa-solid fa-circle-check"></i>

                    <span class="nav-label">Điểm danh ca trực</span></a>

            </li>

            <li>

                <a target="_self" href="Home/ManageCalendar"><i class="sidebar-item-icon fa fa-calendar-check"></i>

                    <span class="nav-label">Đăng ký lịch trực</span></a>

            </li>

                      <li>

                <a target="_self" href="javascript:;"><i class="sidebar-item-icon fa-solid fa-laptop-medical"></"></i>

                    <span class="nav-label">Quản lý sửa máy</span><i class="fa fa-angle-left arrow"></i></a>

                <ul class="nav-2-level collapse">

                    <li>

                        <a target="_self" href="Home/StaticFix">Thống kê sửa máy</a>

                    </li>

                    <li>

                        <a target="_self" href="Home/ManageFix">Dữ liệu sửa máy</a>

                    </li>

                </ul>



            </li>

            <li>

                <a target="_self" href="javascript:;"><i class="sidebar-item-icon fa-solid fa-circle-check"></"></i>

                    <span class="nav-label">Quản lý điểm danh</span><i class="fa fa-angle-left arrow"></i></a>

                <ul class="nav-2-level collapse">

                    <li>

                        <a target="_self" href="Home/StaticAttendance">Thống kê điểm danh</a>

                    </li>

                    <li>

                        <a target="_self" href="Home/Attendance">Dữ liệu điểm danh</a>

                    </li>

                </ul>

            </li>


            <!-- <li>

                <a target="_self" href="javascript:;"><i class="sidebar-item-icon fa-solid fa-circle-check"></"></i>

                    <span class="nav-label">Quản lý điểm danh</span><i class="fa fa-angle-left arrow"></i></a>

                <ul class="nav-2-level collapse">

                    <li>

                        <a target="_self" href="Home/StaticAttendance">Thống kê điểm danh</a>

                    </li>

                    <li>

                        <a target="_self" href="Home/Attendance">Điểm danh</a>

                    </li>

                </ul>

            </li>       -->

            <li class="heading">THAO TÁC KHÁC</li>
            <li>

                <a target="_self" href="Home/InfoSoftWare"><i class="sidebar-item-icon fa fa-circle-info"></i>

                    <span class="nav-label">Thông tin phần mềm</span></a>

            </li>
            <li>

                <a target="_self" href="Home/ChangePassWord"><i class="sidebar-item-icon fa fa-key"></i>

                    <span class="nav-label">Đổi mật khẩu</span></a>

            </li>

            <li>

                <a target="_self" href="Auth/Logout"><i class="sidebar-item-icon fa fa-power-off"></i>

                    <span class="nav-label">Đăng xuất</span></a>

            </li>


        </ul>

        <?php }?>



    </div>

</nav>

<div class="theme-config">
        <div class="theme-config-toggle"><i class="fa fa-cog theme-config-show"></i><i class="ti-close theme-config-close"></i></div>
        <div class="theme-config-box">
            <div class="text-center font-18 m-b-20">SETTINGS</div>
            <div class="font-strong">LAYOUT OPTIONS</div>
            <div class="check-list m-b-20 m-t-10">
             
                <label class="ui-checkbox ui-checkbox-gray">
                    <input class="js-sidebar-toggler" type="checkbox">
                    <span class="input-span"></span>Collapse sidebar</label>
            </div>
            <div class="font-strong">LAYOUT STYLE</div>
            <div class="m-t-10">
                <label class="ui-radio ui-radio-gray m-r-10">
                    <input type="radio" name="layout-style" value="" checked="">
                    <span class="input-span"></span>Fluid</label>
                <label class="ui-radio ui-radio-gray">
                    <input type="radio" name="layout-style" value="1">
                    <span class="input-span"></span>Boxed</label>
            </div>
</div>
    </div><script>
function myFunction() {

    return toastr.warning("Chức năng đang được cập nhật vui lòng thử lại sau!");

}
</script>

