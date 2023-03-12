<div class="content-wrapper">

    <div class="page-heading">

        <h1 class="page-title">Thống kê điểm danh</h1>
    </div>

    <div class="page-content fade-in-up">

        <div class="ibox-body">

            <ul class="nav nav-tabs tabs-line">

                <li class="nav-item">

                    <a class="nav-link active" href="#tab-7-1" data-toggle="tab" aria-expanded="false"><i
                            class="fa fa-line-chart"></i> Thống kê theo học kỳ</a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="#tab-7-2" data-toggle="tab" aria-expanded="true"><i
                            class="fa fa-heartbeat"></i> Thống kê theo tháng</a>

                </li>

            </ul>

            <div class="tab-content">

                <div class="tab-pane active " id="tab-7-1" aria-expanded="false">
   <div class="row">
                              
                                            <?php 
              while($row = mysqli_fetch_array($data["gethocky"])){?>
                <div class="col-lg-3 col-md-6 pt-3">
                                    <div class="card-deck">
                                <div class="card" style="width:320px;">
                                    <div class="card-header">
                                        <img class="img m-r-10 pull-left" src="https://s2.coinmarketcap.com/static/img/coins/64x64/8105.png"  style="width:50px;">
                                        <h6 class="m-0">Thống kê điểm danh</h6><small class="text-muted"><?php echo $row['schoolyear'];?> - <?php echo $row['semester'];?></small></div>
                                    <div class="card-body">
                                        <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <!--<button class="btn btn-default btn-sm">Share <i class="fa fa-share pull-rightx"></i></button>-->
                                            <a href="Home/ViewStaticAttendanceSemester/<?php echo $row['schoolyear'];?>/<?php echo $row['semester'];?>"
                                            class="btn btn-secondary btn-sm">Xem ngay</a>
                                        </div>
                                    </div>
                                </div>
                                  </div>
                                </div>
              <?php }
             ?>
                                  
                            </div>
                 

                </div>

                <div class="tab-pane" id="tab-7-2" aria-expanded="true">

                    <div class="row">

                        <?php 

              while($row = mysqli_fetch_array($data["getthang"])){?>
                <div class="col-lg-3 col-md-6 pt-3">
                                    <div class="card-deck">
                            <div class="card " style="width:320px;">
                                <div class="card-header">
                                    <img class="m-r-10 pull-left"
                                        src="https://birigui.municipiovivo.com.br/wp-content/uploads/sites/2/2016/06/icone-social-demandaatendimento-150x150.png"
                                        style="width:50px;">
                                    <h6 class="m-0">Thống kê điểm danh</h6><small class="text-muted"> <span
                                            class="badge badge-info badge-pill m-b-5">Tháng
                                            <?php echo $row['month'];?></span> <span
                                            class="badge badge-success badge-pill m-b-5"><?php echo $row['schoolyear'];?></span></small>
                                </div>
                                <div class="card-body">
                                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a class="link-blue"></a>
                                        <a href="Home/ViewStaticAttendanceMonth/<?php echo $row['month'];?>/<?php echo $row['year'];?>"
                                            class="btn btn-secondary btn-sm">Xem ngay</a>
                                    </div>
                            </div>
                        </div>
  </div>
                        </div>
                        <?php }

             ?>

                    </div>

                </div>

            </div>

        </div>



    </div>
    <!-- END PAGE CONTENT-->