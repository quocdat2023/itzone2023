<div class="content-wrapper">

    <div class="page-heading">

        <h1 class="page-title">Quản lý sửa máy</h1>
        <?php 
        $currentPageUrl = 'https://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];

        ?>

    </div>

    <div class="page-content fade-in-up">

        <div class="ibox">

            <div class="ibox-head">

                <div class="ibox-title">

                    <?php 

                $i=1;

                                    while($row = mysqli_fetch_array($data["getallstatics"])){?><?php echo $row['semester']; echo "<br> Năm học  ".$row['schoolyear']; break;?> <?php }

                                    ?></div>

                <div class="ibox-tools">

                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>

                    <!-- <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>

                            <div class="dropdown-menu dropdown-menu-right">

                                <a class="dropdown-item">option 1</a>

                                <a class="dropdown-item">option 2</a>

                            </div> -->

                </div>

            </div>
            <?php if($admin == true){?>
            <div class="ibox-body">

                <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0"
                    width="100%">

                    <thead>

                        <tr>

                            <th width="5%">STT</th>
                            <!--<th class="text-center">Cập nhật</th>-->
                            <th width="auto">Tên người gửi</th>
                            <th width="auto">Số điện thoại</th>
                            <th width="auto">Ngày gửi</th>
                            <th>Mô tả</th>
                            <!-- <th>Tên người nhận</th> -->

                        </tr>

                    </thead>

                    <tbody>

                        <?php 

                                $i = 1;

                                    while($row = mysqli_fetch_array($data["getallstatic"])){?>

                        <tr>

                            <td class="stt"><?php echo $i++ ?></td>
                            <!--<td width="100" class="status  text-center">-->
                            <!--    <form action="Home/Done" method="POST">-->
                            <!--        <input style="display: none" type="text" name="id_fix"-->
                            <!--            value="<?php echo $row['id_fix'] ?>">-->
                            <!--        <input style="display: none" type="text" name="id_role"-->
                            <!--            value="<?php echo $row['status'] ?>">-->
                            <!--        <input style="display: none" type="text" name="schoolyear"-->
                            <!--            value="<?php echo $row['schoolyear'] ?>">-->
                            <!--        <input style="display: none" type="text" name="semester"-->
                            <!--            value="<?php echo $row['semester'] ?>">-->
                            <!--        <?php if ($row['status'] == 0) { ?>-->
                            <!--        <button style="height: 20px; width: 14px; border-radius: 50%;"-->
                            <!--            class="btn btn-outline-secondary btn-sm"><i class="fa-solid fa-check"></i>-->
                            <!--        </button>-->
                            <!--        <?php }?>-->
                            <!--        <?php if ($row['status'] == 1) { ?>-->
                            <!--        <button style="height: 20px; width: 14px; border-radius: 50%;"-->
                            <!--            class="btn btn-outline-primary btn-sm"><i class="fa-solid fa-check"></i>-->
                            <!--        </button>-->
                            <!--        <?php }?>-->
                            <!--        <?php if ($row['status'] == 2) { ?>-->
                            <!--        <button style="height: 20px; width: 14px; border-radius: 50%;"-->
                            <!--            class="btn btn-success btn-sm" disabled><i class="fa-solid fa-check"></i>-->
                            <!--        </button>-->
                            <!--        <?php }?>-->
                            <!--    </form>-->
                            <!--</td>-->
                            <td class="name_sender"><?php echo $row['fullname']; echo " - ".$row['id_student']; ?>
                                <?php if($row['shift']=="1"){
                                echo '<span class="badge badge-danger m-l-5"><i class="ti-alarm-clock"></i> 1</span>';}
                                elseif($row['shift']=="2"){
                                echo '<span class="badge badge-success m-l-5"><i class="ti-alarm-clock"></i> 2</span>';}
                                elseif($row['shift']=="3"){
                                    echo '<span class="badge badge-primary m-l-5"><i class="ti-alarm-clock"></i> 3</span>';}
                                else{
                                    echo '<span class="badge badge-secondary m-l-5"><i class="ti-alarm-clock"></i> 4</span>';}
                        
                            ?>
                                <!-- <?php echo '<div class="task-data"><small class="text-muted">'?><?php echo $row['date'];?><?php echo '</div></small>'?> -->
                                <?php if ($row['status'] == 0){
                                        echo "<div class='progress m-b-5 mt-2'>
                                        <div class='progress-bar progress-bar-warning' role='progressbar' style='width:16.6666666667%; height:4px;' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100'></div>
                                    </div>";
                                    }else if ($row['status'] == 1){
                                        echo "<div class='progress m-b-5 mt-2'>
                                        <div class='progress-bar progress-bar-primary' role='progressbar' style='width:33.333332%; height:4px;' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100'></div>
                                    </div>";
                                    }else if ($row['status'] ==3){
                                        echo "<div class='progress m-b-5 mt-2'>
                                        <div class='progress-bar progress-bar-primary' role='progressbar' style='width:50%; height:4px;' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100'></div>
                                    </div>";
                                    }else if ($row['status'] == 4){
                                        echo "<div class='progress m-b-5 mt-2'>
                                        <div class='progress-bar progress-bar-primary' role='progressbar' style='width:83.333328%; height:4px;' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100'></div>
                                    </div>";
                                    }else if ($row['status'] == 5){
                                        echo "<div class='progress m-b-5 mt-2'>
                                        <div class='progress-bar progress-bar-primary' role='progressbar' style='width:100%; height:4px;' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100'></div>
                                    </div>";
                                    }else if ($row['status'] == 6){
                                        echo "<div class='progress m-b-5 mt-2'>
                                        <div class='progress-bar progress-bar-primary' role='progressbar' style='width:16.6666666667%; height:4px;' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100'></div>
                                    </div>";
                                    }else{
                                        echo "<div class='progress m-b-5 mt-2'>
                                        <div class='progress-bar progress-bar-success' role='progressbar' style='width:16.6666666667%; height:4px;' aria-valuenow='50' aria-valuemin='0' aria-valuemax='100'></div>
                                    </div>";                                    }
                                    ?>
                            </td>
                            <td class="phone_sender"><?php echo $row['phone'] ?></td>

                            <td class="date_send"><?php echo $row['date'] ?></td>
                            <td class="description"><?php echo $row['description'] ?></td>

                            <!-- <td class="namektv"><?php echo $row['ktv']; echo " - ".$row['idktv']; ?></td> -->

                        </tr>

                        <?php }

                                ?>



                    </tbody>

                </table>

            </div>
            <?php }else{?>
            <div class="ibox-body">

                <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0"
                    width="100%">

                    <thead>

                        <tr>

                            <th width="5%">STT</th>
                            <th width="auto">Tên người gửi</th>
                            <th width="auto">Số điện thoại</th>
                            <!--<th width="auto">Ngày gửi</th>-->
                             <th width="auto">Mô tả</th>
                           <th width="auto">Trạng thái</th>
                        `   <th width="auto" class="text-center">Thao tác</th>

                            <!-- <th>Tên người nhận</th> -->

                        </tr>

                    </thead>

                    <tbody>

                        <?php 

                $i = 1;

                    while($row = mysqli_fetch_array($data["getallstaticps"])){?>

                        <tr>

                            <td class="stt"><?php echo $i++ ?></td>
                            <!-- <td>

                                <?php if ($row['status'] == 0) { ?>
                                <button style="height: 20px; width: 14px; border-radius: 50%;"
                                    class="btn btn-outline-secondary btn-sm"><i class="fa-solid fa-check"></i>
                                </button>
                                <?php }?>
                                <?php if ($row['status'] == 1) { ?>
                                <button style="height: 20px; width: 14px; border-radius: 50%;"
                                    class="btn btn-outline-primary btn-sm"><i class="fa-solid fa-check"></i>
                                </button>
                                <?php }?>
                                <?php if ($row['status'] == 2) { ?>
                                <button style="height: 20px; width: 14px; border-radius: 50%;"
                                    class="btn btn-success btn-sm" disabled><i class="fa-solid fa-check"></i>
                                </button>
                                <?php }?>
                            </td> -->

                            <td>
                                          <a data-html="true" data-toggle="popover" title="<?php echo $row['id_student'] ?>" data-content="
                                          Ngày: 
                                        <?php $timestamp = strtotime($row['date']); echo date("d-m-Y", $timestamp);echo "<br>Ca: ".$row['shift']; ?>
                                         <br>Giờ: <?php echo $row['timebook']?>
                                        <br>Password: <?php echo $row['password']?>
                                        "><?php echo $row['fullname'];?></a>

                                    </td>

                            <td class="phone_sender"><?php echo $row['phone'] ?></td>

                            <!--<td class="date_send"><?php echo $row['date'] ?></td>-->
                            <td class="description"><?php echo $row['description'] ?></td>
                             <td class="status text-center"><?php if ($row['status'] == 0){

                                        echo '<span class="badge badge-warning">Đang tìm kiếm KTV</span>';

                                    }else if ($row['status'] == 1){

                                        echo '<span class="badge badge-primary">Đã có KTV tiếp nhận</span>';

                                    }else if ($row['status'] == 3){

                                        echo '<span class="badge badge-danger">KTV đang hỗ trợ</span>';

                                    }else if ($row['status'] == 4){

                                        echo '<span class="badge badge-secondary">Đã hỗ trợ xong</span>';

                                    }else if ($row['status'] == 6){

                                        echo '<span class="badge badge-info">Không thể sửa</span>';

                                    }else if ($row['status'] == 7){

                                        echo '<span class="badge badge-danger">Hủy lịch</span>';

                                    }else if ($row['status'] == 5){

                                        echo '<span class="badge badge-success">Đã bàn giao máy</span>';

                                    }

                                    ?></td>

                               <td width="100" class="status  text-center">
                                <div class="btn-group">
                                    <button class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown"><i
                                            class="fa fa-cogs"></i>Thao tác <i class="fa fa-angle-down"></i></button>
                                    <ul class="dropdown-menu">
                                        <li style="width: 78%">
                                            <form action="Home/Recive" method="post">
                                                <input style="display: none" type="text" name="id_fix"
                                                    value="<?php echo $row['id_fix'] ?>">
                                                <input style="display: none" type="text" name="curentpage"
                                                    value="<?php echo $currentPageUrl; ?>">
                                                <input style="display: none" type="text" name="id_role"
                                                    value="<?php echo $row['status'] ?>">
                                                <input style="display: none" type="text" name="schoolyear"
                                                    value="<?php echo $row['schoolyear'] ?>">
                                                <input style="display: none" type="text" name="semester"
                                                    value="<?php echo $row['semester'] ?>"> <button
                                                    class="dropdown-item" href="javascript:;"><i
                                                        class="fa-solid fa-user-check text-danger"></i> Tiếp nhận thông tin</button>
                                            </form>

                                        </li>
                                        <li style="width: 78%">
                                            <form action="Home/Cancel" method="post">
                                                <input style="display: none" type="text" name="id_fix"
                                                    value="<?php echo $row['id_fix'] ?>">
                                                      <input style="display: none" type="text" name="curentpage"
                                                    value="<?php echo $currentPageUrl; ?>">
                                                <input style="display: none" type="text" name="id_role"
                                                    value="<?php echo $row['status'] ?>">
                                                <input style="display: none" type="text" name="schoolyear"
                                                    value="<?php echo $row['schoolyear'] ?>">
                                                <input style="display: none" type="text" name="semester"
                                                    value="<?php echo $row['semester'] ?>"> 
                                                                                                    <button class="dropdown-item" href="javascript:;"><i
                                                        class="fa fa-xmark" style="color: orgrange" ></i> Hủy nhận máy</button>
                                            </form>

                                        </li>
                                        <li style="width: 78%">
                                            <form action="Home/Support" method="post">
                                                <input style="display: none" type="text" name="id_fix"
                                                    value="<?php echo $row['id_fix'] ?>">
                                                      <input style="display: none" type="text" name="curentpage"
                                                    value="<?php echo $currentPageUrl; ?>">
                                                <input style="display: none" type="text" name="id_role"
                                                    value="<?php echo $row['status'] ?>">
                                                <input style="display: none" type="text" name="schoolyear"
                                                    value="<?php echo $row['schoolyear'] ?>">
                                                <input style="display: none" type="text" name="semester"
                                                    value="<?php echo $row['semester'] ?>"> <button
                                                    class="dropdown-item" href="javascript:;"><i
                                                        class="fa-solid fa-laptop-medical text-success"></i> Đang hỗ trợ</button>
                                            </form>

                                        </li>
                                        <li style="width: 78%">
                                            <form action="Home/Done" method="post">
                                                <input style="display: none" type="text" name="id_fix"
                                                    value="<?php echo $row['id_fix'] ?>">
                                                      <input style="display: none" type="text" name="curentpage"
                                                    value="<?php echo $currentPageUrl; ?>">
                                                <input style="display: none" type="text" name="id_role"
                                                    value="<?php echo $row['status'] ?>">
                                                <input style="display: none" type="text" name="schoolyear"
                                                    value="<?php echo $row['schoolyear'] ?>">
                                                <input style="display: none" type="text" name="semester"
                                                    value="<?php echo $row['semester'] ?>"> <button
                                                    class="dropdown-item" href="javascript:;"><i
                                                        class="fa-solid fa-circle-check text-warning"></i> Hỗ trợ xong</button>
                                            </form>

                                        </li>
                                        <li style="width: 78%">
                                            <form action="Home/Convert" method="post">
                                                <input style="display: none" type="text" name="id_fix"
                                                    value="<?php echo $row['id_fix'] ?>">
                                                      <input style="display: none" type="text" name="curentpage"
                                                    value="<?php echo $currentPageUrl; ?>">
                                                <input style="display: none" type="text" name="id_role"
                                                    value="<?php echo $row['status'] ?>">
                                                <input style="display: none" type="text" name="schoolyear"
                                                    value="<?php echo $row['schoolyear'] ?>">
                                                <input style="display: none" type="text" name="semester"
                                                    value="<?php echo $row['semester'] ?>"> <button
                                                    class="dropdown-item" href="javascript:;"><i
                                                        class="fa-solid fa-laptop text-secondary"></i> Bàn giao máy</button>
                                            </form>

                                        </li>
                                        
                                          <li style="width: 78%">
                                            <form action="Home/Cannot" method="post">
                                                <input style="display: none" type="text" name="id_fix"
                                                    value="<?php echo $row['id_fix'] ?>">
                                                      <input style="display: none" type="text" name="curentpage"
                                                    value="<?php echo $currentPageUrl; ?>">
                                                <input style="display: none" type="text" name="id_role"
                                                    value="<?php echo $row['status'] ?>">
                                                <input style="display: none" type="text" name="schoolyear"
                                                    value="<?php echo $row['schoolyear'] ?>">
                                                <input style="display: none" type="text" name="semester"
                                                    value="<?php echo $row['semester'] ?>"> <button
                                                    class="dropdown-item" href="javascript:;"><i
                                                        class="fa-solid fa-cancel text-primary"></i> Không thể sửa</button>
                                            </form>

                                        </li>
                                        <li style="width: 78%">
                                            <form action="Home/CancelCalendar" method="post">
                                                <input style="display: none" type="text" name="id_fix"
                                                    value="<?php echo $row['id_fix'] ?>">
                                                      <input style="display: none" type="text" name="curentpage"
                                                    value="<?php echo $currentPageUrl; ?>">
                                                <input style="display: none" type="text" name="id_role"
                                                    value="<?php echo $row['status'] ?>">
                                                <input style="display: none" type="text" name="schoolyear"
                                                    value="<?php echo $row['schoolyear'] ?>">
                                                <input style="display: none" type="text" name="semester"
                                                    value="<?php echo $row['semester'] ?>">
                                                <button class="dropdown-item" href="javascript:;"><i
                                                        class="fa fa-trash text-info"></i> Hủy lịch</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </td>

                            <!-- <td class="namektv"><?php echo $row['ktv']; echo " - ".$row['idktv']; ?></td> -->

                        </tr>

                        <?php }

                ?>



                    </tbody>

                </table>

            </div>
            <?php }?>
        </div>

    </div>

    <!-- END PAGE CONTENT-->