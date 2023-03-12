<?php



$admin = $this->PermissionModel->Admin(Session::get('id_student'));



$block = $this->PermissionModel->Block(Session::get('id_student'));



$personnel = $this->PermissionModel->Personnel(Session::get('id_student'));



$attendance = $this->PermissionModel->Attendance(Session::get('id_student'));



 ?>

<style>
.pyro > .before, .pyro > .after {
  position: absolute;
  width: 7px;
  height: 7px;
  pointer-events: none;
  z-index: 99999999;
  border-radius: 50%;
  box-shadow: -120px -218.66667px blue, 248px -16.66667px #00ff84, 190px 16.33333px #002bff, -113px -308.66667px #ff009d, -109px -287.66667px #ffb300, -50px -313.66667px #ff006e, 226px -31.66667px #ff4000, 180px -351.66667px #ff00d0, -12px -338.66667px #00f6ff, 220px -388.66667px #99ff00, -69px -27.66667px #ff0400, -111px -339.66667px #6200ff, 155px -237.66667px #00ddff, -152px -380.66667px #00ffd0, -50px -37.66667px #00ffdd, -95px -175.66667px #a6ff00, -88px 10.33333px #0d00ff, 112px -309.66667px #005eff, 69px -415.66667px #ff00a6, 168px -100.66667px #ff004c, -244px 24.33333px #ff6600, 97px -325.66667px #ff0066, -211px -182.66667px #00ffa2, 236px -126.66667px #b700ff, 140px -196.66667px #9000ff, 125px -175.66667px #00bbff, 118px -381.66667px #ff002f, 144px -111.66667px #ffae00, 36px -78.66667px #f600ff, -63px -196.66667px #c800ff, -218px -227.66667px #d4ff00, -134px -377.66667px #ea00ff, -36px -412.66667px #ff00d4, 209px -106.66667px #00fff2, 91px -278.66667px #000dff, -22px -191.66667px #9dff00, 139px -392.66667px #a6ff00, 56px -2.66667px #0099ff, -156px -276.66667px #ea00ff, -163px -233.66667px #00fffb, -238px -346.66667px #00ff73, 62px -363.66667px #0088ff, 244px -170.66667px #0062ff, 224px -142.66667px #b300ff, 141px -208.66667px #9000ff, 211px -285.66667px #ff6600, 181px -128.66667px #1e00ff, 90px -123.66667px #c800ff, 189px 70.33333px #00ffc8, -18px -383.66667px #00ff33, 100px -6.66667px #ff008c;
  -moz-animation: 1s bang ease-out infinite backwards, 1s gravity ease-in infinite backwards, 5s position linear infinite backwards;
  -webkit-animation: 1s bang ease-out infinite backwards, 1s gravity ease-in infinite backwards, 5s position linear infinite backwards;
  -o-animation: 1s bang ease-out infinite backwards, 1s gravity ease-in infinite backwards, 5s position linear infinite backwards;
  -ms-animation: 1s bang ease-out infinite backwards, 1s gravity ease-in infinite backwards, 5s position linear infinite backwards;
  animation: 1s bang ease-out infinite backwards, 1s gravity ease-in infinite backwards, 5s position linear infinite backwards; }

.pyro > .after {
  -moz-animation-delay: 1.25s, 1.25s, 1.25s;
  -webkit-animation-delay: 1.25s, 1.25s, 1.25s;
  -o-animation-delay: 1.25s, 1.25s, 1.25s;
  -ms-animation-delay: 1.25s, 1.25s, 1.25s;
  animation-delay: 1.25s, 1.25s, 1.25s;
  -moz-animation-duration: 1.25s, 1.25s, 6.25s;
  -webkit-animation-duration: 1.25s, 1.25s, 6.25s;
  -o-animation-duration: 1.25s, 1.25s, 6.25s;
  -ms-animation-duration: 1.25s, 1.25s, 6.25s;
  animation-duration: 1.25s, 1.25s, 6.25s; }

@-webkit-keyframes bang {
  from {
    box-shadow: 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white; } }
@-moz-keyframes bang {
  from {
    box-shadow: 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white; } }
@-o-keyframes bang {
  from {
    box-shadow: 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white; } }
@-ms-keyframes bang {
  from {
    box-shadow: 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white; } }
@keyframes bang {
  from {
    box-shadow: 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white, 0 0 white; } }
@-webkit-keyframes gravity {
  to {
    transform: translateY(200px);
    -moz-transform: translateY(200px);
    -webkit-transform: translateY(200px);
    -o-transform: translateY(200px);
    -ms-transform: translateY(200px);
    opacity: 0; } }
@-moz-keyframes gravity {
  to {
    transform: translateY(200px);
    -moz-transform: translateY(200px);
    -webkit-transform: translateY(200px);
    -o-transform: translateY(200px);
    -ms-transform: translateY(200px);
    opacity: 0; } }
@-o-keyframes gravity {
  to {
    transform: translateY(200px);
    -moz-transform: translateY(200px);
    -webkit-transform: translateY(200px);
    -o-transform: translateY(200px);
    -ms-transform: translateY(200px);
    opacity: 0; } }
@-ms-keyframes gravity {
  to {
    transform: translateY(200px);
    -moz-transform: translateY(200px);
    -webkit-transform: translateY(200px);
    -o-transform: translateY(200px);
    -ms-transform: translateY(200px);
    opacity: 0; } }
@keyframes gravity {
  to {
    transform: translateY(200px);
    -moz-transform: translateY(200px);
    -webkit-transform: translateY(200px);
    -o-transform: translateY(200px);
    -ms-transform: translateY(200px);
    opacity: 0; } }
@-webkit-keyframes position {
  0%, 19.9% {
    margin-top: 10%;
    margin-left: 40%; }

  20%, 39.9% {
    margin-top: 40%;
    margin-left: 30%; }

  40%, 59.9% {
    margin-top: 20%;
    margin-left: 70%; }

  60%, 79.9% {
    margin-top: 30%;
    margin-left: 20%; }

  80%, 99.9% {
    margin-top: 30%;
    margin-left: 80%; } }
@-moz-keyframes position {
  0%, 19.9% {
    margin-top: 10%;
    margin-left: 40%; }

  20%, 39.9% {
    margin-top: 40%;
    margin-left: 30%; }

  40%, 59.9% {
    margin-top: 20%;
    margin-left: 70%; }

  60%, 79.9% {
    margin-top: 30%;
    margin-left: 20%; }

  80%, 99.9% {
    margin-top: 30%;
    margin-left: 80%; } }
@-o-keyframes position {
  0%, 19.9% {
    margin-top: 10%;
    margin-left: 40%; }

  20%, 39.9% {
    margin-top: 40%;
    margin-left: 30%; }

  40%, 59.9% {
    margin-top: 20%;
    margin-left: 70%; }

  60%, 79.9% {
    margin-top: 30%;
    margin-left: 20%; }

  80%, 99.9% {
    margin-top: 30%;
    margin-left: 80%; } }
@-ms-keyframes position {
  0%, 19.9% {
    margin-top: 10%;
    margin-left: 40%; }

  20%, 39.9% {
    margin-top: 40%;
    margin-left: 30%; }

  40%, 59.9% {
    margin-top: 20%;
    margin-left: 70%; }

  60%, 79.9% {
    margin-top: 30%;
    margin-left: 20%; }

  80%, 99.9% {
    margin-top: 30%;
    margin-left: 80%; } }
@keyframes position {
  0%, 19.9% {
    margin-top: 10%;
    margin-left: 40%; }

  20%, 39.9% {
    margin-top: 40%;
    margin-left: 30%; }

  40%, 59.9% {
    margin-top: 20%;
    margin-left: 70%; }

  60%, 79.9% {
    margin-top: 30%;
    margin-left: 20%; }

  80%, 99.9% {
    margin-top: 30%;
    margin-left: 80%; } }


.clock {

    position: absolute;

    margin: auto;

    height: 400px;

    width: 400px;

    background-color: #fff;

    border-radius: 50%;

    border: 24px solid #DF554C;

    background-image:

        radial-gradient(circle at center, #507D9C 8px, transparent 8px),

        radial-gradient(circle at center, white 50%, transparent 50%, transparent 65%, white 65%),

        linear-gradient(to right, transparent 50%, #507D9C 50%, transparent 51%),

        linear-gradient(to bottom, transparent 50%, #507D9C 50%, transparent 51%),

        linear-gradient(-30deg, transparent 50%, #507D9C 50%, transparent 51%),

        linear-gradient(30deg, transparent 50%, #507D9C 50%, transparent 51%),

        linear-gradient(60deg, transparent 50%, #507D9C 50%, transparent 51%),

        linear-gradient(-60deg, transparent 50%, #507D9C 50%, transparent 51%);

}



.hour-hand {

    position: absolute;

    height: 80px;

    width: 8px;

    margin: auto;

    top: -20%;

    left: 0;

    bottom: 0;

    right: 0;

    border-radius: 4px;

    background-color: #507D9C;

    transform-origin: bottom;

    transform: rotate(0deg);

}



.minute-hand {

    position: absolute;

    height: 120px;

    width: 8px;

    margin: auto;

    top: -30%;

    left: 0;

    bottom: 0;

    right: 0;

    border-radius: 4px;

    background-color: #507D9C;

    transform-origin: bottom;

    transform: rotate(90deg);

}



.second-hand {

    position: absolute;

    height: 120px;

    width: 2px;

    margin: auto;

    top: -30%;

    left: 0;

    bottom: 0;

    right: 0;

    border-radius: 4px;

    background-color: #507D9C;

    transform-origin: bottom;

    transform: rotate(180deg);

}

</style>

<?php ?>

<div class="content-wrapper">



    <?php 

if($block == false){

?>

    <!-- START PAGE CONTENT-->

    <div class="page-content fade-in-up">

        <!-- Modal -->

        <!-- The Modal -->

        <div class="modal" id="myModal">

            <div class="modal-dialog">

                <div class="modal-content">



                    <!-- Modal Header -->

                    <div class="modal-header">

                        <h4 class="modal-title">Modal Heading</h4>

                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>



                    <!-- Modal body -->

                    <div class="modal-body">

                        <form id="updateValues" action="update.php" method="POST" class="form">

                            <div class="form-group">

                                <label for="name">NAME</label>

                                <input type="text" class="form-control" name="name" id="name_sender">

                            </div>

                            <form>

                    </div>



                    <!-- Modal footer -->

                    <div class="modal-footer">

                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                    </div>



                </div>

            </div>

        </div>
        <!--pháo hoa-->
        <!--<div class="pyro"><div class="before"></div><div class="after"></div></div>-->

        <div class="row">
            <div class="col-lg-6">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Thành viên xuất sắc</div>
   				  <div class="ibox-tools">

                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>

                            <a class="fullscreen-link"><i class="fa fa-expand"></i></a>

                        </div>

                            </div>
                            <div class="ibox-body">
                            <div class="text-center">
                                 <!--<img src="https://cdn3.emoji.gg/emojis/4412_Cup.gif" width="15%;">-->

</div>
                                <ul class="media-list media-list-divider m-0">
                      <?php 
			$i = 1;
                            while($row = mysqli_fetch_array($data["gettopfive"])){?>

                                    <li class="media">
                                        <a class="media-img" href="javascript:;">
                                            <div style="background: #EDF4FF; width: 40px; height: 40px; border-radius: 6px; margin-left: 12px; display: -webkit-box; display: -ms-flexbox; display: flex; -webkit-box-align: center; -ms-flex-align: center; align-items: center; justify-content: center; -webkit-justify-content: center; -ms-flex-pack: center;">
                                                <!--<img src="https://preschool.dreamguystech.com/template-rtl/assets/img/icons/award-icon-0<?php  echo $i++;?>.svg" width="25px;">-->
                                              <img src="https://preschool.dreamguystech.com/template-rtl/assets/img/icons/dash-icon-01.svg" width="25px;">
                                             </div> 
                                        </a>
                                        <div class="media-body">
                                            <div class="media-heading">
                                                <a href="javascript:;"><?php echo $row['fullsname'];?></a>
                                                <span class="font-16 float-right">
                   <div style="background: #EDF4FF; width: 40px; height: 40px; border-radius: 6px; margin-left: 12px; display: -webkit-box; display: -ms-flexbox; display: flex; -webkit-box-align: center; -ms-flex-align: center; align-items: center; justify-content: center; -webkit-justify-content: center; -ms-flex-pack: center;">
						<?php
							if(($i - 1) == 1){
								echo '<img src="https://cdn-icons-png.flaticon.com/512/2583/2583344.png" width="25px;">';
                                                        }else if(($i - 1) == 2){
								echo '<img src="https://cdn-icons-png.flaticon.com/512/2583/2583319.png" width="25px;">';
						        }else if(($i - 1) == 3){
								echo '<img src="https://cdn-icons-png.flaticon.com/512/2583/2583434.png" width="25px;">';
						        }
						?>
					</div>	
						</span>
                                            </div>
                                            <div class="font-13">Đã hoành thành được <b><?php echo $row['count'];?></b> máy.</div>
                                        </div>
                                    </li>
                                       <?php }
                        ?>
                                </ul>
                            </div>
                                                 </div>
                    </div>
             <div class="col-lg-6">
                  <div class="row">

            <div class="col-lg-6 col-md-6">

                <div class="ibox bg-success color-white widget-stat">

                    <div class="ibox-body">

                        <h2 class="m-b-5 font-strong"><?php echo $data['countsupport'];?></h2>

                        <div class="m-b-5">MÁY ĐANG CHỜ SỬA</div>
                        <i class="ti-heart-broken widget-stat-icon"></i>

                        <!-- <div><i class="fa fa-level-up m-r-5"></i><small>25% higher</small></div> -->

                    </div>

                </div>

            </div>

            <div class="col-lg-6 col-md-6">

                <div class="ibox bg-info color-white widget-stat">

                    <div class="ibox-body">

                        <h2 class="m-b-5 font-strong"><?php echo $data['countsupportfinal'];?></h2>

                        <div class="m-b-5">MÁY ĐÃ SỬA</div><i class="ti-check widget-stat-icon"></i>

                        <!-- <div><i class="fa fa-level-up m-r-5"></i><small>17% higher</small></div> -->

                    </div>

                </div>

            </div>

            <div class="col-lg-6 col-md-6">

                <div class="ibox bg-warning color-white widget-stat">

                    <div class="ibox-body">

                        <h2 class="m-b-5 font-strong"><?php echo $data['countevent']-1;?></h2>

                        <div class="m-b-5">SỰ KIỆN HÔM NAY</div><i class="ti-gift widget-stat-icon"></i>

                    </div>

                </div>

            </div>

            <div class="col-lg-6 col-md-6">

                <div class="ibox bg-danger color-white widget-stat">

                    <div class="ibox-body">

                        <h2 class="m-b-5 font-strong"><?php echo $data['countmember']-1;?></h2>

                        <div class="m-b-5">SỐ LƯỢNG THÀNH VIÊN</div><i class="ti-user widget-stat-icon"></i>


                    </div>

                </div>

            </div>

        </div>
             </div>
        </div>


        <div class="row">

            <div class="col-lg-12">

                <div class="ibox">

                    <div class="ibox-head">

                        <div class="ibox-title">Danh sách máy cần sửa</div>

                        <div class="ibox-tools">

                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>

                            <!-- <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>

                            <div class="dropdown-menu dropdown-menu-right">

                                <a class="dropdown-item">option 1</a>

                                <a class="dropdown-item">option 2</a>

                            </div> -->
                        </div>

                    </div>

                    <div class="ibox-body">

                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0"

                            width="100%">

                            <thead>

                                <tr>

                                    <th width="1%">#</th>

                                    <th width="auto">Người gửi</th>

                                    <th width="auto">SĐT</th>
                                     <th width="auto">Mô tả</th>

                                    <th width="auto">KTV</th>

                                    <th class="text-center" width="80px">Trạng thái</th>

                                    <?php

                                    if($admin){

                                    }else{?>

                                    <th width="auto">Xác nhận</th>

                                    <?php

                                    }

                                    ?>

                                </tr>

                            </thead>

                            <tbody>

                                <?php 

                                $i = 1;

                                    while($row = mysqli_fetch_array($data["support_fix"])){?>

                                <tr>
              
                                    <td class="stt"><?php echo $i++ ?></td>
                                    <td>
                                          <a data-html="true" data-toggle="popover" title="<?php echo $row['id_student'] ?>" data-content="
                                          Ngày: 
                                        <?php $timestamp = strtotime($row['date']); echo date("d-m-Y", $timestamp);echo "<br>Giờ: ".$row['timebook']; ?>
                                        <br>Password: <?php echo $row['password']?>
                                        "><?php echo $row['fullname'];?></a>

                                    </td>

                                    <td class="phone_sender"><?php echo $row['phone'] ?></td>

                                     <td class="phone_sender"><?php echo $row['description'] ?></td>


                                    </td>

                                    <td class="name_sender"><?php

                                    if($row['fullnamektv'] == "admin"){

                                        echo "";

                                    }else{

                                        echo $row['fullnamektv'];

                                    }

                                    ?></td>

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

                                    <?php

                                    if($admin){

                                    }else{?>

                                    <td class="text-center">

                                        <form  action="" method="post">

                                        </form>

                                        <form action="Home/Book" method="POST">

                                            <input style="display: none" type="text" name="id_fix"

                                                value="<?php echo $row['id_fix'] ?>">

                                            <input style="display: none" type="text" name="id_role"

                                                value="<?php echo $row['status'] ?>">

                                            <?php if ($row['status'] == 1) {?>

                                            <button disabled style="height: 20px; width: 14px; border-radius: 50%;"

                                                class="btn btn-success btn-sm"><i class="fa fa-check" i>

                                                    <?php }?>

                                                    <?php if ($row['status'] == 0) { ?>

                                                    <button style="height: 20px; width: 14px; border-radius: 50%;"

                                                        class="btn btn-outline-success btn-sm"><i

                                                            class="fa-solid fa-check"></i>

                                                    </button>

                                                    <?php }?>

                                        </form>

                                    </td>

                                    <?php }?>

                                </tr>



                                <?php }

                                ?>

                            </tbody>

                        </table>

                    </div>

                </div>
<div class="row">
        <div class="col-lg-12">
                <div class="ibox">

                    <div class="ibox-head">

                        <div class="ibox-title">Sự kiện</div>

                        <div class="ibox-tools">

                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>

                            <a class="fullscreen-link"><i class="fa fa-expand"></i></a>

                        </div>

                    </div>

                    <div class="ibox-body">

                        <ul class="media-list media-list-divider m-0">

                            <li class="list-group list-group-divider scroller" height="50%" data-color="#71808f">

                                <?php 



                            while($row = mysqli_fetch_array($data["getallevent"])){?>



                                <a target="_blank"lass="list-group-item" href="https://it-zone.club/Home/ViewBlog/<?php echo $row["id_seminar"]; ?>">



                                    <div class="media">



                                        <div style="background: #EDF4FF; width: 40px; height: 40px; border-radius: 6px; margin-left: 12px; display: -webkit-box; display: -ms-flexbox; display: flex; -webkit-box-align: center; -ms-flex-align: center; align-items: center; justify-content: center; -webkit-justify-content: center; -ms-flex-pack: center;">
                                            <img src="https://preschool.dreamguystech.com/template/assets/img/icons/teacher-icon-02.svg"
                                                width="25px" />
                                        </div>



                                        <div class="media-body">


<!--style="width: 180px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;" -->
                                            <div class="font-strong pl-3">
                                                <?php echo $row['seminar'] ?>
                                            </div>

                                            <small class="text-muted float-right"><i class="fas fa-calendar-alt me-2"></i>
                                                <?php $timestamp = strtotime($row['date_create']); echo date("d-m-Y", $timestamp); ?></small>



                                            <!-- <div style="width: 150px; white-space: nowrap; overflow: hidden;" class="font-13"> <?php if($row['shift']=="1"){

                                        echo '<span class="badge badge-danger m-l-5"><i class="ti-alarm-clock"></i> Ca 1</span>';}

                                        elseif($row['shift']=="2"){

                                        echo '<span class="badge badge-success m-l-5"><i class="ti-alarm-clock"></i> Ca 2</span>';}

                                        elseif($row['shift']=="3"){

                                            echo '<span class="badge badge-primary m-l-5"><i class="ti-alarm-clock"></i> Ca 3</span>';}

                                        else{

                                            echo '<span class="badge badge-secondary m-l-5"><i class="ti-alarm-clock"></i> Ca 4</span>';}



                                    ?></div> -->



                                        </div>



                                    </div>



                                </a>

                                <?php }

                        ?>



                    </div>



                    </li>

                    </ul>

                </div>

                <!-- <div class="ibox-footer text-center">

                        <a href="javascript:;">Xem tất cả</a>

                    </div> -->

            </div>

        </div>
    </div>
    </div>
    

    </div>

    <!-- <div class="clock">

            <div class="hour-hand"></div>

            <div class="minute-hand"></div>

            <div class="second-hand"></div>

        </div> -->





    <?php



            



}else if($block == true){?>

    <div class="content">

        <h1 class="m-t-20"><img

                src="https://brave.com/vi/talk/images/graphic-talk-protection.svg"

                alt=""></h1>

        <!-- <p class="error-title">PAGE NOT FOUND</p> -->

        <!-- <p class="m-b-20">Sorry, the page you were looking for could not found. Please check the URL and try your luck again.

            <a class="color-green" href="index.html">Go homepage</a> or try the search bar below.</p> -->

        <h5><b><?php echo Session::get('fullname')?>, tài khoản của bạn đã bị khóa!</b></h5>

        <p class="m-b-15">Vui lòng liên hệ Admin để được hỗ trợ hoặc qua

            <a style="color: #007bff;" href="https://www.facebook.com/caitzone/">Fanpage</a> câu lạc bộ.

        </p>

    </div>

    <style>

    .content {

        max-width: 450px;

        margin: 0 auto;

        text-align: center;

    }



    .content h1 {

        font-size: 160px

    }



    .error-title {
        font-size: 22px;

        font-weight: 500;

        margin-top: 30px

    }

    </style>

    <!-- BEGIN PAGA BACKDROPS-->

    <div class="sidenav-backdrop backdrop"></div>

    <div class="preloader-backdrop">

        <div class="page-preloader">Loading</div>

    </div>

    <?php }?>



<!-- END PAGE CONTENT-->

<script>

function updateClock(hours, minutes, seconds) {



    var hourDegrees = hours * 30;

    var minuteDegrees = minutes * 6;

    var secondDegrees = seconds * 6;



    $('.hour-hand').css({

        'transform': `rotate(${hourDegrees}deg)`

    });



    $('.minute-hand').css({

        'transform': `rotate(${minuteDegrees}deg)`

    });



    $('.second-hand').css({

        'transform': `rotate(${secondDegrees}deg)`

    });



}



setClockWithCurrentTime();



function setClockWithCurrentTime() {

    var date = new Date();



    var hours = ((date.getHours() + 11) % 12 + 1);

    var minutes = date.getMinutes();

    var seconds = date.getSeconds();



    updateClock(hours, minutes, seconds);

}


setInterval(setClockWithCurrentTime, 1000);

</script>
                     <script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();   
});
</script>