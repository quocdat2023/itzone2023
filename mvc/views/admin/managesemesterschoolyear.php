<div class="content-wrapper">

    <div class="page-heading">

        <h1 class="page-title">Quản lý học kỳ & năm học</h1>
        <button class="btn btn-primary float-right" data-toggle="modal" data-target="#addModal"><i
                class="fa-solid fa-calendar-plus"></i> Thêm mới</button>

    </div>
    <br>
    <div class="page-content fade-in-up">

        <div class="row">

            <div class="col-lg-6">

                <div class="ibox">

                    <div class="ibox-head">

                        <div class="ibox-title">Danh sách học kỳ</div>

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

                            <thead style="position: sticky;top: 0" class="bg-primary text-white">

                                <tr>

                                    <th width="2%">STT</th>

                                    <th width="25%">Học kỳ</th>

                                    <th class="text-center" width="2%">Xóa</th>



                                </tr>

                            </thead>

                            <tbody>

                                <?php 

                                $i = 1;

                                    while($row = mysqli_fetch_array($data["gethocky"])){?>

                                <tr>

                                    <td>

                                        <?php echo $i++; ?>

                                    </td>

                                    <td><?php echo $row['semester'] ?></td>

                                    <td class="text-center">

                                        <a target="_self" data-toggle="modal" data-target="#exampleModal"
                                            data-id_semester="<?php  echo $row['id_semester'] ?>" class="btn"
                                            class="btn"><i class="fa fa-trash text-danger"></i></button>

                                    </td>

                                </tr>

                                <?php }

                                ?>



                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

            <div class="col-lg-6">

                <div class="ibox">

                    <div class="ibox-head">

                        <div class="ibox-title">Danh sách năm học</div>

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

                        <table class="table table-striped table-bordered table-hover" id="example-tables"
                            cellspacing="0" width="100%">

                            <thead style="position: sticky;top: 0" class="bg-primary text-white">

                                <tr>

                                    <th width="2%">STT</th>

                                    <th width="25%">Năm học</th>

                                    <th class="text-center" width="2%">Xóa</th>



                                </tr>

                            </thead>

                            <tbody>

                                <?php 

                                $i = 1;

                                    while($row = mysqli_fetch_array($data["getnamhoc"])){?>

                                <tr>

                                    <td>

                                        <?php echo $i++; ?>

                                    </td>

                                    <td><?php echo $row['schoolyear'] ?></td>

                                    <td class="text-center">

                                        <a target="_self" data-toggle="modal" data-target="#exampleModalss"
                                            data-id_schoolyear="<?php  echo $row['id_schoolyear'] ?>" class="btn"
                                            class="btn"><i class="fa fa-trash text-danger"></i></a>

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

    <div class="modal fade" id="exampleModalss" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">

        <div class="modal-dialog modal-sm">

            <div class="modal-content">

                <div class="modal-body">

                    <form action="Home/ManageSemesterSchoolYear" method="POST">

                        <input style="display: none" name="id_schoolyear" type="text" id="id_schoolyear">

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

                            <button name="submitdeleteschoolyear" type="submit" class="btn btn-danger">Có</button>

                        </div>

                        </from>

                </div>



            </div>

        </div>

    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">

        <div class="modal-dialog modal-sm">

            <div class="modal-content">

                <div class="modal-body">

                    <form action="Home/ManageSemesterSchoolYear" method="POST">

                        <input style="display: none" name="id_semester" type="text" id="id_semester">

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

                            <button name="submitdeletesemester" type="submit" class="btn btn-danger">Có</button>

                        </div>

                        </from>

                </div>



            </div>

        </div>

    </div>
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">

        <div class="modal-dialog modal-sm">

            <div class="modal-content">

                <div class="modal-body">
                    <h5>Thêm mới</h5>

                    <form action="Home/ManageSemesterSchoolYear" method="POST">

                        <div class="form-group">

                            <div class="input-group">

                                <input name="tenhocky" class="form-control" type="text" placeholder="Nhập học kỳ">

                                <div class="input-group-btn">

                                    <button class="btn btn-primary" type="submit" name="addsemester">Tạo mới</button>

                                </div>

                            </div>

                        </div>

                        <div class="form-group">

                            <div class="input-group">

                                <input name="tennamhoc" class="form-control" type="text" placeholder="Nhập năm học">

                                <div class="input-group-btn">

                                    <button class="btn btn-success" type="submit" name="addnamhoc">Tạo mới</button>

                                </div>

                            </div>

                        </div>

                    </form>

                </div>



            </div>

        </div>

    </div>

    <!-- END PAGE CONTENT-->

    <script>
    $(document).ready(function() {

        $('#exampleModalss').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget) // Button that triggered the modal

            var id_schoolyear = button.data('id_schoolyear') // Extract info from data-* attributes

            $('#id_schoolyear').attr('value', id_schoolyear);

        })



    });
    </script>



    <script>
    $(document).ready(function() {

        $('#exampleModal').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget) // Button that triggered the modal

            var id_semester = button.data('id_semester') // Extract info from data-* attributes

            $('#id_semester').attr('value', id_semester);

        })



    });
    </script>