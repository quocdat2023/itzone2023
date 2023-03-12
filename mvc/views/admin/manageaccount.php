<div class="content-wrapper">
    <div class="page-heading">
        <h1 class="page-title">Quản lý tài khoản</h1>
    </div>
    <div class="page-content fade-in-up">

        <div class="row">

            <div class="col-lg-12">

                <div class="ibox">

                    <div class="ibox-head">

                        <div class="ibox-title">Bản phân quyền</div>

                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                            <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                        </div>

                    </div>

                    <div class="ibox-body">

                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0"
                            width="100%">

                            <thead style="position: sticky;top: 0" class="bg-primary text-white">

                                <tr>

                                    <th width="5%">STT</th>

                                    <!--<th>MSSV</th>-->

                                    <th width="25%px">Họ và tên</th>

                                    <th class="text-center" width="91px">Admin</th>

                                    <th class="text-center" width="91px">Quản lý</th>

                                    <th class="text-center" width="91px">Thành viên</th>

                                    <th class="text-center" width="91px">Khóa TK</th>

                                    <th class="text-center" width="91px">Reset PW</th>

                                </tr>

                            </thead>

                            <tbody>

                                <?php

                                $i = 1;

                                while ($row = mysqli_fetch_array($data["getallaccount"])) { ?>

                                <tr>

                                    <td width="5%"><?php echo $i++; ?></td>

                                    <!--<td><?php echo $row['id_student'] ?></td>-->

                                    <td><?php echo $row['fullname'] ?></td>

                                    <td class="text-center">

                                        <form action="Home/UpdateAccountAdmin" method="post">

                                            <input style="display: none" type="text" name="id_student"
                                                value="<?php echo $row['id_student'] ?>">

                                            <input style="display: none" type="text" name="id_role"
                                                value="<?php echo $row['admin'] ?>">

                                            <?php if ($row['admin'] == 1) { ?>

                                            <button style="height: 26px; width: 20px; border-radius: 50%;"
                                                class="btn btn-warning btn-sm"><i class="fa fa-user-gear"></i></button>

                                            <?php }?>

                                            <?php if ($row['admin'] == 0) { ?>

                                            <button style="height: 26px; width: 20px; border-radius: 50%;"
                                                class="btn btn-outline-secondary btn-sm"><i class="fa fa-user-gear"></i>

                                            </button>

                                            <?php }?>

                                        </form>

                                    </td>

                                    <td class="text-center">

                                        <form action="Home/UpdateAccountAttendance" method="post">

                                            <input type="text" style="display: none" name="id_student"
                                                value="<?php echo $row['id_student'] ?>">

                                            <input type="text" style="display: none" name="id_role"
                                                value="<?php echo $row['attendance'] ?>">

                                            <?php if ($row['attendance'] == 1) { ?>

                                            <button style="height: 26px; width: 20px; border-radius: 50%;"
                                                class="btn btn-success btn-sm"><i
                                                    class="fa-solid fa-check"></i></button>

                                            <?php }?>

                                            <?php if ($row['attendance'] == 0) { ?>

                                            <button style="height: 26px; width: 20px; border-radius: 50%;"
                                                class="btn btn-outline-secondary btn-sm"><i
                                                    class="fa-solid fa-check"></i> </button>

                                            <?php }?>

                                        </form>

                                    </td>

                                    <td class="text-center">

                                        <form action="Home/UpdateAccountPersonnel" method="post">

                                            <input type="text" style="display: none" name="id_student"
                                                value="<?php echo $row['id_student'] ?>">

                                            <input type="text" style="display: none" name="id_role"
                                                value="<?php echo $row['personnel'] ?>">

                                            <?php if ($row['personnel'] == 1) { ?>

                                            <button style="height: 26px; width: 20px; border-radius: 50%;"
                                                class="btn btn-primary btn-sm"><i
                                                    class="fa-solid fa-users"></i></button>

                                            <?php }?>

                                            <?php if ($row['personnel'] == 0) { ?>

                                            <button style="height: 26px; width: 20px; border-radius: 50%;"
                                                class="btn btn-outline-secondary btn-sm"><i
                                                    class="fa-solid fa-users"></i> </button>

                                            <?php }?>

                                        </form>

                                    </td>

                                    <td class="text-center">

                                        <form action="Home/UpdateAccountBlock" method="post">

                                            <input type="text" style="display: none" name="id_student"
                                                value="<?php echo $row['id_student'] ?>">

                                            <input type="text" style="display: none" name="id_role"
                                                value="<?php echo $row['block'] ?>">

                                            <?php if ($row['block'] == 1) { ?>

                                            <button style="height: 26px; width: 20px; border-radius: 50%;"
                                                class="btn btn-danger btn-sm"><i class="fa-solid fa-key"></i></button>

                                            <?php }?>

                                            <?php if ($row['block'] == 0) { ?>

                                            <button style="height: 26px; width: 20px; border-radius: 50%;"
                                                class="btn btn-outline-secondary btn-sm"><i
                                                    class="fa-solid fa-key"></i></button>

                                            <?php }?>

                                        </form>

                                    </td>

                                    <td class="text-center">

                                        <form action="Home/ResetAccount" method="post">

                                            <input type="text" style="display: none" name="id_student"
                                                value="<?php echo $row['id_student'] ?>">

                                            <input type="text" style="display: none" name="id_student"
                                                value="<?php echo $row['id_student'] ?>">

                                            <button style="height: 26px; width: 20px; border-radius: 50%;"
                                                class="btn btn-outline-secondary btn-sm"><i
                                                    class="fa-solid fa-refresh"></i> </button>

                                        </form>

                                    </td>

                                </tr>

                                <?php }

                                ?>



                            </tbody>

                        </table>

                    </div>

                </div>

            </div>
        </div>

    </div>

    <!-- END PAGE CONTENT-->