<?php 
    session_start();
         while($row = mysqli_fetch_array($data["GetRole"])){?> 
             <?php $_SESSION["role"] = $row['role']; ?>
<?php }?>

<style>
    /**
     * Eric Meyer's Reset CSS v2.0+ (https://meyerweb.com/eric/tools/css/reset/)
     * http://cssreset.com
     */

    .elegant-calencar {
        width: 100%;
        height: 20%;
        border: 1px solid #c9c9c9;
        -webkit-box-shadow: 0 0 5px #c9c9c9;
        box-shadow: 0 0 5px #c9c9c9;
        text-align: center;
        position: relative;
    }

    #header {
        font-family: 'HelveticaNeue-UltraLight', 'Helvetica Neue UltraLight', 'Helvetica Neue', Arial, Helvetica, sans-serif;
        height: 10em;
        background-color: #2a3246;
        margin-bottom: 1em;
    }

    .pre-button,
    .next-button {
        margin-top: 2.2em;
        font-size: 2em;
        -webkit-transition: -webkit-transform 0.5s;
        transition: transform 0.5s;
        cursor: pointer;
        width: 0.5em;
        height: 0.5em;
        line-height: 0.5em;
        color: #e66b6b;
        border-radius: 50%;
    }

    /* .pre-button:hover, .next-button:hover {
        -webkit-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        transform: rotate(360deg);
    } */

    .pre-button:active,
    .next-button:active {
        -webkit-transform: scale(0.7);
        -ms-transform: scale(0.7);
        transform: scale(0.7);
    }

    .pre-button {
        float: left;
        margin-left: 0.5em;
    }

    .next-button {
        float: right;
        margin-right: 0.5em;
    }

    .head-info {
        float: left;
        width: 16em;2
    }

    .head-day {
        margin-top: 0.5em;
        font-size: 3em;
        line-height: 0.5;
        color: #fff;
    }

    .head-month {
        margin-top: 25px;
        font-size: 1.3em;
        line-height: 1;
        color: #fff;
    }

    #calendar {
        width: 90%;
        margin: 0 auto;
    }

    #calendar tr {
        height: 2em;
        line-height: 2em;
    }

    thead tr {
        /* color: #e66b6b; */
        font-weight: 700;
        text-transform: uppercase;
    }

    tbody tr {
        color: #252a25;
    }

    .calen {
        width: 14%;
        border-radius: 50%;
        cursor: pointer;
        -webkit-transition: all 0.2s ease-in;
        transition: all 0.2s ease-in;
        padding-left: -4%;
    }

    .calen:hover,
    {
    color: #fff;
    background-color: #2a3246;
    border: none;
    }

    .calen:active {
        -webkit-transform: scale(0.7);
        -ms-transform: scale(0.7);
        transform: scale(0.7);
    }

    #today {
        background-color: #e66b6b;
        color: #fff;
        font-family: serif;
        border-radius: 50%;
        width:30px;
        
    }

    #disabled {
        cursor: default;
        background: #fff;
    }

    #disabled:hover {
        background: #fff;
        color: #c9c9c9;
    }

    #reset {
        display: block;
        position: absolute;
        right: 0.5em;
        top: 0.5em;
        z-index: 999;
        color: #fff;
        font-family: serif;
        cursor: pointer;
        padding: 0 0.5em;
        height: 1.5em;
        border: 0.1em solid #fff;
        border-radius: 4px;
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }

    #reset:hover {
        color: #e66b6b;
        border-color: #e66b6b;
    }

    #reset:active {
        -webkit-transform: scale(0.8);
        -ms-transform: scale(0.8);
        transform: scale(0.8);
    }
</style>

<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-content fade-in-up">
        <form action="Home/RegisterShift" name="product" id="product" method="post">
            <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="ibox">
                                        <img src="https://www.gstatic.com/classroom/themes/img_bookclub.jpg"></img>
                                        <div class="ibox-head">
                                            <div class="ibox-title">Đăng Ký Ca Thứ Hai</div>
                                            <div class="ibox-tools">
                                                 <?php
                                                if($_SESSION["role"] == 1){
                                                    echo '<a class="ibox-collapse"><i class="fa fa-eye"></i></a>';
    
                                                }else if($_SESSION["role"] == 0){
                                                     echo '<a onclick="myFunctions()"><i class="fa-solid fa-lock"></i></a>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="ibox-body" style="display: none; widtgh: 100%">

                                            <div class="input-group">
                                                <label class="ui-checkbox ui-checkbox-primary">
                                                    <input type="checkbox" name="12"
                                                        onclick="document.forms.product.submit();">
                                                    <span class="input-span"></span>Ca trực 1 (6h50 - 9h20)
                                                </label>
                                            </div>
                                            <div class="input-group">
                                                <label class="ui-checkbox ui-checkbox-primary">
                                                    <input type="checkbox" name="22"
                                                        onclick="document.forms.product.submit();">
                                                    <span class="input-span"></span>Ca trực 2 (9h30 - 12h)
                                                </label>
                                            </div>
                                            <div class="input-group">
                                                <label class="ui-checkbox ui-checkbox-primary">
                                                    <input type="checkbox" name="32"
                                                        onclick="document.forms.product.submit();">
                                                    <span class="input-span"></span>Ca trực 3 (12h45 - 15h15)
                                                </label>
                                            </div>
                                            <div class="input-group">
                                                <label class="ui-checkbox ui-checkbox-primary">
                                                    <input type="checkbox" name="42"
                                                        onclick="document.forms.product.submit();">
                                                    <span class="input-span"></span>Ca trực 4 (15h25 - 17h55)
                                                </label>
                                            </div>
                                        </div>
                                    </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="ibox">
                                        <img src="https://gstatic.com/classroom/themes/img_learnlanguage.jpg"></img>
                                        <div class="ibox-head">
                                            <div class="ibox-title">Đăng Ký Ca Thứ Tư</div>
                                            <div class="ibox-tools">
                                              <?php
                                                if($_SESSION["role"] == 1){
                                                    echo '<a class="ibox-collapse"><i class="fa fa-eye"></i></a>';
    
                                                }else if($_SESSION["role"] == 0){
                                                     echo '<a onclick="myFunctions()"><i class="fa-solid fa-lock"></i></a>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="ibox-body" style="display: none; widtgh: 100%">
                                            <div class="input-group">
                                                <label class="ui-checkbox ui-checkbox-primary">
                                                    <input type="checkbox" name="14"
                                                        onclick="document.forms.product.submit();">
                                                    <span class="input-span"></span>Ca trực 1 (6h50 - 9h20)
                                                </label>
                                            </div>
                                            <div class="input-group">
                                                <label class="ui-checkbox ui-checkbox-primary">
                                                    <input type="checkbox" name="24"
                                                        onclick="document.forms.product.submit();">
                                                    <span class="input-span"></span>Ca trực 2 (9h30 - 12h)
                                                </label>
                                            </div>
                                            <div class="input-group">
                                                <label class="ui-checkbox ui-checkbox-primary">
                                                    <input type="checkbox" name="34"
                                                        onclick="document.forms.product.submit();">
                                                    <span class="input-span"></span>Ca trực 3 (12h45 - 15h15)
                                                </label>
                                            </div>
                                            <div class="input-group">
                                                <label class="ui-checkbox ui-checkbox-primary">
                                                    <input type="checkbox" name="44"
                                                        onclick="document.forms.product.submit();">
                                                    <span class="input-span"></span>Ca trực 4 (15h25 - 17h55)
                                                </label>
                                            </div>
                                        </div>
                                    </div>
            </div>
            <div class="col-lg-4 col-md-6">
                    <div class="ibox">
                                        <img src="https://www.gstatic.com/classroom/themes/img_breakfast.jpg"></img>
                                        <div class="ibox-head">
                                            <div class="ibox-title">Đăng Ký Ca Thứ Sáu</div>
                                            <div class="ibox-tools">
                                         <?php
                                                if($_SESSION["role"] == 1){
                                                    echo '<a class="ibox-collapse"><i class="fa fa-eye"></i></a>';
    
                                                }else if($_SESSION["role"] == 0){
                                                     echo '<a onclick="myFunctions()"><i class="fa-solid fa-lock"></i></a>';
                                                }
                                                ?>

                                            </div>
                                        </div>
                                        <div class="ibox-body" style="display: none; widtgh: 100%">
                                            <div class="input-group">
                                                <label class="ui-checkbox ui-checkbox-primary">
                                                    <input type="checkbox" name="16"
                                                        onclick="document.forms.product.submit();">
                                                    <span class="input-span"></span>Ca trực 1 (6h50 - 9h20)
                                                </label>
                                            </div>
                                            <div class="input-group">
                                                <label class="ui-checkbox ui-checkbox-primary">
                                                    <input type="checkbox" name="26"
                                                        onclick="document.forms.product.submit();">
                                                    <span class="input-span"></span>Ca trực 2 (9h30 - 12h)
                                                </label>
                                            </div>
                                            <div class="input-group">
                                                <label class="ui-checkbox ui-checkbox-primary">
                                                    <input type="checkbox" name="36"
                                                        onclick="document.forms.product.submit();">
                                                    <span class="input-span"></span>Ca trực 3 (12h45 - 15h15)
                                                </label>
                                            </div>
                                            <div class="input-group">
                                                <label class="ui-checkbox ui-checkbox-primary">
                                                    <input type="checkbox" name="46"
                                                        onclick="document.forms.product.submit();">
                                                    <span class="input-span"></span>Ca trực 4 (15h25 - 17h55)
                                                </label>
                                            </div>
                                        </div>

                                    </div>
            </div>
        </div>
        </form>
        <div class="row">
            <div class="col-lg-12" style="display: none;">
               <div class="ibox">
                                        <div class="elegant-calencar">
                                            <div id="header" class="clearfix d-flex justify-content-center">
                                                <div class="pre-button"><i class="fa-solid fa-circle-chevron-left"></i>
                                                </div>
                                                <div class="head-info">
                                                    <div class="head-day"></div>
                                                    <div class="head-month"></div>
                                                </div>
                                                <div class="next-button"><i
                                                        class="fa-solid fa-circle-chevron-right"></i></div>
                                            </div>
                                            <table id="calendar">
                                                <thead>
                                                    <tr>
                                                        <th>CN</th>
                                                        <th>Hai</th>
                                                        <th>Ba</th>
                                                        <th>Tư</th>
                                                        <th>Năm</th>
                                                        <th>Sáu</th>
                                                        <th>Bảy</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="calen"></td>
                                                        <td class="calen"></td>
                                                        <td class="calen"></td>
                                                        <td class="calen"></td>
                                                        <td class="calen"></td>
                                                        <td class="calen"></td>
                                                        <td class="calen"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="calen"></td>
                                                        <td class="calen"></td>
                                                        <td class="calen"></td>
                                                        <td class="calen"></td>
                                                        <td class="calen"></td>
                                                        <td class="calen"></td>
                                                        <td class="calen"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="calen"></td>
                                                        <td class="calen"></td>
                                                        <td class="calen"></td>
                                                        <td class="calen"></td>
                                                        <td class="calen"></td>
                                                        <td class="calen"></td>
                                                        <td class="calen"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="calen"></td>
                                                        <td class="calen"></td>
                                                        <td class="calen"></td>
                                                        <td class="calen"></td>
                                                        <td class="calen"></td>
                                                        <td class="calen"></td>
                                                        <td class="calen"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="calen"></td>
                                                        <td class="calen"></td>
                                                        <td class="calen"></td>
                                                        <td class="calen"></td>
                                                        <td class="calen"></td>
                                                        <td class="calen"></td>
                                                        <td class="calen"></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="calen"></td>
                                                        <td class="calen"></td>
                                                        <td class="calen"></td>
                                                        <td class="calen"></td>
                                                        <td class="calen"></td>
                                                        <td class="calen"></td>
                                                        <td class="calen"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
            </div>
             <div class="col-lg-12">
                 <?php
            if(($personnel == true) || ($attendance == true) || ($block == true)){?>
    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title">Danh sách đã đăng ký</div>
                <div class="ibox-tools">
                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                    <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                </div>
            </div>
            <div class="ibox-body">

                <table class="table table-bordered">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th scope="col" width="5%">Ca</th>
                            <th class="monday" scope="col" width="25%">Thứ Hai</th>
                            <th scope="col" width="25%">Thứ Tư</th>
                            <th scope="col" width="25%">Thứ Sáu</th>
                        </tr>
                    </thead>
                    <?php
                 if( $_SESSION["role"] ==1 ){?>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                <?php 
                        while($row = mysqli_fetch_array($data["GetRegister12"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                      <?php
                            if($row['id_student'] == Session::get('id_student')){
                                echo $row['fullname']." <a target='_self' data-toggle='modal' data-target='#exampleModals' data-id_schedule='".$row['id_schedule']."' class='btn'><i class='fa fa-delete-left text-danger'></i></a><br>";
                            }else{
                                echo $row['fullname'];
                            }
                          ?>
                                </a>
                                

                                <?php }?>
                            </td>
                            <td>
                                <?php 
                        while($row = mysqli_fetch_array($data["GetRegister14"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                      <?php
                            if($row['id_student'] == Session::get('id_student')){
                                echo $row['fullname']." <a target='_self' data-toggle='modal' data-target='#exampleModals' data-id_schedule='".$row['id_schedule']."' class='btn'><i class='fa fa-delete-left text-danger'></i></a><br>";
                            }else{
                                echo $row['fullname'];
                            }
                          ?>
                                  </a>
                                <?php }?>
                            </td>
                             <td>
                                <?php 
                        while($row = mysqli_fetch_array($data["GetRegister16"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                      <?php
                            if($row['id_student'] == Session::get('id_student')){
                                echo $row['fullname']." <a target='_self' data-toggle='modal' data-target='#exampleModals' data-id_schedule='".$row['id_schedule']."' class='btn'><i class='fa fa-delete-left text-danger'></i></a><br>";
                            }else{
                                echo $row['fullname'];
                            }
                          ?>
                                </a>
                                

                                <?php }?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            
                            <td>
                                <?php 
                        while($row = mysqli_fetch_array($data["GetRegister22"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                      <?php
                            if($row['id_student'] == Session::get('id_student')){
                                echo $row['fullname']." <a target='_self' data-toggle='modal' data-target='#exampleModals' data-id_schedule='".$row['id_schedule']."' class='btn'><i class='fa fa-delete-left text-danger'></i></a><br>";
                            }else{
                                echo $row['fullname'];
                            }
                          ?>
                                 </a>
                                

                                <?php }?>
                            </td>
                             <td>
                                <?php 
                        while($row = mysqli_fetch_array($data["GetRegister24"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                      <?php
                            if($row['id_student'] == Session::get('id_student')){
                                echo $row['fullname']." <a target='_self' data-toggle='modal' data-target='#exampleModals' data-id_schedule='".$row['id_schedule']."' class='btn'><i class='fa fa-delete-left text-danger'></i></a><br>";
                            }else{
                                echo $row['fullname'];
                            }
                          ?>
                                 </a>
                                

                                <?php }?>
                            </td>
                            <td>
                                <?php 
                        while($row = mysqli_fetch_array($data["GetRegister26"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                      <?php
                            if($row['id_student'] == Session::get('id_student')){
                                echo $row['fullname']." <a target='_self' data-toggle='modal' data-target='#exampleModals' data-id_schedule='".$row['id_schedule']."' class='btn'><i class='fa fa-delete-left text-danger'></i></a><br>";
                            }else{
                                echo $row['fullname'];
                            }
                          ?>
  </a>
                                

                                <?php }?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>
                                <?php 
                        while($row = mysqli_fetch_array($data["GetRegister32"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                      <?php
                            if($row['id_student'] == Session::get('id_student')){
                                echo $row['fullname']." <a target='_self' data-toggle='modal' data-target='#exampleModals' data-id_schedule='".$row['id_schedule']."' class='btn'><i class='fa fa-delete-left text-danger'></i></a>";
                            }else{
                                echo $row['fullname'];
                            }
                          ?>
                                </a>
                                

                                <?php }?>
                            </td>
                           <td>
                                <?php 
                        while($row = mysqli_fetch_array($data["GetRegister34"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                      <?php
                            if($row['id_student'] == Session::get('id_student')){
                                echo $row['fullname']." <a target='_self' data-toggle='modal' data-target='#exampleModals' data-id_schedule='".$row['id_schedule']."' class='btn'><i class='fa fa-delete-left text-danger'></i></a><br>";
                            }else{
                                echo $row['fullname'];
                            }
                          ?>
                                 </a>
                                

                                <?php }?>
                            </td>
                             <td>
                                <?php 
                        while($row = mysqli_fetch_array($data["GetRegister36"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                      <?php
                            if($row['id_student'] == Session::get('id_student')){
                                echo $row['fullname']." <a target='_self' data-toggle='modal' data-target='#exampleModals' data-id_schedule='".$row['id_schedule']."' class='btn'><i class='fa fa-delete-left text-danger'></i></a><br>";
                            }else{
                                echo $row['fullname'];
                            }
                          ?>
                              </a>
                                

                                <?php }?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>
                                <?php 
                        while($row = mysqli_fetch_array($data["GetRegister42"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                      <?php
                            if($row['id_student'] == Session::get('id_student')){
                                echo $row['fullname']." <a target='_self' data-toggle='modal' data-target='#exampleModals' data-id_schedule='".$row['id_schedule']."' class='btn'><i class='fa fa-delete-left text-danger'></i></a><br>";
                            }else{
                                echo $row['fullname'];
                            }
                          ?>
                                 </a>
                                

                                <?php }?>
                            </td>
                            <td>
                                <?php 
                        while($row = mysqli_fetch_array($data["GetRegister44"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                      <?php
                            if($row['id_student'] == Session::get('id_student')){
                                echo $row['fullname']." <a target='_self' data-toggle='modal' data-target='#exampleModals' data-id_schedule='".$row['id_schedule']."' class='btn'><i class='fa fa-delete-left text-danger'></i></a><br>";
                            }else{
                                echo $row['fullname'];
                            }
                          ?>
                                  </a>
                                

                                <?php }?>
                            </td>
                             <td>
                                <?php 
                        while($row = mysqli_fetch_array($data["GetRegister46"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                      <?php
                            if($row['id_student'] == Session::get('id_student')){
                                echo $row['fullname']." <a target='_self' data-toggle='modal' data-target='#exampleModals' data-id_schedule='".$row['id_schedule']."' class='btn'><i class='fa fa-delete-left text-danger'></i></a><br>";
                            }else{
                                echo $row['fullname'];
                            }
                          ?>
                                 </a>
                                

                                <?php }?>
                            </td>
                        </tr>
                    </tbody>
                    <?php
                        }else{?>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                <?php 
                        while($row = mysqli_fetch_array($data["GetRegister12"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                    <?php echo $row['fullname'] ?>
                                </a>
                                                                <br>

                                <?php                        if($row['attendance'] == 1 ){
                                echo "<i class='fa fa--check text-success'></i>";
                            }else{ 
                            }
                          ?>
                                <?php }?>
                            </td>
                            <td>
                                <?php 
                        while($row = mysqli_fetch_array($data["GetRegister14"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                    <?php echo $row['fullname'] ?>
                                </a>
                                                                <br>

                                <?php                        if($row['attendance'] == 1 ){
                                echo "<i class='fa fa--check text-success'></i>";
                            }else{ 
                            }
                          ?>
                                <?php }?>
                            </td>
                            <td>
                                <?php 
                        while($row = mysqli_fetch_array($data["GetRegister16"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                    <?php echo $row['fullname'] ?>
                                </a>
                                                                <br>

                                <?php                        if($row['attendance'] == 1 ){
                                echo "<i class='fa fa--check text-success'></i>";
                            }else{ 
                            }
                          ?>
                                <?php }?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>
                                <?php 
                        while($row = mysqli_fetch_array($data["GetRegister22"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                    <?php echo $row['fullname'] ?>
                                </a>
                                                                <br>

                                <?php                        if($row['attendance'] == 1 ){
                                echo "<i class='fa fa--check text-success'></i>";
                            }else{ 
                            }
                          ?>
                                <?php }?>
                            </td>
                            <td>
                                <?php 
                        while($row = mysqli_fetch_array($data["GetRegister24"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                    <?php echo $row['fullname'] ?>
                                </a>
                                                                <br>

                                <?php                        if($row['attendance'] == 1 ){
                                echo "<i class='fa fa--check text-success'></i>";
                            }else{ 
                            }
                          ?>
                                <?php }?>
                            </td>
                            <td>
                                <?php 
                        while($row = mysqli_fetch_array($data["GetRegister26"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                    <?php echo $row['fullname'] ?>
                                </a>
                                                                <br>

                                <?php                        if($row['attendance'] == 1 ){
                                echo "<i class='fa fa--check text-success'></i>";
                            }else{ 
                            }
                          ?>
                                <?php }?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>
                                <?php 
                        while($row = mysqli_fetch_array($data["GetRegister32"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                    <?php echo $row['fullname'] ?>
                                </a>
                                <br>
                                <?php                        if($row['attendance'] == 1 ){
                                echo "<i class='fa fa--check text-success'></i>";
                            }else{ 
                            }
                          ?>
                                <?php }?>
                            </td>
                            <td>
                                <?php 
                        while($row = mysqli_fetch_array($data["GetRegister34"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                    <?php echo $row['fullname'] ?>
                                </a>
                                                                <br>

                                <?php                        if($row['attendance'] == 1 ){
                                echo "<i class='fa fa--check text-success'></i>";
                            }else{ 
                            }
                          ?>
                                <?php }?>
                            </td>
                            <td>
                                <?php 
                        while($row = mysqli_fetch_array($data["GetRegister36"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                    <?php echo $row['fullname'] ?>
                                </a>
                                
                                                                <br>

                                <?php                        if($row['attendance'] == 1 ){
                                echo "<i class='fa fa--check text-success'></i>";
                            }else{ 
                            }
                          ?>
                                <?php }?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>
                                <?php 
                        while($row = mysqli_fetch_array($data["GetRegister42"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                    <?php echo $row['fullname'] ?>
                                </a>
                                                                <br>

                                <?php                        if($row['attendance'] == 1 ){
                                echo "<i class='fa fa--check text-success'></i>";
                           }
                          ?>


                                <?php }?>
                            </td>
                            <td>
                                <?php 
                        while($row = mysqli_fetch_array($data["GetRegister44"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                    <?php echo $row['fullname'] ?>
                                </a><br>
                                <?php                        if($row['attendance'] == 1 ){
                                echo "<i class='fa fa--check text-success'></i>";
                            }else{ 
                            }
                          ?>
                                <?php }?>
                            </td>
                            <td>
                                <?php 
                        while($row = mysqli_fetch_array($data["GetRegister46"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                    <?php echo $row['fullname'] ?>
                                </a>
                                                                <br>

                                <?php                        if($row['attendance'] == 1 ){
                                echo "<i class='fa fa--check text-success'></i>";
                            }else{ 
                            }
                          ?>
                                <?php }?>
                            </td>
                        </tr>
                    </tbody>
                    <?php }?>
                </table>
            </div>
        </div>
    </div>
    <?php }else if($admin == true){?>
    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title">Danh sách đã đăng ký</div>
                  <div class="ibox-tools">
                <div class="btn">
                    <form action="Home/DeleteRegisterAll" method="post">
                        <button name="deleteall" type="submit" class="btn btn-sm btn-danger"><i
                                class="fa fa-delete-left"></i> Xóa tất cả</button>
                     </form>
                </div>
               <div class="btn">
                     <?php
                        if( $_SESSION["role"] ==1 ){?>c
                                <form action="Home/CloseForm" method="post">
                                        <button name="deleteall" type="submit" class="btn btn-sm btn-warning"><i class="fa fa-lock"></i> Khóa đăng ký</button>
                                    </form>
                                    <?php
                        }else{
                            echo '<form action="Home/OpenForm" method="post">
                                            <button name="deleteall" type="submit" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> Mở đăng ký</button>
                                        </form>';
                            
                        ?>
                                        <?php }?>
                </div>
                <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                <a class="fullscreen-link"><i class="fa fa-expand"></i></a>

            </div>
            </div>
            <div class="ibox-body">
                <div class="alert alert-info alert-dismissable fade show">
                    <button class="close" data-dismiss="alert" aria-label="Close">×</button><b>Chú ý!</b> Cần xóa bỏ tất
                    cả lịch đã đăng ký cũ, trước khi tiến hành đăng ký lịch học kỳ mới!
                </div>
                <table class="table table-bordered">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th scope="col" width="5%">Ca</th>
                            <th scope="col" width="25%">Thứ Hai</th>
                            <th scope="col" width="25%">Thứ Tư</th>
                            <th scope="col" width="25%">Thứ Sáu</th>
                        </tr>
                    </thead>
                    <?php
                 if( $_SESSION["role"] ==1 ){?>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                <?php 
                                        while($row = mysqli_fetch_array($data["GetRegister12"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                    <?php echo $row['fullname'] ?>sdkjn
                                </a>
                                <?php
                                                if($row['attendance'] == 1 ){
                                                echo " <i class='fa fa--check text-success'></i>";
                                                }else{ 
                                                }
                                            ?>
                                <?php
                                                echo "<a target='_self' data-toggle='modal' data-target='#exampleModals' data-id_schedule='".$row['id_schedule']."' class='btn'><i class='fa fa-delete-left text-danger'></i></a><br>";
                                                ?>
                                <?php }?>
                            </td>
                            <td>
                                <?php 
                                        while($row = mysqli_fetch_array($data["GetRegister14"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                    <?php echo $row['fullname'] ?>
                                </a>
                                <?php
                                                if($row['attendance'] == 1 ){
                                                echo " <i class='fa fa--check text-success'></i>";
                                                }else{ 
                                                }
                                            ?>
                                <?php
                                                echo "<a target='_self' data-toggle='modal' data-target='#exampleModals' data-id_schedule='".$row['id_schedule']."' class='btn'><i class='fa fa-delete-left text-danger'></i></a><br>";
                                                ?>
                                <?php }?>
                            </td>
                            <td>
                                <?php 
                                        while($row = mysqli_fetch_array($data["GetRegister16"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                    <?php echo $row['fullname'] ?>
                                </a>
                                <?php
                                                if($row['attendance'] == 1 ){
                                                echo " <i class='fa fa--check text-success'></i>";
                                                }else{ 
                                                }
                                            ?>
                                <?php
                                                echo "<a target='_self' data-toggle='modal' data-target='#exampleModals' data-id_schedule='".$row['id_schedule']."' class='btn'><i class='fa fa-delete-left text-danger'></i></a><br>";
                                                ?>
                                <?php }?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>
                                <?php 
                                        while($row = mysqli_fetch_array($data["GetRegister22"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                    <?php echo $row['fullname'] ?>
                                </a>
                                <?php
                                                if($row['attendance'] == 1 ){
                                                echo " <i class='fa fa--check text-success'></i>";
                                                }else{ 
                                                }
                                            ?>
                                <?php
                                                echo "<a target='_self' data-toggle='modal' data-target='#exampleModals' data-id_schedule='".$row['id_schedule']."' class='btn'><i class='fa fa-delete-left text-danger'></i></a><br>";
                                                ?>
                                <?php }?>
                            </td>
                            <td>
                                <?php 
                                        while($row = mysqli_fetch_array($data["GetRegister24"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                    <?php echo $row['fullname'] ?>
                                </a>
                                <?php
                                                if($row['attendance'] == 1 ){
                                                echo " <i class='fa fa--check text-success'></i>";
                                                }else{ 
                                                }
                                            ?>
                                <?php
                                                echo "<a target='_self' data-toggle='modal' data-target='#exampleModals' data-id_schedule='".$row['id_schedule']."' class='btn'><i class='fa fa-delete-left text-danger'></i></a><br>";
                                                ?>
                                <?php }?>
                            </td>
                            <td>
                                <?php 
                                        while($row = mysqli_fetch_array($data["GetRegister26"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                    <?php echo $row['fullname'] ?>
                                </a>
                                <?php
                                                    if($row['attendance'] == 1 ){
                                                    echo " <i class='fa fa--check text-success'></i>";
                                                    }else{ 
                                                    }
                                                ?>
                                <?php
                                                    echo "<a target='_self' data-toggle='modal' data-target='#exampleModals' data-id_schedule='".$row['id_schedule']."' class='btn'><i class='fa fa-delete-left text-danger'></i></a><br>";
                                                    ?>
                                <?php }?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>
                                <?php 
                                        while($row = mysqli_fetch_array($data["GetRegister32"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                    <?php echo $row['fullname'] ?>
                                </a>
                                <?php
                                                if($row['attendance'] == 1 ){
                                                echo " <i class='fa fa--check text-success'></i>";
                                                }else{ 
                                                }
                                            ?>
                                <?php
                                                echo "<a target='_self' data-toggle='modal' data-target='#exampleModals' data-id_schedule='".$row['id_schedule']."' class='btn'><i class='fa fa-delete-left text-danger'></i></a><br>";
                                                ?>
                                <?php }?>
                            </td>
                            <td>
                                <?php 
                                        while($row = mysqli_fetch_array($data["GetRegister34"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                    <?php echo $row['fullname'] ?>
                                </a>
                                <?php
                                                if($row['attendance'] == 1 ){
                                                echo " <i class='fa fa--check text-success'></i>";
                                                }else{ 
                                                }
                                            ?>
                                <?php
                                                echo "<a target='_self' data-toggle='modal' data-target='#exampleModals' data-id_schedule='".$row['id_schedule']."' class='btn'><i class='fa fa-delete-left text-danger'></i></a><br>";
                                                ?>
                                <?php }?>
                            </td>
                            <td>
                                <?php 
                                        while($row = mysqli_fetch_array($data["GetRegister36"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                    <?php echo $row['fullname'] ?>
                                </a>
                                <?php
                                                if($row['attendance'] == 1 ){
                                                echo " <i class='fa fa--check text-success'></i>";
                                                }else{ 
                                                }
                                            ?>
                                <?php
                                                echo "<a target='_self' data-toggle='modal' data-target='#exampleModals' data-id_schedule='".$row['id_schedule']."' class='btn'><i class='fa fa-delete-left text-danger'></i></a><br>";
                                                ?>
                                <?php }?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>
                                <?php 
                                        while($row = mysqli_fetch_array($data["GetRegister42"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                    <?php echo $row['fullname'] ?>
                                </a>
                                <?php
                                                if($row['attendance'] == 1 ){
                                                echo " <i class='fa fa--check text-success'></i>";
                                                }else{ 
                                                }
                                            ?>
                                <?php
                                                echo "<a target='_self' data-toggle='modal' data-target='#exampleModals' data-id_schedule='".$row['id_schedule']."' class='btn'><i class='fa fa-delete-left text-danger'></i></a><br>";
                                                ?>
                                <?php }?>
                            </td>
                            <td>
                                <?php 
                                        while($row = mysqli_fetch_array($data["GetRegister44"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                    <?php echo $row['fullname'] ?>
                                </a>
                                <?php
                                                if($row['attendance'] == 1 ){
                                                echo " <i class='fa fa--check text-success'></i>";
                                                }else{ 
                                                }
                                            ?>
                                <?php
                                                echo "<a target='_self' data-toggle='modal' data-target='#exampleModals' data-id_schedule='".$row['id_schedule']."' class='btn'><i class='fa fa-delete-left text-danger'></i></a><br>";
                                                ?>
                                <?php }?>
                            </td>
                            <td>
                                <?php 
                                        while($row = mysqli_fetch_array($data["GetRegister46"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                    <?php echo $row['fullname'] ?>
                                </a>
                                <?php
                                                if($row['attendance'] == 1 ){
                                                echo " <i class='fa fa--check text-success'></i>";
                                                }else{ 
                                                }
                                            ?>
                                <?php
                                                echo "<a target='_self' data-toggle='modal' data-target='#exampleModals' data-id_schedule='".$row['id_schedule']."' class='btn'><i class='fa fa-delete-left text-danger'></i></a><br>";
                                                ?>
                                <?php }?>
                            </td>
                        </tr>
                    </tbody>
                    <?php
                        }else{?>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>
                                <?php 
                                        while($row = mysqli_fetch_array($data["GetRegisters12"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                    <?php echo $row['fullname'] ?>
                                </a>
                                <?php
                                                if($row['attendance'] == 1 ){
                                                echo " <i class='fa fa--check text-success'></i>";
                                                }else{ 
                                                }
                                            ?>
                                <?php
                                                echo "<a target='_self' data-toggle='modal' data-target='#exampleModals' data-id_schedule='".$row['id_schedule']."' class='btn'><i class='fa fa-delete-left text-danger'></i></a><br>";
                                                ?>
                                <?php }?>
                            </td>
                            <td>
                                <?php 
                                        while($row = mysqli_fetch_array($data["GetRegisters14"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                    <?php echo $row['fullname'] ?>
                                </a>
                                <?php
                                                if($row['attendance'] == 1 ){
                                                echo " <i class='fa fa--check text-success'></i>";
                                                }else{ 
                                                }
                                            ?>
                                <?php
                                                echo "<a target='_self' data-toggle='modal' data-target='#exampleModals' data-id_schedule='".$row['id_schedule']."' class='btn'><i class='fa fa-delete-left text-danger'></i></a><br>";
                                                ?>
                                <?php }?>
                            </td>
                            <td>
                                <?php 
                                        while($row = mysqli_fetch_array($data["GetRegisters16"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                    <?php echo $row['fullname'] ?>
                                </a>
                                <?php
                                                if($row['attendance'] == 1 ){
                                                echo " <i class='fa fa--check text-success'></i>";
                                                }else{ 
                                                }
                                            ?>
                                <?php
                                                echo "<a target='_self' data-toggle='modal' data-target='#exampleModals' data-id_schedule='".$row['id_schedule']."' class='btn'><i class='fa fa-delete-left text-danger'></i></a><br>";
                                                ?>
                                <?php }?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>
                                <?php 
                                        while($row = mysqli_fetch_array($data["GetRegister22"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                    <?php echo $row['fullname'] ?>
                                </a>
                                <?php
                                                if($row['attendance'] == 1 ){
                                                echo " <i class='fa fa--check text-success'></i>";
                                                }else{ 
                                                }
                                            ?>
                                <?php
                                                echo "<a target='_self' data-toggle='modal' data-target='#exampleModals' data-id_schedule='".$row['id_schedule']."' class='btn'><i class='fa fa-delete-left text-danger'></i></a><br>";
                                                ?>
                                <?php }?>
                            </td>
                            <td>
                                <?php 
                                        while($row = mysqli_fetch_array($data["GetRegisters24"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                    <?php echo $row['fullname'] ?>
                                </a>
                                <?php
                                                if($row['attendance'] == 1 ){
                                                echo " <i class='fa fa--check text-success'></i>";
                                                }else{ 
                                                }
                                            ?>
                                <?php
                                                echo "<a target='_self' data-toggle='modal' data-target='#exampleModals' data-id_schedule='".$row['id_schedule']."' class='btn'><i class='fa fa-delete-left text-danger'></i></a><br>";
                                                ?>
                                <?php }?>
                            </td>
                            <td>
                                <?php 
                                        while($row = mysqli_fetch_array($data["GetRegisters26"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                    <?php echo $row['fullname'] ?>
                                </a>
                                <?php
                                                    if($row['attendance'] == 1 ){
                                                    echo " <i class='fa fa--check text-success'></i>";
                                                    }else{ 
                                                    }
                                                ?>
                                <?php
                                                    echo "<a target='_self' data-toggle='modal' data-target='#exampleModals' data-id_schedule='".$row['id_schedule']."' class='btn'><i class='fa fa-delete-left text-danger'></i></a><br>";
                                                    ?>
                                <?php }?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>
                                <?php 
                                        while($row = mysqli_fetch_array($data["GetRegisters32"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                    <?php echo $row['fullname'] ?>
                                </a>
                                <?php
                                                if($row['attendance'] == 1 ){
                                                echo " <i class='fa fa--check text-success'></i>";
                                                }else{ 
                                                }
                                            ?>
                                <?php
                                                echo "<a target='_self' data-toggle='modal' data-target='#exampleModals' data-id_schedule='".$row['id_schedule']."' class='btn'><i class='fa fa-delete-left text-danger'></i></a><br>";
                                                ?>
                                <?php }?>
                            </td>
                            <td>
                                <?php 
                                        while($row = mysqli_fetch_array($data["GetRegisters34"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                    <?php echo $row['fullname'] ?>
                                </a>
                                <?php
                                                if($row['attendance'] == 1 ){
                                                echo " <i class='fa fa--check text-success'></i>";
                                                }else{ 
                                                }
                                            ?>
                                <?php
                                                echo "<a target='_self' data-toggle='modal' data-target='#exampleModals' data-id_schedule='".$row['id_schedule']."' class='btn'><i class='fa fa-delete-left text-danger'></i></a><br>";
                                                ?>
                                <?php }?>
                            </td>
                            <td>
                                <?php 
                                        while($row = mysqli_fetch_array($data["GetRegisters36"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                    <?php echo $row['fullname'] ?>
                                </a>
                                <?php
                                                if($row['attendance'] == 1 ){
                                                echo " <i class='fa fa--check text-success'></i>";
                                                }else{ 
                                                }
                                            ?>
                                <?php
                                                echo "<a target='_self' data-toggle='modal' data-target='#exampleModals' data-id_schedule='".$row['id_schedule']."' class='btn'><i class='fa fa-delete-left text-danger'></i></a><br>";
                                                ?>
                                <?php }?>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>
                                <?php 
                                        while($row = mysqli_fetch_array($data["GetRegisters42"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                    <?php echo $row['fullname'] ?>
                                </a>
                                <?php
                                                if($row['attendance'] == 1 ){
                                                echo " <i class='fa fa--check text-success'></i>";
                                                }else{ 
                                                }
                                            ?>
                                <?php
                                                echo "<a target='_self' data-toggle='modal' data-target='#exampleModals' data-id_schedule='".$row['id_schedule']."' class='btn'><i class='fa fa-delete-left text-danger'></i></a><br>";
                                                ?>
                                <?php }?>
                            </td>
                            <td>
                                <?php 
                                        while($row = mysqli_fetch_array($data["GetRegisters44"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                    <?php echo $row['fullname'] ?>
                                </a>
                                <?php
                                                if($row['attendance'] == 1 ){
                                                echo " <i class='fa fa--check text-success'></i>";
                                                }else{ 
                                                }
                                            ?>
                                <?php
                                                echo "<a target='_self' data-toggle='modal' data-target='#exampleModals' data-id_schedule='".$row['id_schedule']."' class='btn'><i class='fa fa-delete-left text-danger'></i></a><br>";
                                                ?>
                                <?php }?>
                            </td>
                            <td>
                                <?php 
                                        while($row = mysqli_fetch_array($data["GetRegisters46"])){?>
                                <a data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title=" <?php echo $row['id_student'] ?>">
                                    <?php echo $row['fullname'] ?>
                                </a>
                                <?php
                                                if($row['attendance'] == 1 ){
                                                echo " <i class='fa fa--check text-success'></i>";
                                                }else{ 
                                                }
                                            ?>
                                <?php
                                                echo "<a target='_self' data-toggle='modal' data-target='#exampleModals' data-id_schedule='".$row['id_schedule']."' class='btn'><i class='fa fa-delete-left text-danger'></i></a><br>";
                                                ?>
                                <?php }?>
                            </td>
                        </tr>
                    </tbody>
                    <?php }?>
                </table>
            </div>
        </div>
    </div>
    <?php }?>
            </div>
        </div>
                </div>
<div class="modal fade" id="exampleModals" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <form action="Home/DeleteSchedule" method="POST">
                    <input style="display:none" name="id_schedule" type="text" id="id_schedule">
                    <div class="modal-header flex-column">
                        <div class="icon-box">
                            <img src="https://cdn.dribbble.com/s/251873/screenshots/9388228/error-img.gif" alt=""
                                sizes="" srcset="">
                        </div>
                        <h Thứ Sáu class="modal-title w-100 text-center">Bạn có muốn xóa hay không ?</h Thứ Sáu>
                    </div>
                    <!-- <div class="modal-body">
                        <p>Do you really want to delete these records? This process Ca nnot be undone.</p>
                    </div> -->
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Không</button>
                        <button name="deleteschedule" type="submit" class="btn btn-danger">Có</button>
                    </div>
                    </from>
            </div>

        </div>
    </div>
</div>
    <!-- END PAGE CONTENT-->
<!-- END PAGE CONTENT-->
<script>
    $(document).ready(function () {
        $('#exampleModals').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var id_schedule = button.data('id_schedule') // Extract info from data-* attributes
            $('#id_schedule').attr('value', id_schedule);
        })

    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var today = new Date(),
            year = today.getFullYear(),
            month = today.getMonth(),
            monthTag = ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7", "Tháng 8",
                "Tháng 9", "Tháng 10", "Tháng 11", "Tháng 12"
            ],
            day = today.getDate(),
            days = document.getElementsByTagName('td'),
            selectedDay,
            setDate,
            daysLen = days.length;
        const first = today.getDate() - today.getDay() + 1;
        const Mo = String(new Date(today.setDate(first)));
        const We = String(new Date(today.setDate(first + 2)));
        const Fr = String(new Date(today.setDate(first + 4)));

        function Calendar(selector, options) {
            this.options = options;
            this.draw();

        }

        function convert(str) {
            var mnths = {
                Jan: "01",
                Feb: "02",
                Mar: "03",
                Apr: "04",
                May: "05",
                Jun: "06",
                Jul: "07",
                Aug: "08",
                Sep: "09",
                Oct: "10",
                Nov: "11",
                Dec: "12"
            },
                date = str.split(" ");

            return [date[2], mnths[date[1]], date[3]].join("-");
        }

        $('.mon').text(convert(Mo));
        $('.wed').text(convert(We));
        $('.fri').text(convert(Fr));

        Calendar.prototype.draw = function () {
            this.getCookie('selected_day');
            this.getOptions();
            this.drawDays();
            var that = this,
                reset = document.getElementById('reset'),
                pre = document.getElementsByClassName('pre-button'),
                next = document.getElementsByClassName('next-button');

            pre[0].addEventListener('click', function () {
                that.preMonth();
            });
            next[0].addEventListener('click', function () {
                that.nextMonth();
            });
            reset.addEventListener('click', function () {
                that.reset();
            });
            while (daysLen--) {
                days[daysLen].addEventListener('click', function () {
                    that.clickDay(this);
                });
            }
        };

        Calendar.prototype.drawHeader = function (e) {
            var headDay = document.getElementsByClassName('head-day'),
                headMonth = document.getElementsByClassName('head-month');
            e ? headDay[0].innerHTML = e : headDay[0].innerHTML = day;
            headMonth[0].innerHTML = monthTag[month] + " năm " + year;
        };

        Calendar.prototype.drawDays = function () {
            var startDay = new Date(year, month, 1).getDay(),
                nDays = new Date(year, month + 1, 0).getDate(),
                n = startDay;
            for (var k = 0; k < 42; k++) {
                days[k].innerHTML = '';
                days[k].id = '';
                days[k].className = '';
            }

            for (var i = 1; i <= nDays; i++) {
                days[n].innerHTML = i;
                n++;
            }

            for (var j = 0; j < 42; j++) {
                if (days[j].innerHTML === "") {

                    days[j].id = "disabled";

                } else if (j === day + startDay - 1) {
                    if ((this.options && (month === setDate.getMonth()) && (year === setDate.getFullYear())) ||
                        (!this.options && (month === today.getMonth()) && (year === today.getFullYear()))) {
                        this.drawHeader(day);
                        days[j].id = "today";
                    }
                }
                if (selectedDay) {
                    if ((j === selectedDay.getDate() + startDay - 1) && (month === selectedDay.getMonth()) && (
                        year === selectedDay.getFullYear())) {
                        days[j].className = "selected";
                        this.drawHeader(selectedDay.getDate());
                    }
                }
            }
        };
        Calendar.prototype.preMonth = function () {
            if (month < 1) {
                month = 11;
                year = year - 1;
            } else {
                month = month - 1;
            }
            this.drawHeader(1);
            this.drawDays();
        };

        Calendar.prototype.nextMonth = function () {
            if (month >= 11) {
                month = 0;
                year = year + 1;
            } else {
                month = month + 1;
            }
            this.drawHeader(1);
            this.drawDays();
        };

        Calendar.prototype.getOptions = function () {
            if (this.options) {
                var sets = this.options.split('-');
                setDate = new Date(sets[0], sets[1] - 1, sets[2]);
                day = setDate.getDate();
                year = setDate.getFullYear();
                month = setDate.getMonth();
            }
        };

        Calendar.prototype.reset = function () {
            month = today.getMonth();
            year = today.getFullYear();
            day = today.getDate();
            this.options = undefined;
            this.drawDays();
        };

        Calendar.prototype.setCookie = function (name, expiredays) {
            if (expiredays) {
                var date = new Date();
                date.setTime(date.getTime() + (expiredays * 24 * 60 * 60 * 1000));
                var expires = "; expires=" + date.toGMTString();
            } else {
                var expires = "";
            }
            document.cookie = name + "=" + selectedDay + expires + "; path=/";
        };

        Calendar.prototype.getCookie = function (name) {
            if (document.cookie.length) {
                var arrCookie = document.cookie.split(';'),
                    nameEQ = name + "=";
                for (var i = 0, cLen = arrCookie.length; i < cLen; i++) {
                    var c = arrCookie[i];
                    while (c.charAt(0) == ' ') {
                        c = c.substring(1, c.length);

                    }
                    if (c.indexOf(nameEQ) === 0) {
                        selectedDay = new Date(c.substring(nameEQ.length, c.length));
                    }
                }
            }
        };
        var calendar = new Calendar();


    }, false);
</script>

<script>
    function myFunctions() {

        return toastr.warning('Chưa đến giờ mở Form. Vui lòng quay lại sau!');

    }
</script>