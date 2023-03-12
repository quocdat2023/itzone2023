<div class="content-wrapper">
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-lg-8">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Danh sách chức vụ</div>
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
            <div class="col-lg-4">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Thêm mới</div>
                    </div>
                    <div class="ibox-body">
                        <form action="_" method="post">
                            <div class="form-group">
                                <label for="ban">Tên chức vụ</label>
                                <input type="text" class="form-control" id="ban" aria-describedby="ban"
                                    placeholder="Nhập chức vụ">
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
        </div>
    </div>
</div>
<!-- END PAGE CONTENT-->