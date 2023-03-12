<div class="content-wrapper">
    <div class="page-heading">

        <h1 class="page-title">Quản lý ban</h1>
        <button class="btn btn-primary float-right" data-toggle="modal" data-target="#addModal"><i
                class="fa-brands fa-teamspeak"></i> Thêm mới</button>
    </div>
    <br>
    <div class="page-content fade-in-up">

        <div class="row">

            <div class="col-lg-12">

                <div class="ibox">
    
                    <div class="ibox-head">
    
                        <div class="ibox-title">Danh sách ban</div>
    
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
    
    
      <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0"
                            width="100%">

                            <thead>

                                <tr>

                                    <th width="5%">STT</th>

                                    <th width="25%">Tên ban</th>

                                    <th>Mô tả</th>

                                    <th width="2%">Xóa</th>



                                </tr>

                            </thead>

                            <tbody>

                                <?php 

                                $i = 1;

                                    while($row = mysqli_fetch_array($data["getallteam"])){?>

                                <tr>

                                    <td>

                                        <?php echo $i++; ?>

                                    </td>

                                    <td><?php echo $row['team'] ?></td>

                                    <td><?php echo $row['description'] ?></td>

                                    <td>

                                        <a target="_self" data-toggle="modal" data-target="#exampleModalss"
                                            data-id_team="<?php  echo $row['id_team'] ?>" class="btn" class="btn"><i
                                                class="fa fa-trash text-danger"></i></button>

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

                <form action="Home/AddTeam" method="POST">

                    <div class="form-group">

                        <label for="ban">Tên ban</label>

                        <input name="team" type="text" class="form-control" placeholder="Nhập tên ban">

                    </div>
                    <div class="form-group">

                        <label for="inputdescribe">Mô tả</label>

                        <textarea name="inputdescribe" class="form-control" id="contentpost" rows="9"></textarea>

                    </div>

                    <button name="submit" type="submit" class="btn btn-primary">Tạo mới</button>

                    <button type="button" class="btn btn-danger">Hủy</button>

                </form>

            </div>


        </div>
    </div>

</div>
<div class="modal fade" id="exampleModalss" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">

<div class="modal-dialog modal-sm">

    <div style="border-radius: 5%" class="modal-content">

        <div class="modal-body">

            <form action="Home/ManageTeam" method="POST">

                <input style="display: none" name="id_team" type="text" id="id_team">

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

                    <button name="submitdeleteteam" type="submit" class="btn btn-danger">Có</button>

                </div>

                </from>

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