<div class="content-wrapper">

    <div class="page-heading">

        <h1 class="page-title">Quản lý điểm danh</h1>

    </div>

    <div class="page-content fade-in-up">

        <div class="ibox">

            <div class="ibox-head">

                <div class="ibox-title">

                </div>

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

                    <thead style="position: sticky;top: 0" class="bg-primary text-white">

                        <tr>

                            <th width="5%">STT</th>

                            <th width="10%">MSSV</th>

                            <th>Họ và tên</th>

                            <th>Ban</th>

                            <th width="10%">Có mặt</th>

                            <th width="10%">Vắng</th>

                            <th width="10%">Trể</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php 

                                $i = 1;

                                    while($row = mysqli_fetch_array($data["getallstatic"])){?>

                        <tr>

                            <td class="stt"><?php echo $i++ ?></td>

                            <td class="name_sender"><?php echo $row['id_student'] ?></td>

                            <td class="id_sender"><?php echo $row['fullname'] ?></td>

                            <td class="id_sender"><?php echo $row['team'] ?></td>

                            <td class="id_sender"><?php echo $row['Present'] ?></td>

                            <td class="name_sender"><?php echo $row['Absent'] ?></td>

                            <td class="id_sender"><?php echo $row['Late'] ?></td>

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

                    <thead style="position: sticky;top: 0" class="bg-primary text-white">

                        <tr>

                            <th width="5%">STT</th>

                            <th width="10%">MSSV</th>

                            <th>Họ và tên</th>

                            <th>Ban</th>

                            <th width="10%">Có mặt</th>

                            <th width="10%">Vắng</th>

                            <th width="10%">Trể</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php 

                                $i = 1;

                                    while($row = mysqli_fetch_array($data["getallstaticps"])){?>

                        <tr>

                            <td class="stt"><?php echo $i++ ?></td>

                            <td class="name_sender"><?php echo $row['id_student'] ?></td>

                            <td class="id_sender"><?php echo $row['fullname'] ?></td>

                            <td class="id_sender"><?php echo $row['team'] ?></td>

                            <td class="id_sender"><?php echo $row['Present'] ?></td>

                            <td class="name_sender"><?php echo $row['Absent'] ?></td>

                            <td class="id_sender"><?php echo $row['Late'] ?></td>

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