<div class="content-wrapper">

    <div class="page-heading">

        <h1 class="page-title">Thống kê sửa máy</h1>
    </div>

    <div class="page-content fade-in-up">

        <div class="ibox-body">

          <div class="row">
                              
                                            <?php 
              while($row = mysqli_fetch_array($data["gethocky"])){?>
                <div class="col-lg-3 col-md-6 pt-3">
                                    <div class="card-deck">
                                <div class="card" style="width:320px;">
                                    <div class="card-header">
                                        <img class="img m-r-10 pull-left" src="https://s2.coinmarketcap.com/static/img/coins/64x64/8105.png"  style="width:50px;">
                                        <h6 class="m-0">Thống kê sửa máy</h6><small class="text-muted"><?php echo $row['schoolyear'];?> - <?php echo $row['semester'];?></small></div>
                                    <div class="card-body">
                                        <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <!--<button class="btn btn-default btn-sm">Share <i class="fa fa-share pull-rightx"></i></button>-->
                                           <a href="Home/ViewStaticFix/<?php echo $row['semester'];?>/<?php echo $row['schoolyear'];?>" class="btn btn-secondary btn-sm">Xem ngay</a>
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
    <!-- END PAGE CONTENT-->