<div class="content-wrapper">
    <div class="page-heading">

        <h1 class="page-title">Quản lý thành viên</h1>
        <button class="btn btn-primary float-right" data-toggle="modal" data-target="#addModal"><i
                class="fa-solid fa fa-users-gear"></i> Thêm mới</button>
        <form action="Home/ExportMembers" method="post">
           <button type="submit" name="btnExport" class="btn btn-success float-right mr-2"><i class="fa-solid fa fa-file-excel"></i> Xuất file Excel</button>
        </form>
    </div>
    <br>
    <div class="page-content fade-in-up">

        <div class="row">

            <div class="col-lg-12">

                <div class="ibox">
    
                    <div class="ibox-head">
    
                        <div class="ibox-title">Danh sách thành viên</div>
    
                        <div class="ibox-tools">
    
                            <!-- <div class="btn">
    
                                <button class="btn btn-default btn-fix">Default</button>
    
                                <button class="btn btn-primary btn-fix">Primary</button>
    
                                <button class="btn btn-success btn-fix" id="btnExport"><i class="fa-solid fa-file-excel"></i> Export to Excel</button>
    
                                <button class="btn btn-info btn-fix">Info</button>
    
                            </div> -->
    
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                            <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                        </div>
    
                    </div>
    
                    <div class="ibox-body">
    
                        <div class="table-responsive">
    
    
    
                            <table class="table table-striped table-bordered table-hover" id="example-table"
                                cellspacing="0" width="100%">
    
                                <thead style="position: sticky;top: 0" class="bg-primary text-white">
    
                                    <tr>
    
                                        <th width="5%">STT</th>
                                        <th style="display:none" width="5%">STT</th>
    
                                        <th>Họ và tên</th>
                                        <th>MSSV</th>

                                        <th>Số điện thoại</th>
    
                                        <th width="91px">Ngày sinh</th>
    
                                        <!--<th class="text-center">Giới tính</th>-->
    
                                        <th id="act" class="text-center">Thao tác</th>
    
                                    </tr>
    
                                </thead>
    
                                <tbody>
    
                                    <?php 
    
                                $i = 1;
    
                                    while($row = mysqli_fetch_array($data["getmember"])){?>
    
                                    <tr>
    
    
                                        <td>
    
                                            <?php echo $i++; ?>
    
                                        </td>
                                        <td style="display:none"><?php echo $row['id_student'] ?></td>
                                        <td><a data-toggle="tooltip" data-placement="right" title="" data-original-title="<?php echo $row['id_student'] ?>"
                                                href="<?php echo $row['facebook'] ?>"><?php echo $row['fullname'] ?></a>
    
                                        </td>
                                       <td><?php echo $row['id_student'] ?></td>
                                        <td><?php echo $row['phone'] ?></td>
    
                                        <td><?php $timestamp = strtotime($row['birthday']); echo date("d-m-Y", $timestamp); ?>
    
                                        </td>
    
                                        <!--<td class="text-center"></td>-->
    
    
                                        <td class="text-center">
    
                                            <a target="_self" class="btn" data-toggle="modal"
                                                data-target="#exampleModal" data-iduser="<?php echo $row['id_user'] ?>"
                                                data-fullname="<?php echo $row['fullname'] ?>"
                                                data-phone="<?php echo $row['phone'] ?>"
                                                data-idstudent="<?php echo $row['id_student'] ?>"
                                                data-gender="<?php echo $row['gender'] ?>"
                                                data-team="<?php echo $row['id_team'] ?>"
                                                data-faculty="<?php echo $row['faculty'] ?>"
                                                data-birthday="<?php echo $row['birthday'] ?>"
                                                data-email="<?php echo $row['email'] ?>"
                                                data-facebook="<?php echo $row['facebook'] ?>"
                                                data-major="<?php echo $row['major'] ?>">
    
                                                <i class="fa fa-edit text-info"></i></a>
                                                <a target="_self" data-toggle="modal" data-target="#exampleModals"
                                                data-id_user="<?php echo $row['id_user'] ?>" class="btn"><i
                                                    class="fa fa-trash text-danger"></i></a> 
    
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
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">

        <div class="modal-dialog modal-lg">

            <div class="modal-content">

                <div class="modal-body">
                    <h5>Thêm mới</h5>
                    <form action="Home/ManageMember" method="POST">

                        <div class="form-row">

                            <div class="form-group col-md-6">

                                <label for="inputname">Họ và tên</label>

                                <input type="text" class="form-control" id="fullname" name="inputname"
                                    placeholder="Nhập họ và tên">

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

                                <label for="inputfaculty">Khoa</label>

                                <select name="inputfaculty" class="form-control">

                                    <option selected>Choose...</option>

                                    <option value="Khoa công nghệ thông tin">Khoa công nghệ thông tin</option>

                                    <option value="Khoa dược">Khoa dược</option>

                                    <option value="Khoa điện - điện tử">Khoa điện - điện tử</option>

                                    <option value="Khoa giáo dục quốc tế">Khoa giáo dục quốc tế</option>

                                    <option value="Khoa kế toán">Khoa kế toán</option>

                                    <option value="Khoa khoa học thể thao">Khoa khoa học thể thao</option>

                                    <option value="Khoa khoa học ứng dụng">Khoa khoa học ứng dụng</option>

                                    <option value="Khoa khoa học xã hội và nhân văn">Khoa khoa học xã hội và nhân

                                        văn</option>

                                    <option value="Khoa kỹ thuật công trình">Khoa kỹ thuật công trình</option>

                                    <option value="Khoa luật">Khoa luật</option>

                                    <option value="Khoa môi trường và bảo hộ lao động">Khoa môi trường và bảo hộ lao

                                        động</option>

                                    <option value="Khoa mỹ thuật công nghiệp">Khoa mỹ thuật công nghiệp</option>

                                    <option value="Khoa ngoại ngữ">Khoa ngoại ngữ</option>

                                    <option value="Khoa quản trị kinh doanh">Khoa quản trị kinh doanh</option>

                                    <option value="Khoa tài chính - ngân hàng">Khoa tài chính - ngân hàng</option>

                                    <option value="Khoa toán - thống kê">Khoa toán - thống kê</option>

                                </select>

                            </div>

                        </div>

                        <div class="form-row">

                            <div class="form-group col-md-6">

                                <label for="inputeam">Ban</label>

                                <select name="inputeam" class="form-control">

                                    <option selected>Choose...</option>

                                    <?php 

                                     while($row = mysqli_fetch_array($data["getallteam"])){?>

                                    <option value="<?php echo $row['id_team'] ?>"><?php echo $row['team'] ?>

                                    </option>

                                    <?php }

                            ?>

                                </select>

                            </div>

                            <div class="form-group col-md-6">

                                <label for="inputbirthday">Năm sinh</label>

                                <div class="input-group">

                                    <input name="inputbirthday" id="datepicker" class="form-control" type="date">

                                </div>

                            </div>

                        </div>

                        <div class="form-group">

                            <label for="inputfacebook">Link Facebook</label>

                            <input type="text" class="form-control" name="inputfacebook"
                                placeholder="Nhập link Facebook">

                        </div>

                        <button name="submit" type="submit" class="btn btn-primary">Tạo mới</button>

                        <button type="button" class="btn btn-danger">Hủy</button>

                    </form>

                </div>


            </div>
        </div>

    </div>
    <div class="modal fade" id="exampleModals" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">

    <div class="modal-dialog modal-sm">

        <div class="modal-content">

            <div class="modal-body">

                <form action="Home/ManageMember" method="POST">

                    <input style="display: none" name="id_user" type="text" id="id_user">

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

                        <button name="submitdelete" type="submit" class="btn btn-danger">Có</button>

                    </div>

                    </from>

            </div>



        </div>

    </div>

</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa thông tin</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>

                </button>

            </div>

            <div class="modal-body">

                <form action="Home/ManageMember" method="POST">

                    <input style="display: none" type="text" class="form-control" id="iduser" name="iduser">

                    <div class="form-row">

                        <div class="form-group col-md-4">

                            <label for="inputname">Họ và tên</label>

                            <input type="text" class="form-control" id="inputname" name="inputname"
                                placeholder="Nhập họ và tên">

                        </div>

                        <div class="form-group col-md-4">

                            <label for="inputphone">Số điện thoại</label>

                            <input id="phone" type="text" class="form-control" name="inputphone"
                                placeholder="Nhập số điện thoại">

                        </div>

                        <div class="form-group col-md-4">

                            <label for="inputidstudent">MSSV</label>

                            <input id="idstudent" type="text" class="form-control" name="inputidstudent"
                                placeholder="Nhập mã số sinh viên">



                        </div>

                    </div>

                    <div class="form-row">

                        <div class="form-group col-md-4">

                            <label for="inputname">Ban</label>

                            <select id="teams" name="inputeam" class="form-control">

                                <option selected>Choose...</option>

                                <?php 

                                     while($row = mysqli_fetch_array($data["getallteams"])){?>

                                <option value="<?php echo $row['id_team'] ?>"><?php echo $row['team'] ?>

                                </option>

                                <?php }

                            ?>

                            </select>

                        </div>

                        <div class="form-group col-md-4">

                            <label for="inputname">Giới tính</label>

                            <select id="gender" name="inputgender" class="form-control">

                                <option selected>Choose...</option>

                                <option value="0">Nữ</option>

                                <option value="1">Nam</option>

                                <option value="2">Khác</option>

                            </select>

                        </div>

                        <div class="form-group col-md-4">

                            <label for="inputfaculty">Khoa</label>

                            <select id="faculty" name="inputfaculty" class="form-control">

                                <option selected>Choose...</option>

                                <option value="Khoa công nghệ thông tin">Khoa công nghệ thông tin</option>

                                <option value="Khoa dược">Khoa dược</option>

                                <option value="Khoa điện - điện tử">Khoa điện - điện tử</option>

                                <option value="Khoa giáo dục quốc tế">Khoa giáo dục quốc tế</option>

                                <option value="Khoa kế toán">Khoa kế toán</option>

                                <option value="Khoa khoa học thể thao">Khoa khoa học thể thao</option>

                                <option value="Khoa khoa học ứng dụng">Khoa khoa học ứng dụng</option>

                                <option value="Khoa khoa học xã hội và nhân văn">Khoa khoa học xã hội và nhân

                                    văn</option>

                                <option value="Khoa kỹ thuật công trình">Khoa kỹ thuật công trình</option>

                                <option value="Khoa luật">Khoa luật</option>

                                <option value="Khoa môi trường và bảo hộ lao động">Khoa môi trường và bảo hộ lao

                                    động</option>

                                <option value="Khoa mỹ thuật công nghiệp">Khoa mỹ thuật công nghiệp</option>

                                <option value="Khoa ngoại ngữ">Khoa ngoại ngữ</option>

                                <option value="Khoa quản trị kinh doanh">Khoa quản trị kinh doanh</option>

                                <option value="Khoa tài chính - ngân hàng">Khoa tài chính - ngân hàng</option>

                                <option value="Khoa toán - thống kê">Khoa toán - thống kê</option>

                            </select>

                        </div>

                    </div>

                    <div class="form-row">

                        <div class="form-group col-md-6">

                            <label for="inputbirthday">Năm sinh</label>

                            <div class="input-group">

                                <input name="inputbirthday" id="inputbirthday" class="form-control" type="date">

                            </div>

                        </div>

                        <div class="form-group col-md-6">

                            <label for="">Email</label>

                            <input id="inputemail" name="inputemail" class="form-control" type="text">

                        </div>

                    </div>

                    <div class="form-group">

                        <label for="inputfacebook">Link Facebook</label>

                        <input id="inputfacebook" type="text" class="form-control" name="inputfacebook"
                            placeholder="Nhập link Facebook">

                    </div>

                    <button name="submitupdate" type="submit" class="btn btn-primary">Cập nhật</button>

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>

                </form>

            </div>



        </div>

    </div>

</div>


        <!-- END PAGE CONTENT-->

        <script>
            $(document).ready(function () {

                $('#exampleModal').on('show.bs.modal', function (event) {

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



                    $('#inputname').attr('value', fullname);

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



                $('#exampleModals').on('show.bs.modal', function (event) {

                    var button = $(event.relatedTarget) // Button that triggered the modal

                    var iduser = button.data('id_user') // Extract info from data-* attributes

                    $('#id_user').attr('value', iduser);





                })
                
                   $('#exampleModalss').on('show.bs.modal', function (event) {

                    var button = $(event.relatedTarget) // Button that triggered the modal

                    var idteam= button.data('id_team') // Extract info from data-* attributes

                    $('#id_team').attr('value', idteam);





                })







            });
        </script>



        <script>
            $(document).ready(function () {

                $("#btnExport").click(function () {

                    let table = document.getElemSentsByTagName("table");

                    TableToExcel.convert(table[

                        0
                    ], { // html code may contain multiple tables so here we are refering to 1st table tag

                        name: `Danhsachthanhvien.xlsx`, // fileName you could use any name

                        sheet: {

                            name: 'Sheet 1' // sheetName

                        }

                    });

                });

            });
        </script>