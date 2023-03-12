<div class="content-wrapper">
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-lg-4">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Thêm mới phiếu sửa máy</div>
                    </div>
                    <div class="ibox-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputname">Tên người gửi</label>
                                    <input type="text" class="form-control" id="inputname" placeholder="Nhập họ và tên">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputphone">Số điện thoại</label>
                                    <input type="text" class="form-control" id="inputphone"
                                        placeholder="Nhập số điện thoại">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputidstudent">MSSV</label>
                                    <input type="text" class="form-control" id="inputidstudent"
                                        placeholder="Nhập mã số sinh viên">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputfaculty">Khoa</label>
                                    <select id="inputfaculty" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputidstudent">Mật khẩu </label>
                                    <input type="text" class="form-control" id="inputidstudent"
                                        placeholder="Nhập mật khẩu">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputfacebook">Ngày gửi</label>
                                    <div class="input-group date">
                                        <span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                                        <input id="datepicker" class="form-control" type="text" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputfacebook">Mô tả</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="9"></textarea>

                            </div>
                            <button type="submit" class="btn btn-primary">Tạo mới</button>
                            <button type="button" class="btn btn-danger">Hủy</button>
                        </form>
                    </div>
                    <!-- <div class="ibox-footer text-center">
                        <a href="javascript:;">Xem tất cả</a>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-8">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Danh sách ban</div>
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
                                    <th width="91px">Mã yêu cầu</th>
                                    <th>Tên người gửi</th>
                                    <th>MSSV</th>
                                    <th>Số điện thoại</th>
                                    <th width="91px">Ngày gửi</th>
                                    <th>Tên máy</th>
                                    <th width="91px">Trạng thái</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    while($row = mysqli_fetch_array($data["support_fix"])){?>
                                <tr>
                                    <td class="order_id">
                                        <?php echo $row['id'] ?>
                                    </td>
                                    <td><?php echo $row['name_sender'] ?></td>
                                    <td><?php echo $row['id_sender'] ?></td>
                                    <td><?php echo $row['phone_sender'] ?></td>
                                    <td><?php echo $row['date_send'] ?></td>
                                    <td><?php echo $row['type_device'] ?></td>
                                    <td><?php if ($row['status'] == 0){
                                        echo '<span class="badge badge-warning">Đang chờ</span>';
                                    }else if ($row['status'] == 1){
                                        echo '<span class="badge badge-primary">Đã nhận</span>';
                                    }else{
                                        echo '<span class="badge badge-success">Đã xong</span>';
                                    }
                                    ?></td>
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
</div>
<!-- END PAGE CONTENT-->
<script>
$('#datepicker').datepicker({
    uiLibrary: 'bootstrap4'
});
</script>