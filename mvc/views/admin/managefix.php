<div class="content-wrapper">

    <div class="page-content fade-in-up">
        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title">Quản lý sửa máy </div>
            </div>
            <div class="ibox-body">
                <ul class="nav nav-tabs tabs-line">
                    <li class="nav-item">
                        <a class="nav-link active" href="#tab-7-1" data-toggle="tab" aria-expanded="true"><i
                                class="fa fa-line-chart"></i> Thêm mới</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tab-7-2" data-toggle="tab" aria-expanded="false"><i
                                class="fa fa-heartbeat"></i> Danh sách</a>
                    </li>

                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab-7-1" aria-expanded="true">
                        <form action="Home/AddFixs"
                        method="post">

                        <div class="form-row">

                            <div class="form-group col-md-6">

                                <label for="inputname">Tên người gửi</label>

                                <input type="text" class="form-control" name="inputname" placeholder="Nhập họ và tên">

                            </div>

                            <div class="form-group col-md-6">

                                <label for="inputphone">Số điện thoại</label>

                                <input type="text" class="form-control" name="inputphone"
                                    placeholder="Nhập số điện thoại">

                            </div>

                        </div>

                        <div class="form-row">

                            <div class="form-group col-md-6">

                                <label for="inputidstudent">MSSV</label>

                                <input type="text" class="form-control" name="inputidstudent"
                                    placeholder="Nhập mã số sinh viên">

                            </div>

                            <div class="form-group col-md-6">

                                <label for="inputidstudent">Mật khẩu (Nếu có) </label>

                                <input type="text" class="form-control" name="inputpassword"
                                    placeholder="Nhập mật khẩu">

                            </div>

                        </div>

                        <div class="form-row">

                            <div class="form-group col-md-6">

                                <label for="inputschoolyear">Năm học</label>

                                <select name="inputschoolyear" class="form-control">

                                    <option selected>Choose...</option>

                                    <?php 

                                         while($row = mysqli_fetch_array($data["getnamhoc"])){?>

                                    <option value="<?php echo $row['schoolyear'] ?>">

                                        <?php echo $row['schoolyear'] ?>

                                    </option>

                                    <?php }

                                ?>

                                </select>

                            </div>

                            <div class="form-group col-md-6">

                                <label for="inputsemester">Học kỳ</label>

                                <select name="inputsemester" class="form-control">

                                    <?php 

                                         while($row = mysqli_fetch_array($data["gethockys"])){?>

                                    <option value="<?php echo $row['semester'] ?>">

                                        <?php echo $row['semester'] ?>

                                    </option>

                                    <?php }

                                ?>

                                </select>

                            </div>

                        </div>

                        <div class="form-row">

                            <div class="form-group col-md-6">

                                <label for="inputfaculty">Kỹ thuật viên</label>

                                <select name="inputuser" class="form-control">

                                    <option selected>admin</option>

                                    <?php 

                                    while($row = mysqli_fetch_array($data["getmember"])){?>

                                    <option value="<?php echo $row['id_student'] ?>">
                                        <?php echo $row['fullname'] ?>

                                    </option>

                                    <?php }

                                ?>

                                </select>

                            </div>

                            <div class="form-group col-md-3">

                                <label for="inputfacebook">Ngày gửi</label>

                                <div class="input-group date">

                                    <input type="date" name="inputdate" class="form-control" required>

                                </div>

                            </div>

                            <div class="form-group col-md-3">

                                <label for="">Ca</label>

                                <select name="inputshift" class="form-control">

                                    <option value="1">Ca 1 </option>

                                    <option value="2">Ca 2 </option>

                                    <option value="3">Ca 3 </option>

                                    <option value="4">Ca 4 </option>

                                </select>

                            </div>

                        </div>

                        <div class="form-group">

                            <label for="inputdescribe">Mô tả</label>

                            <textarea class="form-control" name="inputdescribe" rows="9"></textarea>



                        </div>

                        <button type="submit" name="submit_fix" class="btn btn-primary">Tạo mới</button>

                        <button type="button" class="btn btn-danger">Hủy</button>

                        </form>
                    </div>
                    <div class="tab-pane" id="tab-7-2" aria-expanded="false">
                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0"
                            width="100%">

                            <thead style="position: sticky;top: 0" class="bg-primary text-white">

                                <tr>

                                    <th width="1px">STT</th>

                                    <th width="aut">Người gửi</th>

                                    <!--<th width="auto">MSSV</th>-->

                                    <!--<th width="auto">SĐT</th>-->

                                    <!--<th width="auto">Ngày gửi</th>-->
                                    <th width="100%">Mô tả</th>

                                    <!--<th width="auto">Trạng thái</th>-->

                                    <th width="auto">KTV</th>

                                    <th width="auto">Xóa</th>

                                </tr>

                            </thead>

                            <tbody>

                                <?php 

                                $i = 1;

                                    while($row = mysqli_fetch_array($data["supportfix"])){?>

                                <tr>

                                    <td class="order_id">

                                        <?php echo $i++; ?>

                                    </td>

                                    <td>  <a data-html="true" data-toggle="popover" title="<?php echo $row['id_student'] ?>" data-content="
                                          Ngày: 
                                        <?php $timestamp = strtotime($row['date']); echo date("d-m-Y", $timestamp);echo "<br>Giờ: ".$row['timebook']; ?>
                                        <br>Password: <?php echo $row['password']?>  <br>SĐT: <?php echo $row['phone']?>
                                        "><?php echo $row['fullname'];?></a>
                                        
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
<?php if ($row['status'] == 0){

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

                                    ?>
                                    </td>



                                    <!--<td>-->
                                    <!--    <?php echo $row['id_student'] ?>-->
                                    <!--</td>-->

                                    <!--<td>-->
                                    <!--    <?php echo $row['phone'] ?>-->
                                    <!--</td>-->

                                    <!--<td>-->
                                    <!--    <?php echo $row['date'] ?>-->
                                    <!--</td>-->
                                        <td>
                                        <?php echo $row['description'] ?>
                                    </td>
                             
                                    <td>
                                        <?php echo $row['fullnamektv'] ?>
                                    </td>

                                    <td>



                                        <a target="_self" data-toggle="modal" data-target="#exampleModalss"
                                            data-id_fix="<?php  echo $row['id_fix'] ?>" class="btn" class="btn"><i
                                                class="fa fa-trash text-danger"></i></a>

                                    </td>

                                </tr>

                                <?php }

                                ?>



                            </tbody>

                        </table>
                    </div>

                </div><br>
            </div>
        </div>

    </div>

    <!-- END PAGE CONTENT-->

    <script>

        $('#datepicker').datepicker({

            uiLibrary: 'bootstrap4'

        });

    </script>

    <div class="modal fade" id="exampleModalss" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">



        <div class="modal-dialog modal-sm">



            <div class="modal-content">



                <div class="modal-body">



                    <form action="Home/DeleteFix" method="POST">



                        <input style="display: none" name="id_fix" type="text" id="id_fix">



                        <div class="modal-header flex-column">



                            <div class="icon-box">



                                <img src="https://cdn.dribbble.com/users/251873/screenshots/9388228/error-img.gif"
                                    alt="" sizes="" srcset="">



                            </div>



                            <h6 class="modal-title w-100 text-center">Bạn có muốn xóa hay không ?</h6>



                        </div>



                        <!-- <div class="modal-body">



            <p>Do you really want to delete these records? This process cannot be undone.</p>



        </div> -->



                        <div class="modal-footer justify-content-center">



                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Không</button>



                            <button name="deletefix" type="submit" class="btn btn-danger">Có</button>



                        </div>



                        </from>



                </div>







            </div>



        </div>



    </div>



    <div class="modal fade" id="ViewFix" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">

        <div class="modal-dialog modal-sm">

            <div style="border-radius: 5%" class="modal-content">

                <div class="modal-body">

                    <div class="text-center">

                        <button
                            style="height: 60px; width: 60px; border-radius: 50%; background-color: white; border: 3px solid #CDC8D4"><i
                                class="fa fa-id-card" style="color: #F93154; font-size:large"></i>

                        </button>

                    </div>

                    <h3 class="text-center">Thông tin sửa máy</h3>

                    <label for=""><b>Họ tên người gửi</b></label>

                    <p id="fullname" name="fullname"></p>

                    <div class="text-center">

                        <button type="button" class="btn text-white" style="background-color: #F93154;"
                            data-dismiss="modal">Đóng</button>

                    </div>



                </div>

            </div>

        </div>

    </div>

    <!-- END PAGE CONTENT-->

    <script>

        $(document).ready(function () {

            $('#ViewFix').on('show.bs.modal', function (event) {

                var button = $(event.relatedTarget) // Button that triggered the modal

                var fullname = button.data('fullname') // Extract info from data-* attributes

                var phone = button.data('phone') // Extract info from data-* attributes

                var idstudent = button.data('idstudent') // Extract info from data-* attributes

                var gender = button.data('gender') // Extract info from data-* attributes

                var team = button.data('team') // Extract info from data-* attributes

                var faculty = button.data('faculty') // Extract info from data-* attributes

                var birthday = button.data('birthday') // Extract info from data-* attributes

                var email = button.data('email') // Extract info from data-* attributes

                var facebook = button.data('facebook') // Extract info from data-* attributes

                var major = button.data('major') // Extract info from data-* attributes

                var iduser = button.data('iduser') // Extract info from data-* attributes



                $('#fullname').html(fullname);

                $('#phone').attr('value', phone);

                $('#idstudent').attr('value', idstudent);

                $('#gender').val(gender);

                $('#teams').val(team);

                $('#faculty').val(faculty);

                $('#inputbirthday').attr('value', birthday);

                $('#inputemail').attr('value', email);

                $('#inputfacebook').attr('value', facebook);

                $('#major').attr('value', major);

                $('#iduser').attr('value', iduser);





            })

        });

    </script>

    <script>

        $(document).ready(function () {



            $('#exampleModalss').on('show.bs.modal', function (event) {



                var button = $(event.relatedTarget) // Button that triggered the modal



                var id_schoolyear = button.data('id_fix') // Extract info from data-* attributes



                $('#id_fix').attr('value', id_schoolyear);



            })







        });

    </script>